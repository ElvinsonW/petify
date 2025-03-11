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
        $users = User::where('id', '!=', 1)->pluck('id')->toArray();
        $imageUrl = 'https://i.pinimg.com/736x/30/13/f3/3013f3fd14bb182a26290f5594b299db.jpg';
        
        FindMyPet::create([
            "user_id" =>  $faker->randomElement($users),
            "name" => "jojo",
            "breed" => "bulldog",
            "last_seen" => "Di Komplek Daan Mogot 9",
            'last_seen' => $faker->city(),
            'date_lost' => $faker->date(),
            "color" => "Putih",
            "pet_category_id" => 1,
            "color_tag" => "Yes",
            "image" => $imageUrl,
            "description" => "Jojo adalah anjing yang ramah dan jinak, tetapi bisa merasa cemas jika berada di lingkungan asing atau didekati secara tiba-tiba. Biasanya, ia merespons namanya dengan baik jika dipanggil dengan lembut.",
            "city" => "Jakarta",
            'gender' => "Male",

        ]);
        for ($i = 0 ; $i < 10 ; $i++) {
            FindMyPet::create([
                'user_id' => $faker->randomElement($users), 
                'name' => $faker->word(), 
                'breed' => $faker->word(), 
                'last_seen' => $faker->city(),
                'date_lost' => $faker->date(), 
                'color' => $faker->safeColorName(), 
                'pet_category_id' => $faker->randomElement($categories), 
                'color_tag' => $faker->randomElement(['Yes', 'No']), 
                'image' => $imageUrl,
                'description' => $faker->paragraph(),
                'city' => $faker->city(), 
                'gender' => $faker->randomElement(['Male', 'Female']),
            ]);
        }
    }
}