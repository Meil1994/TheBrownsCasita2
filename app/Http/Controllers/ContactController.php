<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

class ContactController extends Controller
{
    public function contact() {
        return view('contact.Contact-layout');
    }

    public function messageContact(Request $request) {
        $formFields = $request->validate([
            'email' => 'required',
            'message' => 'required',
        ]);

        Message::create($formFields);
        return redirect('/contact')->with('message', 'Thank you for sending us a message! We will get back to you via email shortly.');
    }

    public function feedbackContact(Request $request) {
        $formFields = $request->validate([
            'feedback' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Feedback::create($formFields);
        return redirect('/contact')->with('message', 'Thank you for your feedback!');
    }
}
