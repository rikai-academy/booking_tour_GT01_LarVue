<?php

namespace Database\Seeders;

use App\Models\LikeReview;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class LikeReviewTableSeed extends Seeder
{
    public function run()
    {
        $numberCreate = 50;

        for ($i=0; $i < $numberCreate; $i++) { 
            $userId = User::inRandomOrder()->get()->first()->id;
            $reviewId = Review::inRandomOrder()->get()->first()->id;
            $likeReview = [
                'user_id' => $userId,
                'review_id' => $reviewId,
            ];
            
            LikeReview::create($likeReview);
        }
    }
}
