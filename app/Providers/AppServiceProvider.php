<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Interfaces\UtilisateurRepositoryInterface::class,
            \App\Repositories\UtilisateurRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\AgricoleRepositoryInterface::class,
            \App\Repositories\AgricoleRepository::class // Your concrete implementation
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
