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
});
Route::get('/program', function () {
    return view('user.program');
});
Route::get('/detail-program', function () {
    return view('user.detail-program');
});