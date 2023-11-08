<?php

namespace Database\Factories;

use App\Models\Categoris;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategorisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = collect([
            Categoris::STATUS_DRAFT,
            Categoris::STATUS_PUBLISHED,
        ])->random(1)[0];
        return [
            //
            'title' => fake()->text(50),
            'name' => fake()->text(20),
            'image' => fake()->imageUrl,
            'describe' => fake()->text,
            'status' => $status,
        ];
    }
}
