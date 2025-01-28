<?php

namespace Database\Factories;

use App\Models\ArticleCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
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
