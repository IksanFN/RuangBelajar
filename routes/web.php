<?php

use App\Http\Controllers\BootcampController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/bootcamp', [BootcampController::class, 'bootcamp'])->name('bootcamp');

// Route Checkout
Route::get('/checkout/success', [CheckoutController::class, 'checkoutSuccess'])->name('checkout.success');
Route::get('/checkout/{bootcamp:slug}', [CheckoutController::class, 'create'])->name('checkout');
Route::post('/checkout/{bootcamp}', [CheckoutController::class, 'store'])->name('checkout.store');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth Socialite
Route::get('/sign-in-google', [UserController::class, 'google'])->name('user.login_google');
Route::get('/auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google_callback');

require __DIR__.'/auth.php';
