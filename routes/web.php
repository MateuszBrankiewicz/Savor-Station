<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Grupa tras zabezpieczonych
Route::middleware("auth")->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('home');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register' , [AuthController::class, 'registerPost'])->name('register.post');
Route::resource('users', UserController::class);
