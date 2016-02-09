<?php namespace Blackie0424\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
	    $this->app->make(AdminController::class);

        include(__DIR__ . '/routes.php');

        $this->loadViewsFrom(__DIR__ . '/views','Admin');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
