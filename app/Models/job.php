<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\In;

class job
{

    public static function all(): array
    {

        return [
            [
                'id'    => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id'    => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id'    => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        return Arr::first(static::all(), fn ($job) => $job['id'] == $id);
    }
}
