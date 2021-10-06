<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Payment;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PaymentTableSeed extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $numberCreate = 50;
        
        for ($i=0; $i < $numberCreate; $i++) { 
            $bookingId = Booking::inRandomOrder()->get()->first()->id;
            $payment = [
                'booking_id' => $bookingId,
                'amount' => $faker->randomNumber(7),
            ];

            Payment::create($payment);
        }
    }
}
