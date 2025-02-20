<?php

namespace Database\Factories;

use App\Models\AdoptionPost;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdoptionRequest>
 */
class AdoptionRequestFactory extends Factory
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
            "post_id" => AdoptionPost::factory(),
            "Q1" => fake()->paragraph(),
            "Q2" => fake()->paragraph(),
            "Q3" => fake()->paragraph(),
            "Q4" => fake()->paragraph(),
            "Q5" => fake()->paragraph(),
            "approval_status" => fake()->randomElement(["Pending","Accepted","Rejected"]),
        ];
    }
}
