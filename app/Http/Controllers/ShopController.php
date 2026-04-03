<?php

namespace App\Http\Controllers;

use App\Models\ShopPayment;
use App\Models\ShopProduct;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class ShopController extends Controller
{
    /**
     * Show the shop page.
     */
    public function index()
    {
        $products = ShopProduct::where('is_active', true)->get();
        return view('shop', compact('products'));
    }

    /**
     * Show the cart page.
     */
    public function cart()
    {
        $cartItems = collect(session('cart', []));
        $products = ShopProduct::whereIn('id', $cartItems->keys())->get();

        $items = $cartItems->map(function ($qty, $productId) use ($products) {
            $product = $products->find($productId);
            return $product ? [
                'product' => $product,
                'quantity' => $qty,
                'total' => $product->price * $qty,
            ] : null;
        })->filter();

        $subtotal = $items->sum('total');

        return view('cart', [
            'items' => $items,
            'subtotal' => $subtotal,
            'cartCount' => $cartItems->sum(),
        ]);
    }

    /**
     * Add item to cart.
     */
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:shop_products,id',
            'quantity' => 'required|integer|min:1|max:100',
        ]);

        $productId = $request->product_id;
        $quantity = $request->quantity;

        // Get or create cart
        $cart = session('cart', []);

        // Add or update quantity
        if (isset($cart[$productId])) {
            $cart[$productId] += $quantity;
        } else {
            $cart[$productId] = $quantity;
        }

        session(['cart' => $cart]);

        return response()->json([
            'success' => true,
            'message' => 'Item toegevoegd aan winkelwagen',
            'cartCount' => array_sum($cart),
        ]);
    }

    /**
     * Remove item from cart.
     */
    public function removeFromCart($productId)
    {
        $cart = session('cart', []);
        unset($cart[$productId]);
        session(['cart' => $cart]);

        return response()->json([
            'success' => true,
            'cartCount' => array_sum($cart),
        ]);
    }

    /**
     * Update item quantity.
     */
    public function updateQuantity(Request $request, $productId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:100',
        ]);

        $cart = session('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId] = $request->quantity;
            session(['cart' => $cart]);
        }

        return response()->json([
            'success' => true,
            'cartCount' => array_sum($cart),
        ]);
    }

    /**
     * Checkout with Stripe.
     */
    public function checkout(Request $request)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect('/shop')->with('error', 'Je winkelwagen is leeg');
        }

        $cartItems = collect($cart);
        $products = ShopProduct::whereIn('id', $cartItems->keys())->get();

        $items = $cartItems->map(function ($qty, $productId) use ($products) {
            $product = $products->find($productId);
            return $product ? [
                'product' => $product,
                'quantity' => $qty,
                'total' => $product->price * $qty,
            ] : null;
        })->filter();

        $amount = (int) $items->sum('total');

        try {
            Stripe::setApiKey(config('services.stripe.secret'));

            $paymentIntent = PaymentIntent::create([
                'amount' => $amount,
                'currency' => 'eur',
                'payment_method_types' => ['card'],
                'metadata' => [
                    'user_id' => auth()->id(),
                ],
            ]);

            return view('shop-checkout', [
                'clientSecret' => $paymentIntent->client_secret,
                'items' => $items,
                'amount' => $amount,
                'publishableKey' => config('services.stripe.public'),
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'Betaling kon niet worden verwerkt: ' . $e->getMessage());
        }
    }

    /**
     * Handle Stripe webhook after successful payment.
     */
    public function processPayment(Request $request)
    {
        if (!auth()->check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $request->validate([
            'paymentIntentId' => 'required|string',
        ]);

        try {
            Stripe::setApiKey(config('services.stripe.secret'));
            $paymentIntent = PaymentIntent::retrieve($request->paymentIntentId);

            if ($paymentIntent->status !== 'succeeded') {
                return response()->json(['error' => 'Payment failed'], 400);
            }

            // Get cart items
            $cart = session('cart', []);
            $cartItems = collect($cart);
            $products = ShopProduct::whereIn('id', $cartItems->keys())->get();

            // Create payment records for each item
            $cartItems->each(function ($qty, $productId) use ($products, $paymentIntent) {
                $product = $products->find($productId);
                if ($product) {
                    ShopPayment::create([
                        'user_id' => auth()->id(),
                        'product_name' => $product->name,
                        'amount' => $product->price * $qty,
                        'payment_status' => 'completed',
                        'payment_method' => 'stripe',
                        'transaction_id' => $paymentIntent->id,
                        'paid_at' => now(),
                    ]);
                }
            });

            // Clear cart
            session(['cart' => []]);

            return response()->json([
                'success' => true,
                'message' => 'Betaling succesvol verwerkt',
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
