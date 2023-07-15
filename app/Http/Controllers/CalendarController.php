<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\Discount;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\CalendarController;

class CalendarController extends Controller
{
    public function calendar(Request $request) {
        $discounts = Discount::all();
        
        $events = array();
        $bookings = Payment::all();
        foreach ($bookings as $booking) {
            $endDate = date('Y-m-d', strtotime('-1 day', strtotime($booking->checkout_date)));
        
            $events[] = [
                'title' => 'Booked',
                'start' => $booking->checkin_date,
                'end' => $endDate,
            ];
        }
        return view('calendar.Calendar-layout', ['events' => $events], compact('discounts'));
    }

    public function feedbackCalendar(Request $request) {
        $formFields = $request->validate([
            'feedback' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Feedback::create($formFields);
        return redirect('/calendar')->with('message', 'Thank you for your feedback!');
    }
}
