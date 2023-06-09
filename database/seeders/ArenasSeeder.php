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
            'arena_price'=> 50000,
            'category_id'=> 1,
            'banner_flag'=> 1,
            'top_arenas_flag'=> 0,
        ]);

        Arenas::insert([
            'arena_type'=> 'Futsal',
            'arena_name'=> 'Orion',
            'arena_address'=> 'Jl. Kebon Jeruk no.10',
            'arena_phone'=> '0812 3456 7890',
            'arena_rating' => 5,
            'arena_price'=> 100000,
            'category_id'=> 2,
            'banner_flag'=> 0,
            'top_arenas_flag'=> 1,
        ]);

        Arenas::insert([
            'arena_type'=> 'Futsal',
            'arena_name'=> 'Cometa',
            'arena_address'=> 'Jl. Hadiah blok A',
            'arena_phone'=> '0812 3456 7890',
            'arena_rating' => 4.8,
            'arena_price'=> 90000,
            'category_id'=> 2,
            'banner_flag'=> 0,
            'top_arenas_flag'=> 1,
        ]);

        Arenas::insert([
            'arena_type'=> 'Futsal',
            'arena_name'=> 'Lapangan',
            'arena_address'=> 'Jl. Hadiah blok A',
            'arena_phone'=> '0812 3456 7890',
            'arena_rating' => 4.6,
            'arena_price'=> 80000,
            'category_id'=> 2,
            'banner_flag'=> 0,
            'top_arenas_flag'=> 0,
        ]);

        Arenas::insert([
            'arena_type'=> 'Badminton',
            'arena_name'=> 'Dutamas',
            'arena_address'=> 'Jl. A',
            'arena_phone'=> '0812 3456 7890',
            'arena_rating' => 4.9,
            'arena_price'=> 60000,
            'category_id'=> 1,
            'banner_flag'=> 0,
            'top_arenas_flag'=> 1,
        ]);

        Arenas::insert([
            'arena_type'=> 'Badminton',
            'arena_name'=> 'Talenta',
            'arena_address'=> 'Jl. B',
            'arena_phone'=> '0812 3456 7890',
            'arena_rating' => 4.7,
            'arena_price'=> 55000,
            'category_id'=> 1,
            'banner_flag'=> 1,
            'top_arenas_flag'=> 0,
        ]);

        Arenas::insert([
            'arena_type'=> 'Badminton',
            'arena_name'=> 'Garuda Badminton Hall',
            'arena_address'=> 'Jl. C',
            'arena_phone'=> '0812 3456 7890',
            'arena_rating' => 4.6,
            'arena_price'=> 85000,
            'category_id'=> 1,
            'banner_flag'=> 0,
            'top_arenas_flag'=> 1,
        ]);

        Arenas::insert([
            'arena_type'=> 'Badminton',
            'arena_name'=> 'Tunas Bugar',
            'arena_address'=> 'Jl. D',
            'arena_phone'=> '0812 3456 7890',
            'arena_rating' => 4.7,
            'arena_price'=> 60000,
            'category_id'=> 1,
            'banner_flag'=> 0,
            'top_arenas_flag'=> 0,
        ]);
    }
}
