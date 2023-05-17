<?php

use App\Http\Controllers\BootcampController;
use App\Http\Controllers\CheckoutController;
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
Route::get('/checkout/{bootcamp:slug}', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/bootcamp', [BootcampController::class, 'bootcamp'])->name('bootcamp');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/sign-in-google', [UserController::class, 'google'])->name('user.login_google');
Route::get('/auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google_callback');

require __DIR__.'/auth.php';
