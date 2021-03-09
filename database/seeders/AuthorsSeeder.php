<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class AuthorsSeeder extends Seeder
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
            DB::table('authors')->insert([
                'author_name' => $faker->name,
                'birth_year' => $faker->year($max = '1993'),
                'rating' => $faker->randomDigit,
//                'rating' => mt_rand(0, 10),
            ]);
        }
    }
}
