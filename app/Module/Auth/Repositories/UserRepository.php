<?php

declare(strict_types=1);

namespace App\Module\Auth\Repositories;

use App\Models\User;

class UserRepository implements CreateUserRepository
{
    public function create(array $data): string
    {
        $user = User::query()->create($data);
        return $user->createToken('auth_token')->plainTextToken;
    }
}
