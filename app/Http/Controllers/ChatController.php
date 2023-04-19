<?php

namespace App\Http\Controllers;

use Pusher\Pusher;
use App\Models\ChatRoom;
use App\Events\ChatEvent;
use Illuminate\Http\Request;
use App\Events\NewChatMessage;
use Illuminate\Support\Facades\Auth;
use App\Models\ChatMessages; // fixed import

class ChatController extends Controller
{
    public function messageUI(){
        return view('profile.Message-layout');
    }


   public function rooms(Request $request){
    $request->validate([
        'name' => 'required',
        'message' => 'required'
    ]);

    $message = [
        'name' =>$request->name,
        'message' =>$request->message,
    ];

    ChatEvent::dispatch($message);
   }
}
