<?php namespace Themighty\Mediamanager;

use Illuminate\Support\ServiceProvider;

class MediamanagerServiceProvider extends ServiceProvider {

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
		$this->registerViews();
        $this->registerRoute();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}


	/**
	 * Publish the views to the application vendor/views directory
	 */
	public function registerViews() {
		//Load the views using vault::
		$this->loadViewsFrom(dirname(__FILE__).'/Views', 'themighty/mediamanager');

        $this->publishes([
            __DIR__.'/path/to/views' => base_path('resources/views/vendor/themighty/mediamanager'),
        ]);
	}


    public function registerRoute(){
        include __DIR__ . '/Http/route.php';
    }

}
