<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('series')->insert([
            [
                'title' => 'Breaking Bad',
                'description' => 'A chemistry teacher turned meth manufacturer struggles with the criminal world.',
                'release_date' => '2008-01-20',
                'seasons' => 5,
                'episodes' => 62,
                'rating' => 9.5,
                'genre_id' => 3, // Drama
                'image_path' => 'https://m.media-amazon.com/images/M/MV5BMzU5ZGYzNmQtMTdhYy00OGRiLTg0NmQtYjVjNzliZTg1ZGE4XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Friends',
                'description' => 'A sitcom about six friends living in New York City.',
                'release_date' => '1994-09-22',
                'seasons' => 10,
                'episodes' => 236,
                'rating' => 8.8,
                'genre_id' => 2, // Comedy
                'image_path' => 'https://flxt.tmsimg.com/assets/p183931_b_v8_ac.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Stranger Things',
                'description' => 'A group of kids in a small town face mysterious and supernatural events.',
                'release_date' => '2016-07-15',
                'seasons' => 4,
                'episodes' => 34,
                'rating' => 8.7,
                'genre_id' => 3, // Sci-Fi
                'image_path' => 'https://resizing.flixster.com/0xxuABVVuzJrUT130WFHKE-irEg=/ems.cHJkLWVtcy1hc3NldHMvdHZzZWFzb24vNzUyMTFhOTktZTU4Ni00ODkyLWJlYjQtZTgxYTllZmU2OGM0LmpwZw==',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Office',
                'description' => 'A mockumentary about the everyday lives of office employees working at Dunder Mifflin.',
                'release_date' => '2005-03-24',
                'seasons' => 9,
                'episodes' => 201,
                'rating' => 8.9,
                'genre_id' => 2, // Comedy
                'image_path' => 'https://m.media-amazon.com/images/M/MV5BZjQwYzBlYzUtZjhhOS00ZDQ0LWE0NzAtYTk4MjgzZTNkZWEzXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Walking Dead',
                'description' => 'A group of survivors navigate a post-apocalyptic world overrun by zombies.',
                'release_date' => '2010-10-31',
                'seasons' => 11,
                'episodes' => 177,
                'rating' => 8.1,
                'genre_id' => 5, // Horror
                'image_path' => 'https://fr.web.img6.acsta.net/pictures/210/454/21045474_20130930201634487.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Crown',
                'description' => 'A historical drama about the reign of Queen Elizabeth II.',
                'release_date' => '2016-11-04',
                'seasons' => 6,
                'episodes' => 60,
                'rating' => 8.7,
                'genre_id' => 3, // Drama
                'image_path' => 'https://upload.wikimedia.org/wikipedia/en/b/ba/The_Crown_season_2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Game of Thrones',
                'description' => 'Noble families vie for control of the Iron Throne in a medieval fantasy world.',
                'release_date' => '2011-04-17',
                'seasons' => 8,
                'episodes' => 73,
                'rating' => 9.3,
                'genre_id' => 7, // Fantasy
                'image_path' => 'https://m.media-amazon.com/images/M/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'From',
                'description' => '"From" is a horror-mystery series about people trapped in a town with terrifying creatures and dark secrets.',
                'release_date' => '2022-02-20',
                'seasons' => 3,
                'episodes' => 30,
                'rating' => 9.3,
                'genre_id' => 5, // Horror
                'image_path' => 'https://miro.medium.com/v2/resize:fit:1400/1*39M4XbHXCTfBenNNqLLyLA@2x.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
                [
                    'title' => 'Sherlock',
                    'description' => 'Consulting detective Sherlock Holmes and his partner, Dr. John Watson, solve complex crimes in modern-day London.',
                    'release_date' => '2010-07-25',
                    'duration' => 90, // Per episode
                    'rating' => 9.1,
                    'genre_id' => 4, // Crime/Drama
                    'image_path' => 'https://picfiles.alphacoders.com/355/355468.jpg',
                    'seasons' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'The Umbrella Academy',
                    'description' => 'A dysfunctional family of adopted super-powered siblings reunites to solve the mystery of their father\'s death and prevent an impending apocalypse.',
                    'release_date' => '2019-02-15',
                    'duration' => 60, // Per episode
                    'rating' => 8.0,
                    'genre_id' => 7, // Action/Sci-Fi
                    'image_path' => 'https://pics.filmaffinity.com/the_umbrella_academy-794888543-large.jpg',
                    'seasons' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'La Casa De Papel',
                    'description' => 'A criminal mastermind and his team of robbers carry out an ambitious plan to rob the Royal Mint of Spain, facing personal and external challenges.',
                    'release_date' => '2017-05-02',
                    'duration' => 70, // Per episode
                    'rating' => 8.3,
                    'genre_id' => 4, // Crime/Drama
                    'image_path' => 'http://www.mulderville.net/images/Netflix/LaCasaDePapel/LaCasaDePapel_001.jpg',
                    'seasons' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Narcos',
                    'description' => 'The series chronicles the rise and fall of the notorious Colombian drug lord Pablo Escobar and the law enforcement efforts to capture him.',
                    'release_date' => '2015-08-28',
                    'duration' => 50, // Per episode
                    'rating' => 8.8,
                    'genre_id' => 4, // Crime/Drama
                    'image_path' => 'https://2.bp.blogspot.com/-pfRu6E-MsVg/VfRkf3k6GyI/AAAAAAAAAEw/6fC-VqRDhoA/s1600/narcos-netflix-poster.jpg',
                    'seasons' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'True Detective',
                    'description' => 'An anthology crime drama series, with each season following new detectives as they investigate disturbing crimes.',
                    'release_date' => '2014-01-12',
                    'duration' => 60, // Per episode
                    'rating' => 9.0,
                    'genre_id' => 4, // Crime/Thriller
                    'image_path' => 'https://static1.srcdn.com/wordpress/wp-content/uploads/True-Detective-Poster.jpg',
                    'seasons' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'The Haunting of Hill House',
                    'description' => 'A family confronts haunting memories of their old home, the Hill House, and its terrifying events that shaped their lives.',
                    'release_date' => '2018-10-12',
                    'duration' => 60, // Per episode
                    'rating' => 8.6,
                    'genre_id' => 7, // Horror/Drama
                    'image_path' => 'https://images-na.ssl-images-amazon.com/images/I/81Lq44yDCDL._SL1500_.jpg',
                    'seasons' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'The Good Place',
                    'description' => 'A woman finds herself in the afterlife’s “Good Place,” but soon realizes she doesn’t belong there and tries to become a better person.',
                    'release_date' => '2016-09-19',
                    'duration' => 22, // Per episode
                    'rating' => 8.2,
                    'genre_id' => 3, // Comedy/Fantasy
                    'image_path' => 'https://media.senscritique.com/media/000015624432/source_big/The_Good_Place.jpg',
                    'seasons' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Dark',
                    'description' => 'A German series that blends sci-fi and mystery, exploring the intertwined fates of four families as they uncover disturbing secrets across different timelines.',
                    'release_date' => '2017-12-01',
                    'duration' => 60, // Per episode
                    'rating' => 8.8,
                    'genre_id' => 7, // Sci-Fi/Thriller
                    'image_path' => 'http://br.web.img3.acsta.net/pictures/17/11/01/13/35/2780331.jpg',
                    'seasons' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Fargo',
                    'description' => 'A darkly comedic crime drama series, each season tells a new story of crime, murder, and misfortune in the upper Midwest.',
                    'release_date' => '2014-04-15',
                    'duration' => 60, // Per episode
                    'rating' => 8.9,
                    'genre_id' => 4, // Crime/Drama
                    'image_path' => 'https://www.themoviedb.org/t/p/original/a3VW6khsyUVKrG0GBCWFG3NzWPX.jpg',
                    'seasons' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'The Expanse',
                    'description' => 'In a future where humanity has colonized the solar system, tensions rise between Earth, Mars, and the Belt, leading to a conflict that threatens the entire human race.',
                    'release_date' => '2015-12-14',
                    'duration' => 60, // Per episode
                    'rating' => 8.5,
                    'genre_id' => 7, // Sci-Fi/Drama
                    'image_path' => 'https://image.tmdb.org/t/p/original/go2m0Cz5KqEwYFGiXVPNvCUZql3.jpg',
                    'seasons' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => "The Handmaid's Tale",
                    'description' => 'In a dystopian future, women are subjugated in a totalitarian society where a handmaid is forced to have children for the ruling class.',
                    'release_date' => '2017-04-26',
                    'duration' => 50, // Per episode
                    'rating' => 8.4,
                    'genre_id' => 4, // Drama/Thriller
                    'image_path' => 'https://4.bp.blogspot.com/-iZSC_U484TE/WQDCKIYGQsI/AAAAAAABojY/1gXZybNv1RoFHDoZgOV4VyH8-UNuKaVRQCLcB/s1600/the-handmaids-tale-2017-poster-3.jpg',
                    'seasons' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Fleabag',
                    'description' => 'A witty, cynical woman deals with life, love, and family in her own unique way, breaking the fourth wall to share her thoughts with the audience.',
                    'release_date' => '2016-07-21',
                    'duration' => 30, // Per episode
                    'rating' => 8.7,
                    'genre_id' => 3, // Comedy/Drama
                    'image_path' => 'https://dol9cswr8axcx.cloudfront.net/series/large/1585684.jpg',
                    'seasons' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]            
        ]);
    }
}
