<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\PetCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PetCategory::create([
            "name" => "Dog",
            "slug" => "dog",
            "color" => "kuning"
        ]);

        PetCategory::create([
            "name" => "Cat",
            "slug" => "cat",
            "color" => "greencat"
        ]);

        PetCategory::create([
            "name" => "Reptile",
            "slug" => "reptile",
            "color" => "bluereptile"
        ]);

        PetCategory::create([
            "name" => "Other Pet",
            "slug" => "other-pet",
            "color" => "oren"
        ]);
    }
}
