<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            \App\Repositories\MovieRepositoryInterface::class,
            \App\Repositories\MovieRepository::class,
        );
    }

    public function boot()
    {
        //
    }
}
