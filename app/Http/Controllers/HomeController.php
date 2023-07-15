<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\Discount;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;



class HomeController extends Controller
{
    public function home(Request $request) {
        $feedbacks = Feedback::all();
        $discounts = Discount::all();

        $events = array();
        $bookings = Payment::all();
        foreach($bookings as $booking) {
            $events[]= [
                'title' => 'Booked',
                'start' => $booking->checkin_date,
                'end' => $booking->checkout_date,
                
            ];
        }
        return view('home.Home-layout',['events' => $events], compact('feedbacks', 'discounts'));

    }

    public function feedback(Request $request) {
        $formFields = $request->validate([
            'feedback' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Feedback::create($formFields);
        return redirect('/')->with('message', 'Thank you for your feedback!');
    } 
    
    
    public function loading()
    {
        return view('loading.HomeLoading');
    }






}
