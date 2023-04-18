<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FacilityController;

class FacilityController extends Controller
{
    public function facility() {
        return view('facility.Facility-layout');
    }
}