<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PhonebookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            'App\Contracts\IPhonebookRepository',
            'App\Repositories\PhonebookRepository'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
