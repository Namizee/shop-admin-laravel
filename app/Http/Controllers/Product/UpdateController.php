<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use App\Services\ProductService;


class UpdateController extends Controller
{
    public function __construct(private ProductService $service)
    {
    }

    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $response = $this->service->update($data, $product);

        return redirect()->route('product.edit', $product)->with($response['type'], $response['message']);
    }
}
