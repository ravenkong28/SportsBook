<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'Amadeo Marvell',
            'email'=> 'amadeomarvell@gmail.com',
            'password'=> 'amadeomarvell',
            'phone'=> '0812-3456-7890',
            'age' => '22',
            'address' => 'Jl. Jelambar Baru V',
            'region' => 'Jakarta',
        ]);
    }
}
