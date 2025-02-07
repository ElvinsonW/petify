<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'title' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->sentence),  
            'location' => $this->faker->address,
            'ticket' => $this->faker->word,
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'image' => $this->faker->imageUrl,
            'description' => $this->faker->paragraph,
        ];
    }
}

