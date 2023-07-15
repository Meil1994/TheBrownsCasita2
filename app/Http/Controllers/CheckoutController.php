<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function isFirstTimeBooker()
{
    $userId = Auth::id(); // Assuming you have authentication and can access the user's ID
    $paymentCount = Payment::where('user_id', $userId)->count();

    return response()->json(['isFirstTimeBooker' => $paymentCount === 0]);
}

}

