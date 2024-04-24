<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->children()->delete();
        $category->delete();

        return redirect()->route('category.index')->with('Категория удалена!');
    }
}
