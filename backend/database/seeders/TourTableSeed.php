<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Enums\UserRole;
use App\Models\Tour;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TourTableSeed extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $userId = User::getByRole(UserRole::ADMINISTRATOR)->first()->id;
        $numberCreate = 50;
        
        for ($i=0; $i < $numberCreate; $i++) { 
            $startDate = date('Y-m-d H:i:s');
            $endDate = date('Y-m-d H:i:s', strtotime($startDate . ' + ' . $faker->randomNumber(1) . ' day'));

            $tour = [
                'user_id' => $userId,
                'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'number_of_people' => $faker->randomNumber(2),
                'lowest_age' => $faker->randomNumber(2),
                'amount' => $faker->randomNumber(7),
                'departure' => $faker->address,
                'address' => $faker->address,
                'start_date' => $startDate,
                'end_date' => $endDate,
            ];

            Tour::create($tour);
        }
    }
}
