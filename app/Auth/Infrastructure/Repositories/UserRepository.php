<?php

namespace App\Auth\Infrastructure\Repositories;

use App\Auth\Infrastructure\Models\User;

class UserRepository
{
    public function store(array $data): void
    {
        User::query()->create($data);
    }
}
