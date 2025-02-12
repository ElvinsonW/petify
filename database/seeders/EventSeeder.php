<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Factory as Faker;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $imageUrl = 'https://i.pinimg.com/736x/77/c0/c3/77c0c34983744d94a363d68a312385b8.jpg';
        $userIds = User::all()->pluck('id')->toArray();

        // Create random events
        for ($i = 0; $i < 50; $i++) {  // 50 random events
            Event::create([
                'user_id' => $faker->randomElement($userIds),  // Assuming the user with ID 1 is the creator, adjust if needed
                'title' => $faker->sentence,
                'slug' => $faker->slug,
                'location' => $faker->address,
                'ticket' => $faker->randomNumber(2),  // Random number for tickets
                'start_date' => $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d H:i:s'), // Random future date
                'end_date' => $faker->dateTimeBetween('+1 hour', '+1 year')->format('Y-m-d H:i:s'), // Random end date
                'image' => $imageUrl,
                'description' => $faker->paragraph,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // Optionally, you can create today's events separately
        Event::create([
            'user_id' => $faker->randomElement($userIds),,
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
