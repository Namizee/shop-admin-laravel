<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke()
    {
       return view('product.edit');
    }
}
