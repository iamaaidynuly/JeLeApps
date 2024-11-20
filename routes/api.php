<?php

use App\Module\Auth\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/users/registration', [UserController::class, 'register']);
Route::get('/users/profile', [UserController::class, 'profile'])->middleware('auth:sanctum');
