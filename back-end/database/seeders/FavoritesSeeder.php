<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoritesSeeder extends Seeder
{
    public function run()
    {
        DB::table('favorites')->insert([
            [
                'user_id' => 1,
                'movie_id' => 1,
                'series_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'movie_id' => null,
                'series_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'movie_id' => 3,
                'series_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'movie_id' => null,
                'series_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'movie_id' => 6,
                'series_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
