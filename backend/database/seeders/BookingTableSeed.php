<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Seeder;

class BookingTableSeed extends Seeder
{
    public function run()
    {
        $numberCreate = 50;
        
        for ($i=0; $i < $numberCreate; $i++) { 
            $userId = User::inRandomOrder()->get()->first()->id;
            Booking::create([
                'user_id' => $userId,
            ]);
        };
    }
}
