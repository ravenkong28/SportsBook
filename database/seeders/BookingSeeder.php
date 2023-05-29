<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::insert([
            'booking_date' => '27/05/2023',
            'booking_time' => '14.00',
            'number_of_fields_booked' => 2,
            'total_price' => 150000,
        ]);
    }
}
