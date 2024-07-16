<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view;

class UserController extends Controller
{
    public function index(): View
    {
        return view('user');
    }

    public function user(): View
    {
        return view('users.user');
    }

    public function admin(): View
    {
        return view('users.admin');
    }

}
