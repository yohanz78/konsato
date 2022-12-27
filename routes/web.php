<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('login', function () {
//    return view('auth.user.login');
// });

Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');

Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('checkout/success', function () {
    return view('checkout.success');
});

Route::get('checkout/{camp}', function () {
    return view('checkout.create');
});

require __DIR__.'/auth.php';
