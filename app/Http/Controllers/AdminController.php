<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

class AdminController extends Controller
{
    public function adminDashboard() {
        return view('admin.Admin-dashboard');
    }

    public function adminTotalUser() {
        $users = User::all();
        return view('admin.Admin-users', compact('users'));
    }

    public function adminTotalSales() {
        return view('admin.Admin-sales');
    }

    public function adminBooking() {
        $bookings = Booking::all();
        return view('admin.Admin-booking', compact('bookings'));
    }


    
}