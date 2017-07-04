<?php
namespace rpsimao\RPSScaleway\Test;

use rpsimao\RPSScaleway\Facade\RPSScalewayFacade;
use rpsimao\RPSScaleway\RPSScalewayServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
class TestCase extends OrchestraTestCase
{
	/**
	 * Load package service provider
	 * @param  \Illuminate\Foundation\Application $app
	 * @return rpsimao\RPSScaleway\RPSScalewayServiceProvider
	 */
	protected function getPackageProviders($app)
	{
		return [RPSScalewayServiceProvider::class];
	}
	/**
	 * Load package alias
	 * @param  \Illuminate\Foundation\Application $app
	 * @return array
	 */
	protected function getPackageAliases($app)
	{
		return [
			'Scaleway' => RPSScalewayFacade::class,
		];
	}
}