<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $colors = Color::all();
        $brands = Brand::all();

        return view('product.create', compact('categories', 'brands', 'colors'));
    }
}
