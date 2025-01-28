<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleCategory::create([
            "name" => "General",
            "slug" => "general",
            "color" => "orenmuda"
        ]);

        ArticleCategory::create([
            "name" => "About Dog",
            "slug" => "about-dog",
            "color" => "kuning"
        ]);


        ArticleCategory::create([
            "name" => "About Cat",
            "slug" => "about-cat",
            "color" => "greencat"
        ]);


        ArticleCategory::create([
            "name" => "About Reptile",
            "slug" => "about-reptile",
            "color" => "bluereptile"
        ]);

        ArticleCategory::create([
            "name" => "About Other Pet",
            "slug" => "about-other-pet",
            "color" => "oren"
        ]);
    }
}
