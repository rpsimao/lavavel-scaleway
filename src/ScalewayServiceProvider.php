<?php

namespace rpsimao\ScalewayRPS;

use Illuminate\Support\ServiceProvider;
use \Config as Config;

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
	    /*$this->app->singleton(Scaleway::class, function () {
		    return new Scaleway(config('services.scaleway.token'));
	    });
	    $this->app->alias(Scaleway::class, 'Scaleway');*/

	    $this->app->bind('scaleway', function(){
		    return new RPSScaleway(config('services.scaleway.token'));
	    });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        //return [Scaleway::class, 'Scaleway'];
	    return ['scaleway'];
    }

}
