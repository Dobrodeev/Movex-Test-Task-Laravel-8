<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CreateAuthorsTable')->insert([
            'author_name' => Str::random(10),
            'birth_year' => mt_rand(1955, 1980),
            'rating' => mt_rand(10),
        ]);
    }
}
