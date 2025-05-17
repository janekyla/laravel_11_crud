<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\authController;
Route::get('/', function () {
 return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
});
Route::get('logout', [App\Http\Controllers\authController::class, 'logout'])->name('logout');
Route::get('register', [App\Http\Controllers\authController::class, 'showRegisterForm'])->name('register');
Route::post('register', [App\Http\Controllers\authController::class, 'register']);
Route::get('login', [App\Http\Controllers\authController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\authController::class, 'login']);