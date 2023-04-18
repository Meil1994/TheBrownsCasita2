<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CalendarController;

class CalendarController extends Controller
{
    public function calendar() {
        return view('calendar.Calendar-layout');
    }
}