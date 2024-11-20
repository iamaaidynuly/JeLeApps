<?php

declare(strict_types=1);

namespace App\Module\Auth\Providers;

use App\Module\Auth\Repositories\CreateUserRepository;
use App\Module\Auth\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(CreateUserRepository::class, UserRepository::class);
    }
}
