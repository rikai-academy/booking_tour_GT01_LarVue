<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';
    protected $fillable = [
        'user_id',
        'status',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function bookingDetails()
    {
        return $this->belongsToMany(BookingDetail::class);
    }
}
