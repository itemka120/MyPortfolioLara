<?php

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\Features\UserController;
use App\Http\Controllers\Admin\Features\VacanciesController;
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
    Route::get('/projects', [PageController::class, 'projects'])->name('projects');
    // AuthMethods
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
});
//Securing Logout AuthMethod
Route::group(['middleware' => 'web', 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
});

// Admin Routes
Route::group(['middleware' => ['web', 'auth', 'isAdmin']], function () {
    // PageMethods for Admins
    Route::get('/dashboard/users', [AdminPageController::class, 'users'])->name('dashboard.users');
    Route::post('/dashboard/users/create', [UserController::class, 'create'])->name('create.user');
    Route::put('/dashboard/users/edit/{user}', [UserController::class, 'update'])->name('edit.user');
    Route::delete('/dashboard/users/delete/{user}', [UserController::class, 'delete'])->name('delete.user');

    Route::get('/dashboard/vacancies', [AdminPageController::class, 'vacancies'])->name('dashboard.vacancies');
    Route::post('/dashboard/create/vacancy', [VacanciesController::class, 'edit'])->name('edit.vacancy');
    Route::delete('/dashboard/users/delete/{vacancy}', [VacanciesController::class, 'delete'])->name('delete.vacancy');
});
