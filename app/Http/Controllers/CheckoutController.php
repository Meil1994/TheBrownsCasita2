<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Discount;
use Illuminate\Http\Request;
use App\Http\Controllers\CheckoutController;

class CheckoutController extends Controller
{

    public function index(Request $request)
    {
        $discounts = Discount::all();
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');
        $guests = $request->input('guests');

        return view('checkout.Checkout-layout', compact('checkin', 'checkout', 'guests', 'discounts'));
    }

    public function book(Request $request) {
        $formFields = $request->validate([
            'checkin_date' => 'required',
            'checkout_date' => 'required',
            'total_days' => 'required',
            'guests' => 'required',
            'discount' => 'sometimes',
            'note' => 'sometimes',
            'amount' => 'required'
        ]);

        $formFields['user_id'] = auth()->id();

        Booking::create($formFields);
        return redirect('/booking/success');
    }

    public function success() {
        return view('checkout.success');
    }

}

