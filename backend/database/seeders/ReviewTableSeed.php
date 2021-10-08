<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Review;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ReviewTableSeed extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $numberCreate = 50;

        for ($i=0; $i < $numberCreate; $i++) { 
            $userId = User::inRandomOrder()->get()->first()->id;
            $categoryId = Category::inRandomOrder()->get()->first()->id;
            $review = [
                'user_id' => $userId,
                'category_id' => $categoryId,
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true)  . '',
                'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            ];
            
            Review::create($review);
        }
    }
}
