<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Enums\Gender;

class CreateController extends Controller
{
    public function __invoke()
    {
        $genders = Gender::cases();

        return view('user.create', compact('genders'));
    }
}
