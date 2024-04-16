<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function __invoke()
    {
        return redirect()->route('product.index');
    }
}
