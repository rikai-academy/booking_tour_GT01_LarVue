<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\BookingDetail;
use App\Models\Tour;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BookingDetailTableSeed extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $numberCreate = 50;
        
        for ($i=0; $i < $numberCreate; $i++) { 
            $bookingId = Booking::inRandomOrder()->get()->first()->id;
            $tourId = Tour::inRandomOrder()->get()->first()->id;
            $bookingDetail = [
                'booking_id' => $bookingId,
                'tour_id' => $tourId,
                'amount' => $faker->randomNumber(7),
                'total_people' => $faker->randomNumber(1),
                'departure_date' => $faker->dateTime($max = 'now', $timezone = null),
            ];

            BookingDetail::create($bookingDetail);
        }
    }
}
