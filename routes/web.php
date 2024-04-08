<?php

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\TaskController;
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
    // AuthMethods
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
});
//Securing Logout AuthMethod
Route::group(['middleware' => 'web', 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Admin Routes
Route::group(['middleware' => ['web', 'auth', 'isAdmin']], function () {
    // PageMethods for Admins
    Route::get('/dashboard', [AdminPageController::class, 'dashboard'])->name('dashboard');
});

//tasks
Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::put('/task/edit/{task}', [TaskController::class, 'update']);
Route::delete('/task/delete/{task}', [TaskController::class, 'destroy']);
