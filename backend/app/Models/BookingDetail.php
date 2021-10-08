<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;

    protected $table = 'booking_details';
    protected $fillable = [
        'booking_id',
        'tour_id',
        'amount',
        'total_people',
        'departure_date',
    ];

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }

    public function tour()
    {
        return $this->hasOne(Tour::class);
    }
}
