<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('auth.user.login');
});

Route::get('create-checkout', function () {
    return view('checkout.create'); 
});

Route::get('checkout-success', function () {
    return view('checkout.success'); 
});

Route::get('dashboard', function () {
    return view('user.dashboard'); 
});