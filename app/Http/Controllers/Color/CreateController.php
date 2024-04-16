<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;

class CreateController extends Controller
{
    public function __invoke()
    {
        $colors = Color::all();

        return view('color.create', compact('colors'));
    }
}
