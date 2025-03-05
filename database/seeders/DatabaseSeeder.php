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

        $this->call([UserSeeder::class, ArticleEventCategorySeeder::class, PetCategorySeeder::class]);
        
        Article::factory(50)->recycle([
            User::all(),
            ArticleEventCategory::all()
        ])->create([
            "image" => 'articles-image/petArticlePict.png'
        ]);

        ArticleRequest::factory(50)->recycle([
            User::all(),
            ArticleEventCategory::all()
        ])->create([
            "image" => 'articles-image/petArticlePict.png'
        ]);

        Pet::factory(10)->recycle([
            User::all(),
            PetCategory::all(),
        ])->create([
            "image_1" => "adoption-post-image/petadoptic.png"
        ]);

        // Buat 50 postingan adopsi dengan relasi ke User dan Pet
        AdoptionPost::factory(50)->recycle([
            User::all(),
            Pet::all(),
        ])->create();

        // Buat 50 kehidupan setelah adopsi dengan relasi ke User dan Pet
        AdoptionPostRequest::factory(50)->recycle([
            User::all(),
            PetCategory::all(),
        ])->create();

        LifeAfterAdoption::factory(50)->recycle([
            User::all(),
            Pet::all(),
        ])->create([
            "image" => 'life-after-adoption-post-image/laaPict.png',
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

        AdoptionRequest::factory(50)->recycle([
            User::all(),
            AdoptionPost::all()
        ])->create();

        $this->call([
            FindMyPetSeeder::class,
        ]);
    }
}