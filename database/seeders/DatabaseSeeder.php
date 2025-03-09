<?php

namespace Database\Seeders;

use App\Models\AdoptionPost;
use App\Models\AdoptionPostRequest;
use App\Models\AdoptionRequest;
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
use App\Models\FindMyPet;
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
        // Panggil seeder lain yang diperlukan

        $this->call([UserSeeder::class, ArticleEventCategorySeeder::class, PetCategorySeeder::class, PetSeeder::class, AdoptionPostSeeder::class, AdoptionRequestSeeder::class, LifeAfterAdoptionSeeder::class, ArticleSeeder::class]);

        ArticleRequest::factory(50)->recycle([
            User::all(),
            ArticleEventCategory::all()
        ])->create([
            "image" => 'articles-image/petArticlePict.png'
        ]);

        AdoptionPostRequest::factory(30)->recycle([
            User::all(),
            PetCategory::all(),
        ])->create([
            "image_1" => 'adoption-post-image/petadoptic.png'
        ]);

        Event::factory(50)->recycle([
            User::all(),
            ArticleEventCategory::all()
        ])->create([
            "image" => "event-images/petEventPict.png",
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

        $this->call([
            FindMyPetSeeder::class,
        ]);
    }
}