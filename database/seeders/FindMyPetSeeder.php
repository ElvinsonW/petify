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
        
        FindMyPet::create([
            "user_id" =>  $faker->randomElement($users),
            "name" => "jojo",
            "breed" => "bulldog",
            "last_seen" => "Di Komplek Daan Mogot 9",
            'last_seen' => $faker->city(),
            'date_lost' => $faker->date(),
            "color" => "Coklat Tua",
            "pet_category_id" => 1,
            "color_tag" => "Yes",
            "image" => "find-my-pet-image/jojo.png",
            "description" => "Jojo adalah anjing yang ramah dan jinak, tetapi bisa merasa cemas jika berada di lingkungan asing atau didekati secara tiba-tiba. Biasanya, ia merespons namanya dengan baik jika dipanggil dengan lembut.",
            "city" => "Jakarta",
            'gender' => "Male",

        ]);
        FindMyPet::create([
            "user_id" =>  $faker->randomElement($users),
            "name" => "whiskey",
            "breed" => "persia",
            "last_seen" => "di gerbang rumah",
            'last_seen' => $faker->city(),
            'date_lost' => $faker->date(),
            "color" => "Putih",
            "pet_category_id" => 2,
            "color_tag" => "Yes",
            "image" => "find-my-pet-image/whiskey.png",
            "description" => "Whiskey adalah kucing yang pendiam dan suka berdiri di kotak kotak kosong.",
            "city" => "Jakarta",
            'gender' => "Female",

        ]);
        FindMyPet::create([
            "user_id" =>  $faker->randomElement($users),
            "name" => "ocong",
            "breed" => "Burung Kakak Tua",
            "last_seen" => "Di Apartemen Seasons City lt 16",
            'last_seen' => $faker->city(),
            'date_lost' => $faker->date(),
            "color" => "Putih",
            "pet_category_id" => 4,
            "color_tag" => "Yes",
            "image" => "find-my-pet-image/ocong.png",
            "description" => "Ocong adalah burung kakak tua yang galak dan suka mematuk orang lain. Dia juga suka bernyanyi lagu-lagu yang di nyanyikan oleh ownernya",
            "city" => "Jakarta",
            'gender' => "Male",

        ]);
    }
}