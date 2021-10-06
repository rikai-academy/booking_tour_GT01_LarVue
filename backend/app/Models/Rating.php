<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'ratings';
    protected $fillable = [
        'user_id',
        'tour_id',
        'star',
        'content'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function tour()
    {
        return $this->hasOne(Tour::class);
    }
}
