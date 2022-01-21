<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
            \App\Repositories\MovieRepositoryInterface::class,
            \App\Repositories\MovieRepository::class,
        );

        $this->app->bind(
            \App\Services\MovieServiceInterface::class,
            function ($app) {
                return new \App\Services\MovieService(
                    $app->make(\App\Repositories\MovieRepositoryInterface::class)
                );
            },
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
