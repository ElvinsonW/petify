<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdoptionPost>
 */
class AdoptionPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::factory(),
            "pet_id" => Pet::factory(),
            "name" => fake()->name(),
            "slug" => Str::slug(fake()->name()),
            "age" => fake()->numberBetween(1,10),
            "location" => fake()->sentence(2,true),
            "vaccinated" => fake()->boolean(),
            "weight" => fake()->randomFloat(2,1,100),
            "status" => 0,
            "description" => fake()->paragraphs(3,true),
        ];
    }
}
