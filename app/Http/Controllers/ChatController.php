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

    public function AdmintotalMessages(Request $request) {
        $messages = Message::query();
    
        if ($request->has('q')) {
            $search = $request->input('q');
            $messages->where(function ($query) use ($search) {
                $query->where('created_at', 'like', '%'.$search.'%')
                    ->orWhere('Email', 'like', '%'.$search.'%')
                    ->orWhere('Message', 'like', '%'.$search.'%');
            });
        }
       
        $messages = $messages->get();

        return view('admin.Admin-message', compact('messages'));
    }
}
