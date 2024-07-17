<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/user', [UserController::class, 'index']);

Route::get('/user', [UserController::class, 'user']);
Route::get('/admin', [UserController::class, 'admin']);

Route::get('app', [PagesController::class, 'app']);