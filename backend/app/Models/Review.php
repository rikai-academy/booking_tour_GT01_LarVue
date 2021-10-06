<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'content',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function likeReviews()
    {
        return $this->belongsToMany(LikeReview::class);
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }
}
