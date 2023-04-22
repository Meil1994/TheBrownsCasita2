<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class AdminFeedbackController extends Controller
{
    public function AdmintotalFeedback(Request $request) {
        $feedbacks = Feedback::query();
    
        if ($request->has('q')) {
            $search = $request->input('q');
            $feedbacks->leftJoin('users', 'feedback.user_id', '=', 'users.id')
            ->where(function ($query) use ($search) {
                $query->where('feedback.created_at', 'like', '%'.$search.'%')
                    ->orWhere('feedback.feedback', 'like', '%'.$search.'%')
                    ->orWhere('feedback.user_id', 'like', '%'.$search.'%')
                    ->orWhere('users.first_name', 'like', '%'.$search.'%')
                    ->orWhere('users.last_name', 'like', '%'.$search.'%');
            });  
        }
       
        $feedbacks = $feedbacks->get();

        return view('admin.Admin-feedback', compact('feedbacks'));
    }
}
