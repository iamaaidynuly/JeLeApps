<?php

declare(strict_types = 1);

namespace App\Module\Auth\Controllers;

use App\Http\Controllers\Controller;
use App\Module\Auth\Repositories\CreateUserRepository;
use App\Module\Auth\Requests\RegisterRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(
        private readonly CreateUserRepository $createUserRepository
    ) {
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        $token = $this->createUserRepository->create($request->getDTO());

        return response()->json([
            'message' => 'Регистрация прошла успешно!',
            'token' => $token,
        ], 201);
    }

    public function profile(): JsonResponse
    {
        return response()->json([
            'data' => Auth::user()
        ], 200);
    }
}
