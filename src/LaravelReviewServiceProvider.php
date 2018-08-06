<?php

namespace CleaniqueCoders\LaravelReview;

use Illuminate\Support\ServiceProvider;

class LaravelReviewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Configuration
         */
        $this->publishes([
            __DIR__ . '/config/reviewer.php' => config_path('reviewer.php'),
        ], 'reviewer');
        $this->mergeConfigFrom(
            __DIR__ . '/config/reviewer.php', 'reviewer'
        );

        /*
         * Migrations
         */
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
