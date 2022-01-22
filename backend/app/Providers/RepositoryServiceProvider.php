<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            \App\Services\MovieServiceInterface::class,
            function ($app) {
                return new \App\Services\MovieService(
                    $app->make(\App\Repositories\MovieRepositoryInterface::class)
                );
            },
        );
    }

    public function boot()
    {
        //
    }
}
