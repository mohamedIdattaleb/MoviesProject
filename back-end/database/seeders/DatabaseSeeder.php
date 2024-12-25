<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            GenresSeeder::class,
            MoviesSeeder::class,
            SeriesSeeder::class,
            FavoritesSeeder::class,
            WatchHistoriesSeeder::class,
        ]);
    }
}
