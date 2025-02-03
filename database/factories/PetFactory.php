<?php

namespace Database\Factories;

use App\Models\PetCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
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
            "pet_category_id" => PetCategory::factory(),
            "name" => fake()->name(),
            "breed" => fake()->word(),
            "gender" => fake()->randomElement(["male","female"]),
        ];
    }
}
