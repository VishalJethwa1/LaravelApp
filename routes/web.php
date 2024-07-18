<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Middleware\AlreadyLoggedIn;
use App\Http\Middleware\AuthCheck;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/user', [UserController::class, 'index']);

Route::get('/user', [UserController::class, 'user']);
Route::get('/admin', [UserController::class, 'admin']);

Route::get('/app', [PagesController::class, 'app']);
Route::get('/signup', [AuthenticController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::get('/signin', [AuthenticController::class, 'login'])->middlware('alreadyLoggedIn');
Route::get('registration-user', [AuthenticController::class, 'registerUser'])->name('register-user');
Route::get('/login-user', [AuthenticController::class, 'loginUser'])->name('login-user');
//Route::get('/login', [AuthenticController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/logout', [AuthenticController::class, 'logout']);