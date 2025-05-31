<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Yapi',
            'email' => 'theodoreyapi@gmail.com',
            'phone' => '0585831647',
            'image' => '',
            'last_name' => 'Théodore',
            'join_date' => '11-05-2025',
            'about' => '',
            'status' => 'Active',
            'password' => hash::make(1234567890),
        ]);
    }
}
