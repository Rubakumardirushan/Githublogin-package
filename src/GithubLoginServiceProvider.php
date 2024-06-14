<?php

namespace Dirushan\Githublogin;

use Illuminate\Support\ServiceProvider;

class GithubLoginServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/githublogin.php',
            'githublogin'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'githublogin');
        $this->publishes([
            __DIR__ . '/../config/githublogin.php' => config_path('githublogin.php'),
        ], 'config');
        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/githublogin'),
        ], 'views');
    }
}
