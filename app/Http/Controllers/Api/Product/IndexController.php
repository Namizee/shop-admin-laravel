<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Resources\ProductResource;
use App\Models\Product;

class IndexController
{
    public function __invoke()
    {
        $products = Product::enabled()->with('category')->get();

        return ProductResource::collection($products);
    }
}
