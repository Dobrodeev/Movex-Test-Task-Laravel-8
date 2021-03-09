<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
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
            DB::table('books')->insert([
                'author_name' => $faker->name,
                'year_of_publication' => $faker->year($max = 'now'),
                'book_name' => Hash::make('password'),
//                'rating' => $faker->randomDigit,
                'rating' => mt_rand(0, 10),
            ]);
        }
    }
}
