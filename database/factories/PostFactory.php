<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Laravel\Prompts\text;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = collect([
            Post::STATUS_DRAFT,
            Post::STATUS_PUBLISHED,
        ])->random(1)[0];
            return [
            //
            'title' => fake()->text(70),
            'image' => fake()->imageUrl,
            'describe' => fake()->text,
            'status' => $status,
        ];
    }
}
