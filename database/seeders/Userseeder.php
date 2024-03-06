<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            "name"=> "admin",
            "role"=> "admin",
            "email"=> "admin@gmail.com",
            "password"=> bcrypt("12345"),
        ]);
        User::create([
            "name"=> "kasir",
            "role"=> "kasir",
            "email"=> "kasir@gmail.com",
            "password"=> bcrypt("12345"),
        ]);
    }
}
