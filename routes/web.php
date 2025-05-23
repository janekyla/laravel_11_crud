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
Route::get('', [App\Http\Controllers\authController::class, 'showLoginForm'])->name('login');
Route::post('', [App\Http\Controllers\authController::class, 'login']);

Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');