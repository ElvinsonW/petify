<?php
namespace Database\Factories;

use App\Models\AdoptionPost;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdoptionPostFactory extends Factory
{
    public $counter = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pet = Pet::inRandomOrder()->first();

        return [
            "user_id" => User::factory(),
            "pet_id" => $pet->id,
            "name" => $pet->name,
            "slug" => $this->generateUniqueSlug($pet->name),
            "age" => fake()->numberBetween(1,10),
            "location" => fake()->sentence(2, true),
            "vaccinated" => fake()->boolean(),
            "weight" => fake()->randomFloat(2,1,100),
            "status" => 0,
            "description" => fake()->paragraphs(3, true),
        ];
    }

    /**
     * Generate a unique slug for the AdoptionPost.
     *
     * @param string $name
     * @return string
     */
    private function generateUniqueSlug(string $name): string
    {   
        $slug = Str::slug(strtolower($name)) . '-' . $this->counter++;
        
        return $slug;
    }
}
