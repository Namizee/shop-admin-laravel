<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'title' => fake()->sentence(3),
            'description' => fake()->text(),
            'content' => fake()->text(400),
            'image' => fake()->imageUrl(),
            'price' => fake()->randomFloat(2,10,999),
            'count' => rand(10, 20),
            'category_id' => Category::get()->random()->id,
            'brand_id' => Brand::get()->random()->id,
        ];
    }
}
