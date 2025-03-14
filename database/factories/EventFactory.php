<?php

namespace Database\Factories;

use App\Models\ArticleEventCategory;
use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Event::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'event_category_id' => ArticleEventCategory::factory(),
            'title' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->sentence),  
            'location' => $this->faker->address,
            'ticket' => $this->faker->numberBetween(0,100000),
            'start_date' => Carbon::now()->addDays($this->faker->numberBetween(1, 5)),
            'end_date' => fn($attributes) => Carbon::parse($attributes['start_date'])->addDays($this->faker->numberBetween(1, 5)),
            'image' => $this->faker->imageUrl,
            'description' => $this->faker->paragraph(),
            'approval_status' => $this->faker->randomElement(['Pending','Accepted','Rejected'])
        ];
    }
}

