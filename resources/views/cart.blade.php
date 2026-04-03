<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen — Secret Agent Bunker & Resorts</title>
    <link href="/css/app.css" rel="stylesheet">
    <style>
        .cart-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .cart-header {
            margin-bottom: 2rem;
            border-bottom: 2px solid #c9a84c;
            padding-bottom: 1rem;
        }

        .cart-content {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        @media (max-width: 768px) {
            .cart-content {
                grid-template-columns: 1fr;
            }
        }

        .cart-items {
            background: rgba(245, 240, 232, .05);
            border: 1px solid rgba(201, 168, 76, .15);
            border-radius: 8px;
            padding: 1.5rem;
        }

        .cart-item {
            display: grid;
            grid-template-columns: 80px 1fr auto;
            gap: 1.5rem;
            padding: 1.5rem;
            border-bottom: 1px solid rgba(201, 168, 76, .1);
            align-items: center;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item__image {
            width: 80px;
            height: 80px;
            background: rgba(201, 168, 76, .1);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }

        .cart-item__info h3 {
            color: var(--ivory);
            margin: 0 0 0.5rem 0;
            font-size: 1rem;
        }

        .cart-item__info p {
            color: rgba(245, 240, 232, .5);
            margin: 0;
            font-size: 0.85rem;
        }

        .cart-item__controls {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .qty-btn {
            background: rgba(201, 168, 76, .15);
            border: 1px solid rgba(201, 168, 76, .3);
            color: var(--ivory);
            width: 32px;
            height: 32px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.2s;
        }

        .qty-btn:hover {
            background: rgba(201, 168, 76, .25);
        }

        .qty-display {
            min-width: 40px;
            text-align: center;
            color: var(--ivory);
        }

        .remove-btn {
            background: rgba(255, 100, 100, .15);
            border: 1px solid rgba(255, 100, 100, .3);
            color: #ff6464;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.85rem;
            transition: all 0.2s;
        }

        .remove-btn:hover {
            background: rgba(255, 100, 100, .25);
        }

        .cart-item__price {
            text-align: right;
            color: var(--gold);
            font-weight: 700;
            font-size: 1.1rem;
        }

        .cart-summary {
            background: rgba(245, 240, 232, .05);
            border: 1px solid rgba(201, 168, 76, .15);
            border-radius: 8px;
            padding: 1.5rem;
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            color: rgba(245, 240, 232, .7);
            font-size: 0.95rem;
        }

        .summary-row--total {
            border-top: 2px solid rgba(201, 168, 76, .2);
            padding-top: 1rem;
            color: var(--ivory);
            font-size: 1.3rem;
            font-weight: 700;
        }

        .summary-row--total span:last-child {
            color: var(--gold);
        }

        .checkout-btn {
            width: 100%;
            margin-top: 1.5rem;
            padding: 1rem;
            background: var(--gold);
            color: #000;
            border: none;
            border-radius: 6px;
            font-weight: 700;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .checkout-btn:hover {
            background: #d4af37;
            transform: translateY(-2px);
        }

        .checkout-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }

        .empty-cart {
            text-align: center;
            padding: 3rem 2rem;
        }

        .empty-cart__icon {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        .empty-cart h2 {
            color: var(--ivory);
            margin-bottom: 0.5rem;
        }

        .empty-cart p {
            color: rgba(245, 240, 232, .5);
            margin-bottom: 1.5rem;
        }

        .back-btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background: rgba(201, 168, 76, .15);
            border: 1px solid rgba(201, 168, 76, .3);
            color: var(--gold);
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .back-btn:hover {
            background: rgba(201, 168, 76, .25);
        }
    </style>
</head>

<body>

    @include('navbar')

    <main style="background:var(--deep);min-height:100vh;padding:2rem 0;">
        <div class="cart-container">

            <div class="cart-header">
                <span class="sa-section-tag">Aankopen</span>
                <h1 class="sa-heading" style="font-size:2rem;color:var(--ivory);margin:0.5rem 0 0 0;">Winkelwagen</h1>
            </div>

            @if ($items->count() > 0)
                <div class="cart-content">

                    <!-- Cart Items -->
                    <div class="cart-items">
                        @foreach ($items as $item)
                            <div class="cart-item" data-product-id="{{ $item['product']->id }}">

                                <div class="cart-item__image">
                                    {{ $item['product']->emoji }}
                                </div>

                                <div class="cart-item__info">
                                    <h3>{{ $item['product']->name }}</h3>
                                    <p>€{{ number_format($item['product']->price / 100, 2, ',', '.') }} per stuk</p>
                                </div>

                                <div class="cart-item__controls">
                                    <button class="qty-btn" onclick="updateQty(this, -1)" title="Decrease">−</button>
                                    <span class="qty-display">{{ $item['quantity'] }}</span>
                                    <button class="qty-btn" onclick="updateQty(this, 1)" title="Increase">+</button>
                                    <button class="remove-btn" onclick="removeItem({{ $item['product']->id }})"
                                        title="Remove">Verwijder</button>
                                </div>

                                <div class="cart-item__price">
                                    €{{ number_format($item['total'] / 100, 2, ',', '.') }}
                                </div>

                            </div>
                        @endforeach
                    </div>

                    <!-- Cart Summary -->
                    <div class="cart-summary">
                        <div class="summary-row">
                            <span>Subtotaal</span>
                            <span>€{{ number_format($subtotal / 100, 2, ',', '.') }}</span>
                        </div>
                        <div class="summary-row">
                            <span>Verzending</span>
                            <span>Gratis</span>
                        </div>
                        <div class="summary-row--total">
                            <span>Totaal</span>
                            <span id="totalPrice">€{{ number_format($subtotal / 100, 2, ',', '.') }}</span>
                        </div>

                        @auth
                            <form action="{{ route('checkout') }}" method="POST">
                                @csrf
                                <button type="submit" class="checkout-btn">Naar betaling →</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="checkout-btn"
                                style="display:block;text-align:center;text-decoration:none;">Inloggen om te betalen</a>
                        @endauth

                        <a href="{{ route('shop.index') }}" class="back-btn"
                            style="display:block;text-align:center;margin-top:1rem;">← Terug naar shop</a>
                    </div>

                </div>
            @else
                <div class="empty-cart">
                    <div class="empty-cart__icon">🛒</div>
                    <h2>Je winkelwagen is leeg</h2>
                    <p>Voeg wat leuke producten toe en kom terug naar de winkelwagen.</p>
                    <a href="{{ route('shop.index') }}" class="back-btn">Naar shop →</a>
                </div>
            @endif

        </div>
    </main>

    <footer style="background:#060e09;padding:2rem;text-align:center;border-top:1px solid rgba(201,168,76,.1);">
        <p style="color:rgba(245,240,232,.3);font-size:.75rem;letter-spacing:.1em;">© 2026 Secret Agent Bunker & Resorts
            · <a href="/about" style="color:var(--gold);text-decoration:none;">Over ons</a> · <a href="/contact"
                style="color:var(--gold);text-decoration:none;">Contact</a></p>
    </footer>

    <script>
        function updateQty(btn, change) {
            const cartItem = btn.closest('.cart-item');
            const productId = cartItem.dataset.productId;
            const qtyDisplay = cartItem.querySelector('.qty-display');
            let currentQty = parseInt(qtyDisplay.textContent);
            let newQty = currentQty + change;

            if (newQty < 1) {
                newQty = 1;
            }

            fetch(`/cart/update/${productId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        quantity: newQty
                    }),
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    }
                });
        }

        function removeItem(productId) {
            if (confirm('Wil je dit item uit je winkelwagen verwijderen?')) {
                fetch(`/cart/remove/${productId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        }
                    });
            }
        }
    </script>

</body>

</html>
