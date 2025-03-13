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
            ],    
            [
                    'title' => 'Gladiator',
                    'description' => 'A former Roman General seeks revenge against the corrupt emperor who murdered his family and sent him into slavery.',
                    'release_date' => '2000-05-05',
                    'duration' => 155,
                    'rating' => 8.5,
                    'genre_id' => 1, // Action
                    'image_path' => 'https://picfiles.alphacoders.com/945/94530.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
            ],
            [
                    'title' => 'Titanic',
                    'description' => 'A love story unfolds between two people from different social classes aboard the ill-fated Titanic.',
                    'release_date' => '1997-12-19',
                    'duration' => 195,
                    'rating' => 7.9,
                    'genre_id' => 6, // Romance
                    'image_path' => 'http://images6.fanpop.com/image/photos/32800000/Titanic-Poster-HQ-Untagged-titanic-32807383-3347-5000.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Joker',
                    'description' => 'A mentally troubled comedian embarks on a downward spiral that leads to the creation of an iconic villain.',
                    'release_date' => '2019-10-04',
                    'duration' => 122,
                    'rating' => 8.4,
                    'genre_id' => 1, // Drama/Thriller
                    'image_path' => 'https://image.tmdb.org/t/p/original/4TgXVa5gmOzMgpmYfBkpPjhMF7i.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Parasite',
                    'description' => 'A poor family schemes to infiltrate a wealthy household, leading to unexpected consequences.',
                    'release_date' => '2019-05-30',
                    'duration' => 132,
                    'rating' => 8.6,
                    'genre_id' => 4, // Drama
                    'image_path' => 'https://www.themoviedb.org/t/p/original/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'The Dark Knight',
                    'description' => 'Batman faces his greatest challenge when the Joker unleashes chaos upon Gotham City.',
                    'release_date' => '2008-07-18',
                    'duration' => 152,
                    'rating' => 9.0,
                    'genre_id' => 1, // Action
                    'image_path' => 'https://www.themoviedb.org/t/p/original/2Ka2nOtSlwuFlsHtrtfHKMIjldC.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'The Godfather',
                    'description' => 'The aging patriarch of an organized crime dynasty transfers control of his empire to his reluctant son.',
                    'release_date' => '1972-03-24',
                    'duration' => 175,
                    'rating' => 9.2,
                    'genre_id' => 4, // Crime/Drama
                    'image_path' => 'https://www.themoviedb.org/t/p/original/d6LbJZO8ruvXgOjjGRgjtdYpJS4.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Shutter Island',
                    'description' => 'A U.S. Marshal investigates the disappearance of a patient from a mental hospital on a remote island.',
                    'release_date' => '2010-02-19',
                    'duration' => 138,
                    'rating' => 8.2,
                    'genre_id' => 5, // Thriller
                    'image_path' => 'https://www.themoviedb.org/t/p/original/b68qQ77bzpFrz7kvr3mVRy58bV7.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Avatar',
                    'description' => 'A paraplegic Marine is sent to the moon Pandora, where he becomes torn between following orders and protecting the world he feels is his home.',
                    'release_date' => '2009-12-18',
                    'duration' => 162,
                    'rating' => 7.8,
                    'genre_id' => 3, // Sci-Fi
                    'image_path' => 'https://image.tmdb.org/t/p/original/b9ixaRHHhkdeMfUn3xOcHWY5IXI.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                    [
                        'title' => 'The Lion King',
                        'description' => 'A young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery.',
                        'release_date' => '1994-06-15',
                        'duration' => 88,
                        'rating' => 8.5,
                        'genre_id' => 7, // Animation/Adventure
                        'image_path' => 'https://www.themoviedb.org/t/p/original/7e2XWBtDPZJwIDxHU3bV9OGlYod.jpg',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Pulp Fiction',
                        'description' => 'The lives of two mob hitmen, a boxer, a gangster\'s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                        'release_date' => '1994-10-14',
                        'duration' => 154,
                        'rating' => 8.9,
                        'genre_id' => 4, // Crime/Drama
                        'image_path' => 'https://picfiles.alphacoders.com/371/371109.jpg',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'Forrest Gump',
                        'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an extraordinary life.',
                        'release_date' => '1994-07-06',
                        'duration' => 142,
                        'rating' => 8.8,
                        'genre_id' => 4, // Drama
                        'image_path' => 'https://image.tmdb.org/t/p/original/saHP97rTPS5eLmrLQEcANmKrsFl.jpg',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'title' => 'The Social Network',
                        'description' => 'Mark Zuckerberg creates Facebook, but his success comes at a price: personal and legal complications.',
                        'release_date' => '2010-10-01',
                        'duration' => 120,
                        'rating' => 8.0,
                        'genre_id' => 4, // Drama/Biography
                        'image_path' => 'https://m.media-amazon.com/images/S/pv-target-images/ea4f1c75ddd9fd937a77875d48f9ce8225ed954afcefabe7a2195311b1a97ddd.jpg',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]      
        ]);
    }
}