<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [Controller::class, 'index']);

Route::get('/home', [Controller::class, 'home']);

Route::get('/register', [RegisterController::class, 'registerView'])->name('register');
Route::post('/register', [LoginController::class, 'registerOrder'])->name('register');

Route::get('/login', [LoginController::class, 'loginView'])->name('login');
Route::post('/logintambah', [LoginController::class, 'login'])->name('login.tambah');
Route::get('/', [LoginController::class, 'logout'])->name('logout');