<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $imageUrl = 'https://i.pinimg.com/736x/77/c0/c3/77c0c34983744d94a363d68a312385b8.jpg';
        $userIds = User::all()->pluck('id')->toArray();

        // Buat 50 event acak
        for ($i = 0; $i < 50; $i++) {
            Event::create([
                'user_id' => $faker->randomElement($userIds),  // Assuming the user with ID 1 is the creator, adjust if needed
                'event_category_id' => ArticleEventCategory::factory(),
                'title' => $faker->sentence,
                'slug' => $faker->slug,
                'location' => $faker->address,
                'ticket' => $faker->randomNumber(2), // Nomor acak untuk tiket
                'start_date' => $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d H:i:s'), // Tanggal mulai acak di masa depan
                'end_date' => $faker->dateTimeBetween('+1 hour', '+1 year')->format('Y-m-d H:i:s'), // Tanggal berakhir acak
                'image' => $imageUrl,
                'description' => $faker->paragraph,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // Buat event khusus untuk hari ini
        Event::create([
            'user_id' => $faker->randomElement($userIds),
            'event_category_id' => ArticleEventCategory::factory(),
            'title' => 'Today\'s Special Event',
            'slug' => 'special-event-today',
            'location' => 'Central Park, New York',
            'ticket' => 100,
            'start_date' => Carbon::today()->format('Y-m-d H:i:s'),
            'end_date' => Carbon::today()->addHours(3)->format('Y-m-d H:i:s'),
            'image' => $imageUrl,
            'description' => 'A special event happening today!',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}