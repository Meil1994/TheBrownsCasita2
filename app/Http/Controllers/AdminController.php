<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Discount;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

class AdminController extends Controller
{
    public function adminDashboard() {
        return view('admin.Admin-dashboard');
    }

    public function adminTotalUser() {
        $users = User::all();
        $bookings = Booking::all();
        return view('admin.Admin-users', compact('users', 'bookings'));
    }

    public function adminBooking() {
        $bookings = Booking::all();
        return view('admin.Admin-booking', compact('bookings'));
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


    
  
}