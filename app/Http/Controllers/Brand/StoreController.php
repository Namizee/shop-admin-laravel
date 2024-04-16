<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brand\StoreRequest;
use App\Models\Brand;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
       $data = $request->validated();
       Brand::create($data);

       return redirect()->route('brand.index')->with('success', 'Бренд добавлен!');
    }
}
