<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;

class CreateController extends Controller
{
    public function __invoke()
    {
        $brands = Brand::all();

        return view('brand.create', compact('brands'));
    }
}
