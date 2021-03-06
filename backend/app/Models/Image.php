<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';
    protected $fillable = [
        'path',
    ];

    public function tour()
    {
        return $this->hasOne(Tour::class);
    }

    public function scopeGetByTourId($query, $tourId)
    {
        return $query->where('tour_id', $tourId);
    }
}
