<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [AuthController::class, 'login'])->name('dashboard.login');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/signUp', [AuthController::class, 'showSignUpForm'])->name('dashboard.showSignUpForm');
Route::post('/signUp', [AuthController::class, 'signUp'])->name('dashboard.signUp');
Route::get('/logout', [AuthController::class, 'logout'])->name('dashboard.logout');
