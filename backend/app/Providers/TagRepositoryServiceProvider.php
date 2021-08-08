<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TagRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Tag\TagRepositoryInterface::class,
            \App\Repositories\Tag\TagRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
