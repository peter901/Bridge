<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        foreach(range(1,10) as $k){
            $user = [
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'email' => $faker->email(),
                'date_of_birth' => $faker->date('Y-m-d','2000-12-01'),
                'country' => $faker->country()
            ];

            User::create($user);
        }
    }
}
