<?php

declare(strict_types=1);

namespace App\Module\Auth\Repositories;

interface CreateUserRepository
{
    public function create(array $data): string;
}
