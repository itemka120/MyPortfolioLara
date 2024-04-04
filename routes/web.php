<?php

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\PageController;
use Illuminate\Support\Facades\Route;

/**
 * Web Routes
 *
 * @RouteServiceProvider loads routes which will be assigned to the "web" middleware group.
*/

// PageMethods
Route::group(['middleware' => 'web'], function () {
    // PageMethods for Users
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/login', [PageController::class, 'login'])->name('login');
    Route::get('/register', [PageController::class, 'register'])->name('register');

    // AuthMethods
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Admin Routes
Route::group(['middleware' => ['web', 'auth', 'isAdmin']], function () {
    // PageMethods for Admins
    Route::get('/dashboard', [AdminPageController::class, 'dashboard'])->name('dashboard');
});
