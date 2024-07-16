<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/user', [UserController::class, 'index']);

Route::get('/user', [UserController::class, 'user']);
Route::get('/admin', [UserController::class, 'admin']);