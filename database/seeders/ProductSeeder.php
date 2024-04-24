<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(150)->create()->each(function (Product $product) {
            $product->colors()->attach(Color::inRandomOrder()->limit(rand(1,3))->pluck('id'));
        });
    }
}
