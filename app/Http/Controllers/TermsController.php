<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function terms() {
        return view('terms.Terms');
    }

    public function privacy() {
        return view('terms.Privacy');
    }
}
