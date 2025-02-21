<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Mimin petify",
            'username' => "mipet",
            'email' => "mimin@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'phone_number' => '082147914431',
            'address' => 'disini',
            'role' => 'Admin',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => "Uus Dodoidoy",
            'username' => "dodoidoy",
            'email' => "dodoidoy@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'phone_number' => '083621732223',
            'address' => 'disana',
            'role' => 'User',
            'point' => 1000,
            'remember_token' => Str::random(10),
        ]);

        User::factory(5)->create([
            'password' => Hash::make('password'),
        ]);
    }
}
