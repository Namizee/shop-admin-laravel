<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;


class UpdateController extends Controller
{
    public function __invoke()
    {
       return redirect()->route('product.index');
    }
}
