<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'birth_year' => $faker->year,
                'email' => $faker->email,
//                'rating' => $faker->randomDigit,
//                'rating' => mt_rand(0, 10),
            ]);
        }
    }
}
