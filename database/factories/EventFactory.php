<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'location' => $this->faker->address,
            'ticket' => $this->faker->word,
            'date' => $this->faker->date,
            'image' => $this->faker->imageUrl,
            'description' => $this->faker->paragraph,
            'slug' => Str::slug($this->faker->sentence),  
        ];
    }
}

