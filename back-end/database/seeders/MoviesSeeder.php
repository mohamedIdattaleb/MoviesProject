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
                'image_path' => 'https://m.media-amazon.com/images/M/MV5BNGE0YTVjNzUtNzJjOS00NGNlLTgxMzctZTY4YTE1Y2Y1ZTU4XkEyXkFqcGc@._V1_.jpg',
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
                'image_path' => 'https://m.media-amazon.com/images/M/MV5BNDI2MzBhNzgtOWYyOS00NDM2LWE0OGYtOGQ0M2FjMTI2NTllXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
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
                'image_path' => 'https://upload.wikimedia.org/wikipedia/en/thumb/1/18/Inception_OST.jpg/220px-Inception_OST.jpg',
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
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK6tdN2LCV5E1ktnQu82L6m4JX8kP4UwnLJQ&s',
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
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTo1w35AsAv2sISXApGQxf8hD_gO4d_A_ZC3Q&s',
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
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIbRhjbusenFKi8EmGn0rXe7nB168MA4GOCw&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter',
                'description' => 'A young wizard begins his journey at Hogwarts School of Witchcraft and Wizardry.',
                'release_date' => '2001-11-11',
                'duration' => 152,
                'rating' => 7.6,
                'genre_id' => 7, // Fantasy
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfILbk8qd5KHYWXTX1H7BhdKkmraxPIjINbA&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Matrix',
                'description' => 'A hacker discovers the truth about his reality.',
                'release_date' => '1999-03-31',
                'duration' => 136,
                'rating' => 8.7,
                'genre_id' => 2, // Sci-Fi
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfSjSWOCaw5dnDL2GT1zFd9RMCgUGw5Q2Cfg&s',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}