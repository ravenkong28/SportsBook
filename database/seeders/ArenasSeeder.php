<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Arenas;

class ArenasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Arenas::insert([
            'arena_type'=> 'Badminton',
            'arena_name'=> 'Patra',
            'arena_address'=> 'Jl. Haji Musirin',
            'arena_phone'=> '0812 3456 7890',
            'arena_rating' => 4.7,
            'number_of_fields'=> 5,
            'arena_price'=> 50000,
            // 'category_id'=> 1,
        ]);

        Arenas::insert([
            'arena_type'=> 'Futsal',
            'arena_name'=> 'Orion',
            'arena_address'=> 'Jl. Kebon Jeruk no.10',
            'arena_phone'=> '0812 3456 7890',
            'arena_rating' => 5,
            'number_of_fields'=> 2,
            'arena_price'=> 100000,
            // 'category_id'=> 2,
        ]);

        Arenas::insert([
            'arena_type'=> 'Futsal',
            'arena_name'=> 'Cometa',
            'arena_address'=> 'Jl. Hadiah blok A',
            'arena_phone'=> '0812 3456 7890',
            'arena_rating' => 4.8,
            'number_of_fields'=> 1,
            'arena_price'=> 90000,
            // 'category_id'=> 2,
        ]);
    }
}