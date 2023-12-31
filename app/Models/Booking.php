<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'checkin_date',
        'checkout_date',
        'total_days',
        'guests',
        'discount',
        'note',
        'amount'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
