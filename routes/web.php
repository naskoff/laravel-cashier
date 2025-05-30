<?php

declare(strict_types=1);

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/checkout', CheckoutController::class)
    ->middleware(['auth', 'verified'])
    ->name('checkout');

Route::get('/checkout/success', function () {
    return response('Checkout success', 200);
})->name('checkout.success');

Route::get('/checkout/cancel', function () {
    return response('Checkout cancelled', 200);
})->name('checkout.cancel');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
