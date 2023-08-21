<?php

namespace Database\Seeders;

// use WithoutModelEvents;
use App\Models\Arenas;
use App\Models\Category;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // $this->call([
        //     UserSeeder::class,
        //     BookingSeeder::class,
        //     Category::class,
        //     ArenasSeeder::class
        // ]);
        
        Arenas::insert([
            'store_name' => 'Arena Admin',
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
            'store_name' => 'Arena Admin',
            'arena_name'=> 'Orion',
            'arena_address'=> 'Jl. Kebon Jeruk no.10',
            'arena_phone'=> '0812 3456 7890',
            'arena_rating' => 5,
            'arena_price'=> 100000,
            'category_id'=> 2,
            'banner_flag'=> 1,
            'top_arenas_flag'=> 1,
        ]);

        Arenas::insert([
            'store_name' => 'Arena Admin 2',
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
            'store_name' => 'Arena Admin',
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
            'store_name' => 'Arena Admin 2',
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
            'store_name' => 'Arena Admin',
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
            'store_name' => 'Arena Admin 2',
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
            'store_name' => 'Arena Admin',
            'arena_name'=> 'Tunas Bugar',
            'arena_address'=> 'Jl. D',
            'arena_phone'=> '0812 3456 7890',
            'arena_rating' => 4.7,
            'arena_price'=> 60000,
            'category_id'=> 1,
            'banner_flag'=> 0,
            'top_arenas_flag'=> 0,
        ]);

        // Booking::insert([
        //     'booking_date' => '27/05/2023',
        //     'booking_time' => '14.00',
        //     'number_of_fields_booked' => 2,
        //     'total_price' => 150000,
        // ]);

        Category::insert([
            'category_name' => 'Badminton',
        ]);
        Category::insert([
            'category_name' => 'Futsal',
        ]);
        Category::insert([
            'category_name' => 'Basketball',
        ]);


        User::insert([
            'name' => 'Amadeo Marvell',
            'email'=> 'amadeomarvell@gmail.com',
            'password'=> bcrypt('amadeomarvell'),
            'phone'=> '0812-3456-7890',
            'age' => '22',
            'address' => 'Jl. Jelambar Baru V',
            'region' => 'Jakarta',
            'is_admin' => 0,
        ]);
        User::insert([
            'name' => 'Admin',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('admin123'),
            'phone'=> '0812-3456-7890',
            'age' => '100',
            'address' => 'Jl. Laravel no 8',
            'region' => 'Jakarta',
            'is_admin' => 1,
            'store_name' => 'Arena Admin'
        ]);
        User::insert([
            'name' => 'Admin 2',
            'email'=> 'admin2@gmail.com',
            'password'=> bcrypt('admin123'),
            'phone'=> '0822-4466-8800',
            'age' => '30',
            'address' => 'Jl. Laravel no 80',
            'region' => 'Bandung',
            'is_admin' => 1,
            'store_name' => 'Arena Admin 2'
        ]);
        User::insert([
            'name' => 'Admin 3',
            'email'=> 'admin3@gmail.com',
            'password'=> bcrypt('admin123'),
            'phone'=> '0822-4466-8800',
            'age' => '30',
            'address' => 'Jl. Laravel no 80',
            'region' => 'Bandung',
            'is_admin' => 1,
            'store_name' => 'Arena Admin'
        ]);
    }
}
