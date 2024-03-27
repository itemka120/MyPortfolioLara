<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/**
 * Web Routes
 *
 * @RouteServiceProvider loads routes which will be assigned to the "web" middleware group.
*/

// PageMethods
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// AuthMethods
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//test
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
