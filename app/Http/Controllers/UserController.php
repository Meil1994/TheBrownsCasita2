<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function register(){
        return view('register.Register-layout');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message', 'User created and logged in!');
    }


    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out!');
    }


    public function login(){
        return view('login.Login-layout');
    }


    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You have been logged in!');
        }
        return back()->withErrors(['email'=> 'Invalid Credentials'])->onlyInput('email');
    }


    public function manage() {
        return view('profile.Bookings-layout', ['bookings' => auth()->user()->booking()->get()]);
    }


    public function editfile(){
        $user = Auth::user();
        return view('profile.Edit-layout', compact('user'));
    }
    

    public function update(Request $request){
        $user = Auth::user();
        $validatedData = $request->validate([
            'first_name' => 'sometimes',
            'last_name' => 'sometimes',
            'email' => 'sometimes',
            'password' => 'sometimes',
            'logo' => 'sometimes|image|max:2048' 
        ]);
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->email = $validatedData['email'];
        if(isset($validatedData['password'])){
            $user->password = bcrypt($validatedData['password']);
        }
    
        if ($request->hasFile('logo')) {
            if($user->logo) {
                Storage::disk('public')->delete($user->logo);
            }
            $logoPath = $request->file('logo')->store('logos', 'public');
            $validatedData['logo'] = $logoPath;
            $user->logo = $logoPath;
        }
        $user->save();
        return redirect('/my/profile')->with('message', 'Profile updated successfully.');
    }

    public function messages(){
        return view('profile.Message-layout');
    }
    


}


