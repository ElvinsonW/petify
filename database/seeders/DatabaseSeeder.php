<?php

namespace Database\Seeders;

use App\Models\AdoptionPost;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\LifeAfterAdoption;
use App\Models\Pet;
use App\Models\PetCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder lain yang diperlukan
        $this->call([
            UserSeeder::class, 
            ArticleCategorySeeder::class, 
            PetCategorySeeder::class, 
            EventSeeder::class 
        ]);

        Article::factory(50)->recycle([
            User::all(),
            ArticleCategory::all()
        ])->create();

        Pet::factory(10)->recycle([
            User::all(),
            PetCategory::all(),
        ])->create();

        // Buat 50 postingan adopsi dengan relasi ke User dan Pet
        AdoptionPost::factory(50)->recycle([
            User::all(),
            Pet::all(),
        ])->create();

        // Buat 50 kehidupan setelah adopsi dengan relasi ke User dan Pet
        LifeAfterAdoption::factory(50)->recycle([
            User::all(),
            Pet::all(),
        ])->create([
            "image" => 'life-after-adoption-post-image/HjP8UMhtluhvbVIZyQUFG24j5BMoESodW1B9PGCr.png',
            "description" => fake()->paragraph(),
        ]);
    }
}