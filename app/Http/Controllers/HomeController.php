<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function home() {
        return view('home.Home-layout');
    }
}
