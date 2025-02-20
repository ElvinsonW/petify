<?php

namespace Database\Factories;

use App\Models\Day;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DaySession>
 */
class DaySessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "day_id" => Day::factory(),
            'time' => Carbon::now()->addHours(rand(8, 16))->format('H:i'), 
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
        ];
    }
}
