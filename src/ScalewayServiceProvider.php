<?php

namespace rpsimao\Scaleway;

use Illuminate\Support\ServiceProvider;
use \Config as Config;

class ScalewayServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {}

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('scaleway', function () {
            $token = $this->app['config']->get('services.scaleway.token', null);

            return new Scaleway($token);
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
