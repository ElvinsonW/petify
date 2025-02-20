<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetCategory>
 */
class PetCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->sentence(rand(1,2),true),
            "slug" => Str::slug(fake()->sentence(rand(1,2),true)),
            "color" => fake()->colorName(),
        ];
    }
}
