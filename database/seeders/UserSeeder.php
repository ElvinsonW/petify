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
            'name' => "Elvinson Wijaya",
            'username' => "elvinson",
            'email' => "elvinson@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'phone_number' => '082147914431',
            'address' => 'disini',
            'remember_token' => Str::random(10),
        ]);
        
        User::factory(5)
            ->create();
    }
}
