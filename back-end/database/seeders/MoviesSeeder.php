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
                'image_path' => 'https://gamebomb.ru/files/galleries/001/5/5d/408775.jpg',
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
                'image_path' => 'https://m.media-amazon.com/images/M/MV5BZGFjOTRiYjgtYjEzMS00ZjQ2LTkzY2YtOGQ0NDI2NTVjOGFmXkEyXkFqcGdeQXVyNDQ5MDYzMTk@._V1_FMjpg_UX1000_.jpg',
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
                'image_path' => 'https://i.pinimg.com/originals/8e/0d/ab/8e0dab8699be85720ce55845065bf6dc.jpg',
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
                'image_path' => 'https://interviewerpr.com/wp-content/uploads/2021/08/The-Conjuring-1365x2048.jpg',
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
                'image_path' => 'https://m.media-amazon.com/images/M/MV5BNzk0NGU5ZWYtZTI5Ni00NTcwLWJjMzAtN2JmZTA5YTA1YTVlXkEyXkFqcGdeQXVyMzk3NDU4NTU@._V1_FMjpg_UX1000_.jpg',
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
                'image_path' => "http://vignette2.wikia.nocookie.net/the-collectors/images/0/0c/Harry_Potter_and_the_Philosopher's_Stone_DVD.jpg/revision/latest?cb=20121019141743",
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
                'image_path' => 'https://www.themoviedb.org/t/p/original/8QdTKWQtcHXal7UR1V8FWCo5jqp.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}