<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CreateBooksTable')->insert([
            'author_name' => Str::random(10),
            'year_of_publication' => mt_rand(1976, 2020),
            'book_name' => Hash::make('password'),
            'rating' => mt_rand(0, 10),
        ]);
    }
}
