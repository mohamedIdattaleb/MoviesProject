<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name' => 'Action',
                'description' => 'Action-packed movies and series with thrilling sequences.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comedy',
                'description' => 'Humorous movies and series designed to entertain.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Drama',
                'description' => 'Serious movies and series with intense emotional themes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sci-Fi',
                'description' => 'Futuristic and science-driven movies and series.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Horror',
                'description' => 'Scary and suspenseful movies and series.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Romance',
                'description' => 'Love stories and romantic themes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fantasy',
                'description' => 'Movies and series based in magical or fantastical worlds.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
