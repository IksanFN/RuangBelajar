<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route User Guest
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/bootcamp', function () {
    return view('user.bootcamp.index');
})->name('bootcamp');
Route::get('/detail-bootcamp', function () {
    return view('user.bootcamp.detail');
});

Route::get('/sign-in', function () {
    return view('auth');
})->name('auth');

Route::get('/checkout', function () {
    return view('user.checkout.index');
});

Route::get('/success-checkout', function () {
    return view('user.checkout.success-checkout');
});