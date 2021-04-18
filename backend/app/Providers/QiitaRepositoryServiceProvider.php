<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class QiitaRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Qiita\QiitaRepositoryInterface::class,
            \App\Repositories\Qiita\QiitaRepository::class
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
