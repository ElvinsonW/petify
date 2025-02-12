<?php

namespace Database\Factories;

use App\Models\PetCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdoptionPostRequest>
 */
class AdoptionPostRequestFactory extends Factory
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
            "slug" => Str::slug(fake()->name()),
            "age" => fake()->numberBetween(1,10),
            "breed" => fake()->word(),
            "gender" => fake()->randomElement(["male","female"]),
            "location" => fake()->sentence(2,true),
            "vaccinated" => fake()->boolean(),
            "weight" => fake()->randomFloat(2,1,100),
            "adoption_status" => 0,
            "description" => fake()->paragraphs(3,true),
        ];
    }
}
