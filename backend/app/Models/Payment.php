<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $fillable = [
        'booking_id',
        'amount',
    ];

    public $timestamps = ["created_at"];

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
