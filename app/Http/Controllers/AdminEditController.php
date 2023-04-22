<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminEditController extends Controller
{
    public function adminEdit(Request $request){
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
        return redirect('/my/profile/edit')->with('message', 'Profile updated successfully.');
    }
}
