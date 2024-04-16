<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;

class DeleteController extends Controller
{
    public function __invoke(Brand $brand)
    {
        $brand->delete();

       return redirect()->route('brand.index')->with('success', 'Бренд удален!');
    }
}
