<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthenticController;
use App\Http\Middleware\AlreadyLoggedIn;
use App\Http\Middleware\AuthCheck;


// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/user', [UserController::class, 'index']);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/user', [UserController::class, 'user']);
Route::get('/admin', [UserController::class, 'admin']);


Route::get('/app', [PagesController::class, 'app']);


Route::get('/registration', [AuthenticController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/registration-user', [AuthenticController::class, 'registerUser'])->name('register-user');
Route::get('/login', [AuthenticController::class, 'login'])->middleware('alreadyLoggedIn');
Route::post('/login-user', [AuthenticController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard',[AuthenticController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [AuthenticController::class, 'logout']);