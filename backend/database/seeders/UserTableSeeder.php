<?php

namespace Database\Seeders;

use App\Enums\Status;
use Illuminate\Database\Seeder;
use App\Enums\UserRole;
use App\Models\User;
use Faker\Factory;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        User::create([
            'fullname' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
            'status' => Status::ACTIVE,
            'role'  => UserRole::ADMINISTRATOR,
        ]);

        $numberCreate = 50;
        for ($i = 1; $i < $numberCreate; $i++) {
            $member = [
                'fullname' => $faker->name,
                'email' => $faker->email,
                'password' => 'admin123',
                'phone_number' => $faker->e164PhoneNumber,
                'address' => $faker->address,
                'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'role'  => UserRole::MEMBER,
            ];
            
            User::create($member);
        }
    }
}
