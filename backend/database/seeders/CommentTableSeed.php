<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Review;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CommentTableSeed extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $numberCreate = 50;
        
        for ($i=0; $i < $numberCreate; $i++) { 
            $userId = User::inRandomOrder()->get()->first()->id;
            $reviewId = Review::inRandomOrder()->get()->first()->id;
            $comment = [
                'user_id' => $userId,
                'review_id' => $reviewId,
                'parent_id' => null,
                'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            ];

            Comment::create($comment);
        }

        // Children Comment
        for ($i=0; $i < $numberCreate; $i++) { 
            $userId = User::inRandomOrder()->get()->first()->id;
            $reviewId = Review::inRandomOrder()->get()->first()->id;
            $commentId = Comment::inRandomOrder()->get()->first()->id;
            $comment = [
                'user_id' => $userId,
                'review_id' => $reviewId,
                'parent_id' => $commentId,
                'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            ];
            
            Comment::create($comment);
        }
    }
}
