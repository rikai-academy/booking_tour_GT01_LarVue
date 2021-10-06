<?php

namespace Database\Seeders;

use App\Models\Rating;
use App\Models\Tour;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RatingTableSeed extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $numberCreate = 50;
        
        for ($i=0; $i < $numberCreate; $i++) { 
            $userId = User::inRandomOrder()->get()->first()->id;
            $tourId = Tour::inRandomOrder()->get()->first()->id;
            $rating = [
                'user_id' => $userId,
                'tour_id' => $tourId,
                'star' => $faker->biasedNumberBetween($min = 0, $max = 5, $function = 'sqrt'),
                'content' =>  $faker->sentence($nbWords = 6, $variableNbWords = true)
            ];

            Rating::create($rating);
        }
    }
}
