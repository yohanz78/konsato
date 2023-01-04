<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;

Route::get('/', [HomeController::class, 'index'])->name('index');

// Route::get('login', function () {
//    return view('auth.user.login');
// });

// Socialite route
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

// Midtrans route
Route::get('payment/success', [CheckoutController::class, 'midtransCallback']);
Route::post('payment/success', [CheckoutController::class, 'midtransCallback']);

Route::middleware(['auth'])->group(function () {
    // Checkout route
    Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success')->middleware('ensureUserRole:user');
    Route::get('checkout/{event:slug}', [CheckoutController::class, 'create'])->name('checkout.create')->middleware('ensureUserRole:user');
    Route::post('checkout/{event}', [CheckoutController::class, 'store'])->name('checkout.store')->middleware('ensureUserRole:user');
    // Dashboard route
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard/checkout/invoice/{checkout}', [CheckoutController::class, 'invoice'])->name('user.checkout.invoice');

    // user dashboard
    Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('ensureUserRole:user')->group(function(){
        Route::get('/', [UserDashboard::class, 'dashboard'])->name('dashboard');
    });
    
    // admin dashboard
    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function(){
        Route::get('/', [AdminDashboard::class, 'dashboard'])->name('dashboard');
    
    // admin checkout
    Route::post('checkout/{checkout}', [AdminCheckout::class, 'update'])->name('checkout.update');
    });
});

// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
