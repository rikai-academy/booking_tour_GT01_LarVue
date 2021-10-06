<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
        /**
     * Seed the application's database.
     *
     * @return void
     */    
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            TourTableSeed::class,
            BookingTableSeed::class,
            PaymentTableSeed::class,
            BookingDetailTableSeed::class,
            CategoryTableSeed::class,
            ReviewTableSeed::class,
            LikeReviewTableSeed::class,
            CommentTableSeed::class,
            RatingTableSeed::class,
        ]);
    }
}
