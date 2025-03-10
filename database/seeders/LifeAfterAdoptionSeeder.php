<?php

namespace Database\Seeders;

use App\Models\LifeAfterAdoption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LifeAfterAdoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LifeAfterAdoption::create([
            "user_id" => 2,
            "pet_id" => 7,
            "image" => "life-after-adoption-post-image/rocky1.png",
            "description" => "Rocky si GymBro"
        ]);

        LifeAfterAdoption::create([
            "user_id" => 2,
            "pet_id" => 7,
            "image" => "life-after-adoption-post-image/rocky2.png",
            "description" => "Musuh Terlihat"
        ]);

        LifeAfterAdoption::create([
            "user_id" => 2,
            "pet_id" => 7,
            "image" => "life-after-adoption-post-image/rocky3.png",
            "description" => "Mode manja"
        ]);

        LifeAfterAdoption::create([
            "user_id" => 2,
            "pet_id" => 8,
            "image" => "life-after-adoption-post-image/oreo1.png",
            "description" => "Melet dulu bos"
        ]);

        LifeAfterAdoption::create([
            "user_id" => 2,
            "pet_id" => 8,
            "image" => "life-after-adoption-post-image/oreo2.png",
            "description" => "Ngantuk bos, jan lupa tidur"
        ]);

        LifeAfterAdoption::create([
            "user_id" => 2,
            "pet_id" => 8,
            "image" => "life-after-adoption-post-image/oreo3.png",
            "description" => "Bersama bestie"
        ]);

        LifeAfterAdoption::create([
            "user_id" => 3,
            "pet_id" => 9,
            "image" => "life-after-adoption-post-image/rex1.png",
            "description" => "Gagah ga bro?"
        ]);

        LifeAfterAdoption::create([
            "user_id" => 3,
            "pet_id" => 9,
            "image" => "life-after-adoption-post-image/rex2.png",
            "description" => "Manjat dulu bestie"
        ]);

        LifeAfterAdoption::create([
            "user_id" => 4,
            "pet_id" => 10,
            "image" => "life-after-adoption-post-image/pepper1.png",
            "description" => "Cantiknya..."
        ]);

        LifeAfterAdoption::create([
            "user_id" => 4,
            "pet_id" => 10,
            "image" => "life-after-adoption-post-image/pepper2.png",
            "description" => "Manjanya..."
        ]);

        LifeAfterAdoption::create([
            "user_id" => 4,
            "pet_id" => 10,
            "image" => "life-after-adoption-post-image/pepper3.png",
            "description" => "Liatin apa tu"
        ]);
    }
}
