<?php

namespace Database\Seeders;

use App\Models\AdoptionPost;
use App\Models\AdoptionPostRequest;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleRequest;
use App\Models\LifeAfterAdoption;
use App\Models\Pet;
use App\Models\PetCategory;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([UserSeeder::class, ArticleCategorySeeder::class, PetCategorySeeder::class]);
        
        Article::factory(50)->recycle([
            User::all(),
            ArticleCategory::all()
        ])->create();

        ArticleRequest::factory(50)->recycle([
            User::all(),
            ArticleCategory::all()
        ])->create();

        Pet::factory(10)->recycle([
            User::all(),
            PetCategory::all(),
        ])->create();

        AdoptionPost::factory(50)->recycle([
            User::all(),
            Pet::all(),
        ])->create();

        AdoptionPostRequest::factory(50)->recycle([
            User::all(),
            PetCategory::all(),
        ])->create();

        LifeAfterAdoption::factory(50)->recycle([
            User::all(),
            Pet::all(),
        ])->create([
            "image" => 'life-after-adoption-post-image/HjP8UMhtluhvbVIZyQUFG24j5BMoESodW1B9PGCr.png',
            "description" => fake()->paragraph(),
        ]);
    }
}
