<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'number_of_people',
        'lowest_age',
        'amount',
        'departure',
        'address',
        'start_date',
        'end_date',
        'status',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function bookingDetail()
    {
        return $this->belongsTo(BookingDetail::class);
    }

    public function ratings()
    {
        return $this->belongsToMany(Rating::class);
    }

    public function images()
    {
        return $this->belongsToMany(Image::class);
    }
}
