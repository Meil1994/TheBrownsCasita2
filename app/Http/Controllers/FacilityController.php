<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\FacilityController;

class FacilityController extends Controller
{
    public function facility() {
        return view('facility.Facility-layout');
    }

    public function feedbackFacility(Request $request) {
        $formFields = $request->validate([
            'feedback' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Feedback::create($formFields);
        return redirect('/facility')->with('message', 'Thank you for your feedback!');
    }
}