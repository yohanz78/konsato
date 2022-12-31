<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;

Route::get('/', [HomeController::class, 'index'])->name('index');

// Route::get('login', function () {
//    return view('auth.user.login');
// });

// Socialite route
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::middleware(['auth'])->group(function () {
    // Checkout route
    Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
    Route::get('checkout/{event:slug}', [CheckoutController::class, 'create'])->name('checkout.create');
    Route::post('checkout/{event}', [CheckoutController::class, 'store'])->name('checkout.store');
    // Dashboard route
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('user.dashboard');
    Route::get('dashboard/checkout/invoice/{checkout}', [CheckoutController::class, 'invoice'])->name('user.checkout.invoice');
});

// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
