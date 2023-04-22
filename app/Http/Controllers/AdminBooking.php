<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBooking extends Controller
{
    public function AdmintotalBooking(Request $request) {
        $bookings = Booking::query();
    
        if ($request->has('q')) {
            $search = $request->input('q');
            $bookings->where(function ($query) use ($search) {
                $query->where('created_at', 'like', '%'.$search.'%')
                    ->orWhere('checkin_date', 'like', '%'.$search.'%')
                    ->orWhere('checkout_date', 'like', '%'.$search.'%')
                    ->orWhere('total_days', 'like', '%'.$search.'%')
                    ->orWhere('guests', 'like', '%'.$search.'%')
                    ->orWhere('note', 'like', '%'.$search.'%')
                    ->orWhere('amount', 'like', '%'.$search.'%');
            });    
        }
       
        $bookings = $bookings->get();

        return view('admin.Admin-booking', compact('bookings'));
    }
}


