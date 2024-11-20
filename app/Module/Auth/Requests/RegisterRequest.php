<?php

declare(strict_types=1);

namespace App\Module\Auth\Requests;

use App\Module\Auth\DTO\RegisterUserDTO;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'gender' => 'required|in:1,2',
            'name'  => 'required'
        ];
    }

    public function getDTO(): array
    {
        $dto = RegisterUserDTO::fromRequest($this);
        return [
            'email' => $dto->email,
            'password'  => Hash::make($dto->password),
            'gender'    => $dto->gender,
            'name'  => $dto->name
        ];
    }
}
