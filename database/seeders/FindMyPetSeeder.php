<?php

namespace Database\Seeders;

use App\Models\FindMyPet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PetCategory;
use App\Models\User;
use Faker\Factory as Faker;


class FindMyPetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        // Get some categories and users for seeding
        $categories = PetCategory::pluck('id')->toArray();
        $users = User::pluck('id')->toArray();
        
        FindMyPet::create([
            "user_id" =>  $faker->randomElement($users),
            "name" => "jojo",
            "breed" => "bulldog",
            "last_seen" => "Di Komplek Daan Mogot 9",
            'last_seen' => $faker->city(), // Last seen location
            'date_lost' => $faker->date(), // Date lost
            "color" => "Putih",
            "pet_category_id" => 1,
            "color_tag" => "Yes",
            "image" => $faker->imageUrl(640, 480, 'animals'),
            "description" => "Tes Deskripsi Tes Deskripsi Tes Deskripsi Tes Deskripsi Tes Deskripsi Tes Deskripsi Tes Deskripsi",
            "city" => "Jakarta",
            'gender' => "Male",

        ]);
        foreach (range(1, 10) as $index) {
            FindMyPet::create([
                'user_id' => $faker->randomElement($users), // Random user
                'name' => $faker->word(), // Pet name
                'breed' => $faker->word(), // Breed
                'last_seen' => $faker->city(), // Last seen location
                'date_lost' => $faker->date(), // Date lost
                'color' => $faker->safeColorName(), // Pet color
                'pet_category_id' => $faker->randomElement($categories), // Random category
                'color_tag' => $faker->randomElement(['Yes', 'No']), // Color tag
                'image' => $faker->imageUrl(640, 480, 'animals'), // Random image URL
                'description' => $faker->paragraph(), // Pet description
                'city' => $faker->city(), // City
                'gender' => $faker->randomElement(['Male', 'Female']), // Gender
            ]);
        }
    }
}