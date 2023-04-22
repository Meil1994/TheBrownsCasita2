<?php

namespace App\Http\Controllers;

use Mail;
use Exception;
use App\Mail\Email;
use App\Models\User;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Message;
use App\Models\Discount;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

class AdminController extends Controller
{
    public function adminDashboard() {
        $admin = Admin::all();
        return view('admin.Admin-dashboard', compact('admin'));
    }

    public function adminTotalUser(Request $request)
    {
        $users = User::query();

        if ($request->has('q')) {
            $search = $request->input('q');
            $users->where(function ($query) use ($search) {
                $query->where('first_name', 'like', '%'.$search.'%')
                    ->orWhere('last_name', 'like', '%'.$search.'%')
                    ->orWhere('email', 'like', '%'.$search.'%')
                    ->orWhere('created_at', 'like', '%'.$search.'%');
            });
        }

        $bookings = Booking::all();

        return view('admin.Admin-users', compact('bookings', 'users'));
    }
    

    public function customerfeedback() {
        $feedbacks = Feedback::all();
        return view('admin.Admin-feedback', compact('feedbacks'));
    }

    public function pricing() {
        $discounts = Discount::all();
        return view('admin.Admin-pricing', compact('discounts'));
    }



    public function updatePrice(Request $request)
    {
        $discounts = Discount::all();

        $validatedData = $request->validate([
            'discount_1' => 'nullable',
            'discount_2' => 'nullable',
            'discount_3' => 'nullable',
            'label_1' => 'nullable',
            'label_2' => 'nullable',
            'label_3' => 'nullable',
            'price' => 'nullable',
        ]);

        foreach ($discounts as $discount) {
            $discount->discount_1 = $validatedData['discount_1'] ?? $discount->discount_1;
            $discount->discount_2 = $validatedData['discount_2'] ?? $discount->discount_2;
            $discount->discount_3 = $validatedData['discount_3'] ?? $discount->discount_3;
            $discount->label_1 = $validatedData['label_1'] ?? $discount->label_1;
            $discount->label_2 = $validatedData['label_2'] ?? $discount->label_2;
            $discount->label_3 = isset($validatedData['label_3']) ? $validatedData['label_3'] : $discount->label_3;
            $discount->price = $validatedData['price'] ?? $discount->price;
            $discount->save();
        }

        return redirect('/pricing')->with('message', 'Pricing updated successfully.');
    }



    public function emailResponse(Message $messages) {
        return view('admin.Admin-message-response', [
            'message' => $messages
        ]);
    }

    public function messageAdmin(){
        $messages = Message::all();
        $data = [
            'subject' => 'TBC Email',
            'body' => 'Hello, this is TBC!'
        ];
        try {
           Mail::to('meilchucabaluna1994@gmail.com')->send(new Email($data));
           return response()->json(['Great! Check your mail box']);
        } catch (Exception $th) {
            return response()->json(['Sorry! Something went wrong']);
        }
    }

    


    
  
}