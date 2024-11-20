<?php

declare(strict_types=1);

namespace App\Module\Auth\DTO;

use App\Module\Auth\Requests\RegisterRequest;

class RegisterUserDTO
{
    public string $name;
    public string $email;
    public string $password;
    public int $gender;

    public static function fromRequest(RegisterRequest $request): RegisterUserDTO
    {
        $dto = new self();
        $dto->name = $request->get('name');
        $dto->email = $request->get('email');
        $dto->password = $request->get('password');
        $dto->gender = $request->get('gender');

        return $dto;
    }
}
