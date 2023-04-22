<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm(){
       return view('admin.Admin-login');
    }

    public function adminAuthenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/admin')->with('message', 'You have been logged in!');
        }
        return back()->withErrors(['email'=> 'Invalid Credentials'])->onlyInput('email');
    }
}

