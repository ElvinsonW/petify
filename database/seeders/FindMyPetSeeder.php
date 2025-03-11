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
            'date_lost' => $faker->date(),
            "color" => "Putih",
            "pet_category_id" => 2,
            "color_tag" => "Yes",
            "image" => "find-my-pet-image/whiskey.png",
            "description" => "Whiskey adalah kucing yang pendiam dan suka berdiri di kotak kotak kosong.",
            "city" => "Tangerang",
            'gender' => "Female",

        ]);

        FindMyPet::create([
            "user_id" =>  $faker->randomElement($users),
            "name" => "ocong",
            "breed" => "Burung Kakak Tua",
            "last_seen" => "Di Apartemen Seasons City lt 16",
            'date_lost' => $faker->date(),
            "color" => "Putih",
            "pet_category_id" => 4,
            "color_tag" => "Yes",
            "image" => "find-my-pet-image/ocong.png",
            "description" => "Ocong adalah burung kakak tua yang galak dan suka mematuk orang lain. Dia juga suka bernyanyi lagu-lagu yang di nyanyikan oleh ownernya",
            "city" => "Pekanbaru",
            'gender' => "Male",

        ]);

        FindMyPet::create([
            "user_id" =>  $faker->randomElement($users),
            "name" => "latte",
            "breed" => "Basset Hound",
            "last_seen" => "Di sofa, pintu terbuka",
            'date_lost' => $faker->date(),
            "color" => "Putih Coklat",
            "pet_category_id" => 1,
            "color_tag" => "Yes",
            "image" => "find-my-pet-image/latte.png",
            "description" => "Latte merupakan bayi anjing Basset Hound berusia 2 bulan, ukurannya masih sangat kecil setara dengan cup susu. Dia belum terlatih untuk apapun tapi dia akan datang saat dipanggil.",
            "city" => "Medan",
            'gender' => "Male",

        ]);

        FindMyPet::create([
            "user_id" =>  $faker->randomElement($users),
            "name" => "lizzy",
            "breed" => "Leopard Gecko",
            "last_seen" => "di kandangnya",
            'date_lost' => $faker->date(),
            "color" => "Orange berbintik hitam",
            "pet_category_id" => 3,
            "color_tag" => "Yes",
            "image" => "find-my-pet-image/lizzy.png",
            "description" => "Lizzy merupakan bayi Leopard Gecko yang biasanya berada di kandangnya. Namun, tiba-tiba ia menghilang entah sampai kemana",
            "city" => "Bogor",
            'gender' => "Male",

        ]);
    }
}