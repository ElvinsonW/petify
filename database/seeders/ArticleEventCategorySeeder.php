<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleEventCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleEventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleEventCategory::create([
            "name" => "General",
            "slug" => "general",
            "color" => "orenmuda"
        ]);

        ArticleEventCategory::create([
            "name" => "About Dog",
            "slug" => "about-dog",
            "color" => "kuning"
        ]);


        ArticleEventCategory::create([
            "name" => "About Cat",
            "slug" => "about-cat",
            "color" => "greencat"
        ]);


        ArticleEventCategory::create([
            "name" => "About Reptile",
            "slug" => "about-reptile",
            "color" => "bluereptile"
        ]);

        ArticleEventCategory::create([
            "name" => "About Other Pet",
            "slug" => "about-other-pet",
            "color" => "oren"
        ]);
    }
}
