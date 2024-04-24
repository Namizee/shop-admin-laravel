<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shoesCategory = Category::create(
            ['title' => 'Обувь']
        );

        $booksCategory = Category::create(
            ['title' => 'Книги']
        );

        $sportCategory = Category::create(
            ['title' => 'Спорт']
        );

        $subCategories = [
            ['title' => 'Детская', 'parent_id' => $shoesCategory->id],
            ['title' => 'Женская', 'parent_id' => $shoesCategory->id],
            ['title' => 'Мужская', 'parent_id' => $shoesCategory->id],
            ['title' => 'Комиксы', 'parent_id' => $booksCategory->id],
            ['title' => 'Мода', 'parent_id' => $booksCategory->id],
            ['title' => 'Дом, сад и огород', 'parent_id' => $booksCategory->id],
            ['title' => 'Фитнес', 'parent_id' => $sportCategory->id],
            ['title' => 'Спортивное питание', 'parent_id' => $sportCategory->id],
            ['title' => 'Единаборства', 'parent_id' => $sportCategory->id],
        ];

        array_map(function ($subCategory) {
            Category::create($subCategory);
        }, $subCategories);
    }
}
