<?php

namespace MonkBlog\Component;

use Illuminate\Support\ServiceProvider as AbstractServiceProvider;

class ServiceProvider extends AbstractServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/component-manager.php' => config_path('component-manager.php'),
        ], 'config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('MonkBlog\Component\Contracts\Manager', function () {
            return new Manager;
        });

        $this->mergeConfigFrom(
           __DIR__ . '/../config/component-manager.php', 'config'
        );
    }
}
