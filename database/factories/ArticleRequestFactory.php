<?php

namespace Database\Factories;

use App\Models\ArticleCategory;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleRequest>
 */
class ArticleRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(4),
            "slug" => Str::slug(fake()->unique()->sentence(4)),
            "user_id" => User::factory(),
            "article_category_id" => ArticleCategory::factory(),
            "content" => fake()->paragraphs(3,true),
        ];
    }
}
