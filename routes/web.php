<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', [AuthController::class, 'showLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest')->name('login.attempt');
Route::get('/register', [AuthController::class, 'showRegister'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'register'])->middleware('guest')->name('register.store');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/bookings', [BookingController::class, 'index']);
    Route::post('/bookings', [BookingController::class, 'store']);
});

// Shop routes
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/cart', [ShopController::class, 'cart'])->name('cart.index');
Route::post('/cart/add', [ShopController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove/{productId}', [ShopController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update/{productId}', [ShopController::class, 'updateQuantity'])->name('cart.update');
Route::middleware('auth')->group(function () {
    Route::post('/checkout', [ShopController::class, 'checkout'])->name('checkout');
    Route::post('/process-payment', [ShopController::class, 'processPayment'])->name('process-payment');
});
