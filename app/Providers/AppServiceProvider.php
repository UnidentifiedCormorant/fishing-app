<?php

namespace App\Providers;

use App\Services\Abstracts\FishServiceInterface;
use App\Services\FishService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(FishServiceInterface::class, FishService::class);
    }
}
