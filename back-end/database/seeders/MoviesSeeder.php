<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'The Avengers',
                'description' => 'A group of superheroes comes together to fight an alien invasion.',
                'release_date' => '2012-05-04',
                'duration' => 143,
                'rating' => 8.0,
                'genre_id' => 1, // Action
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Hangover',
                'description' => 'A comedy about a wild bachelor party in Las Vegas.',
                'release_date' => '2009-06-05',
                'duration' => 100,
                'rating' => 7.7,
                'genre_id' => 2, // Comedy
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Inception',
                'description' => 'A thief who steals secrets through the use of dream-sharing technology.',
                'release_date' => '2010-07-16',
                'duration' => 148,
                'rating' => 8.8,
                'genre_id' => 3, // Sci-Fi
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Interstellar',
                'description' => 'A group of explorers travel through a wormhole in space to ensure humanity\'s survival.',
                'release_date' => '2014-11-07',
                'duration' => 169,
                'rating' => 8.6,
                'genre_id' => 3, // Sci-Fi
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Conjuring',
                'description' => 'Paranormal investigators work to help a family terrorized by a dark presence.',
                'release_date' => '2013-07-19',
                'duration' => 112,
                'rating' => 7.5,
                'genre_id' => 5, // Horror
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Notebook',
                'description' => 'A young couple falls in love during the early years of World War II.',
                'release_date' => '2004-06-25',
                'duration' => 123,
                'rating' => 7.8,
                'genre_id' => 6, // Romance
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'description' => 'A young wizard begins his journey at Hogwarts School of Witchcraft and Wizardry.',
                'release_date' => '2001-11-11',
                'duration' => 152,
                'rating' => 7.6,
                'genre_id' => 7, // Fantasy
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
