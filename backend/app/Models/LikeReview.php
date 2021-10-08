<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeReview extends Model
{
    use HasFactory;

    protected $table = 'like_reviews';
    protected $fillable = [
        'user_id',
        'review_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function review()
    {
        return $this->hasOne(Review::class);
    }
}
