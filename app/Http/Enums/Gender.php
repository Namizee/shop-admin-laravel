<?php

namespace App\Http\Enums;

enum Gender: string
{
    case MALE = '1';
    case FEMALE = '0';

    public function label(): string
    {
        return match ($this)
        {
            self::MALE => 'Мужской',
            self::FEMALE => 'Женский',
        };
    }
}
