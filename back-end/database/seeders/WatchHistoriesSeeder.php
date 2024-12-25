<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WatchHistoriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('watch_histories')->insert([
            [
                'user_id' => 1,
                'movie_id' => 1,
                'series_id' => null,
                'last_watched' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'movie_id' => null,
                'series_id' => 3,
                'last_watched' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'movie_id' => 4,
                'series_id' => null,
                'last_watched' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'movie_id' => null,
                'series_id' => 6,
                'last_watched' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
