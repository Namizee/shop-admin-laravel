<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Services\ProductService;


class StoreController extends Controller
{
    public function __construct(private ProductService $service)
    {
    }

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $response = $this->service->store($data);

        return redirect()->route('product.index')->with($response['type'], $response['message']);
    }
}
