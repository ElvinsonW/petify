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
            'image' => 'profile-image/profile.png',
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
            'image' => 'profile-image/profile.png',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => "Elvinson",
            'username' => "son123",
            'email' => "elvinson@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'phone_number' => '084627732223',
            'address' => 'dirtb',
            'role' => 'User',
            'point' => 120,
            'image' => 'profile-image/profile.png',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => "Chelsea",
            'username' => "celsi",
            'email' => "celsi@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'phone_number' => '083621732324',
            'address' => 'jekerda',
            'role' => 'User',
            'point' => 200,
            'image' => 'profile-image/profile.png',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => "Yehezkiel",
            'username' => "kiel",
            'email' => "kiel@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'phone_number' => '083621735413',
            'address' => 'dibogor',
            'role' => 'User',
            'point' => 180,
            'image' => 'profile-image/profile.png',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => "Angel",
            'username' => "rich",
            'email' => "rich@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'phone_number' => '083645672223',
            'address' => 'medan',
            'role' => 'User',
            'point' => 140,
            'image' => 'profile-image/profile.png',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => "Yedija",
            'username' => "zael",
            'email' => "zael@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'phone_number' => '083621431323',
            'address' => 'tangerang',
            'role' => 'User',
            'point' => 1000,
            'image' => 'profile-image/profile.png',
            'remember_token' => Str::random(10),
        ]);
    }
}
