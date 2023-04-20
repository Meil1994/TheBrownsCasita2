<?php

namespace App\Http\Controllers;

use Pusher\Pusher;
use App\Models\Message;
use App\Models\ChatRoom;
use App\Events\ChatEvent;
use Illuminate\Http\Request;
use App\Events\NewChatMessage;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function messageUI(){
        return view('profile.Message-layout');
    }


    public function messageProfile(Request $request) {
        $formFields = $request->validate([
            'email' => 'required',
            'message' => 'required',
        ]);

        Message::create($formFields);
        return redirect('/message')->with('message', 'Thank you for sending us a message! We will get back to you via email shortly.');
    }
}
