<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Filters\ProductsFilter;
use App\Http\Requests\Product\FilterRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class IndexController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(ProductsFilter::class, ['queryParams' => array_filter($data)]);

        $products = Product::query()->filter($filter)->with('category')->enabled()->get();

        return ProductResource::collection($products);
    }
}
