<?php

namespace rpsimao\LaravelScaleway;

use Illuminate\Support\ServiceProvider;
use \Config as Config;

class LaravelScalewayServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('scaleway', function () {
            $token = $this->app['config']->get('services.scaleway.token', null);

            return new LaravelScaleway($token);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['scaleway'];
    }

}
