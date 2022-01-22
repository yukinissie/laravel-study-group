<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MovieServiceProvider extends ServiceProvider
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