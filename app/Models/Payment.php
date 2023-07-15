<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'checkin_date',
        'checkout_date',
        'total_days',
        'guests',
        'discount',
        'note',
        'amount',
        'payment_id',
        'payer_id',
        'payer_email',
        'currency',
        'payment_status'

    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
