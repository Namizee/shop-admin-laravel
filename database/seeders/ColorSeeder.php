<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            ['title' => 'Красный', 'code' => '#FF0000'],
            ['title' => 'Оранжевый', 'code' => '#FF8000'],
            ['title' => 'Зеленый', 'code' => '#008000'],
            ['title' => 'Голубой', 'code' => '#78DBE2'],
            ['title' => 'Синий', 'code' => '#0000FF'],
            ['title' => 'Фиолетовый', 'code' => '#8000FF']
        ];

        array_map(function ($color) {
            Color::create($color);
        }, $colors);
    }
}
