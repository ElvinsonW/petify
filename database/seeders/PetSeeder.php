<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pet::create([
            "user_id" => 2,
            "pet_category_id" => 1,
            "name" => "Milo",
            "breed" => "Golden Retriever",
            "image_1" => "adoption-post-image/milo.png",
            "gender" => "male"
        ]);

        Pet::create([
            "user_id" => 3,
            "pet_category_id" => 2,
            "name" => "Ginger",
            "breed" => "Persian",
            "image_1" => "adoption-post-image/ginger.png",
            "gender" => "female"
        ]);

        Pet::create([
            "user_id" => 4,
            "pet_category_id" => 3,
            "name" => "Draco",
            "breed" => "Gecko",
            "image_1" => "adoption-post-image/draco.png",
            "gender" => "male"
        ]);

        Pet::create([
            "user_id" => 5,
            "pet_category_id" => 4,
            "name" => "Sky",
            "breed" => "Lovebird",
            "image_1" => "adoption-post-image/sky.png",
            "gender" => "female"
        ]);

        Pet::create([
            "user_id" => 6,
            "pet_category_id" => 1,
            "name" => "Lexy",
            "breed" => "Shih Tzu",
            "image_1" => "adoption-post-image/lexy.png",
            "gender" => "female"
        ]);

        Pet::create([
            "user_id" => 7,
            "pet_category_id" => 2,
            "name" => "Luna",
            "breed" => "British Shorthair",
            "image_1" => "adoption-post-image/luna.png",
            "gender" => "female"
        ]);

        Pet::create([
            "user_id" => 2,
            "pet_category_id" => 1,
            "name" => "Rocky",
            "breed" => "Bulldog",
            "image_1" => "adoption-post-image/rocky.png",
            "gender" => "male"
        ]);

        Pet::create([
            "user_id" => 2,
            "pet_category_id" => 2,
            "name" => "Oreo",
            "breed" => "Siamese",
            "image_1" => "adoption-post-image/oreo.png",
            "gender" => "male"
        ]);

        Pet::create([
            "user_id" => 3,
            "pet_category_id" => 3,
            "name" => "Rex",
            "breed" => "Iguana",
            "image_1" => "adoption-post-image/rex.png",
            "gender" => "male"
        ]);

        Pet::create([
            "user_id" => 4,
            "pet_category_id" => 4,
            "name" => "Pepper",
            "breed" => "Beo",
            "image_1" => "adoption-post-image/pepper.png",
            "gender" => "female"
        ]);
    }
}
