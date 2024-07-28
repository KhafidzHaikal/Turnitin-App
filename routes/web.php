<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'landing_page'])->name('home');
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::resource('users', UserController::class);
Route::resource('submission', SubmissionController::class);

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});
