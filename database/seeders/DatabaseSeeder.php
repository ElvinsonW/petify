<?php

namespace Database\Seeders;

use App\Models\AdoptionPost;
use App\Models\AdoptionPostRequest;
use App\Models\Article;
use App\Models\ArticleEventCategory;
use App\Models\ArticleRequest;
use App\Models\Day;
use App\Models\DaySession;
use App\Models\Event;
use App\Models\LifeAfterAdoption;
use App\Models\Pet;
use App\Models\PetCategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([UserSeeder::class, ArticleEventCategorySeeder::class, PetCategorySeeder::class]);
        
        Article::factory(50)->recycle([
            User::all(),
            ArticleEventCategory::all()
        ])->create();

        ArticleRequest::factory(50)->recycle([
            User::all(),
            ArticleEventCategory::all()
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


        Event::factory(50)->recycle([
            User::all(),
            ArticleEventCategory::all()
        ])->create([
            "image" => "event_images/3ixjl9ZZu3KcMHfvvNYlw2liJi4N2H7Xa7V32t7d.jpg",
        ])->each(function($event){

            $days = Day::factory(rand(1,3))->create([
                'event_id' => $event->id
            ]);

            $days->each(function($day){
                DaySession::factory(rand(1,3))->create([
                    'day_id' => $day->id
                ]);
            });
        });
    }
}
