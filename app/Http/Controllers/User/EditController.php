<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Enums\Gender;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $genders = Gender::cases();

        return view('user.edit', compact('user', 'genders'));
    }
}
