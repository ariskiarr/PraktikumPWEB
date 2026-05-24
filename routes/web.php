<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// register
Route::get('/', [AuthController::class, 'formRegister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

// login
Route::get('/login', [AuthController::class, 'formLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

// dashboard
Route::get('/dashboard',[AuthController::class, 'dashboard']);

// Logout
Route::get('/logout',[AuthController::class, 'logout']);


