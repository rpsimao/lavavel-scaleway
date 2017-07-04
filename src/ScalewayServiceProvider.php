<?php

namespace rpsimao\ScalewayRPS;

use Illuminate\Support\ServiceProvider;


class RPSScalewayServiceProvider extends ServiceProvider
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
	    $this->app->singleton(RPSScaleway::class, function () {
		    return new RPSScaleway(config('services.scaleway.token'));
	    });
	    $this->app->alias(RPSScaleway::class, 'scaleway');


    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Scaleway::class, 'scaleway'];
	    //return ['scaleway'];
    }

}
