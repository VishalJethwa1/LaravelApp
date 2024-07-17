<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view;

class PagesController extends Controller
{
    public function app(): View
    {
        return view('index');
    }
}
