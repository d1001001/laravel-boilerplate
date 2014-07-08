<?php namespace Site;

use Illuminate\Support\ServiceProvider,
	View;

class SiteServiceProvider extends ServiceProvider {
	public function register()
	{

	}
	public function boot()
	{
		View::addLocation(__DIR__.'/Frontend/views');
		View::addNamespace('admin', __DIR__.'/Admin/views');
		require __DIR__.'/Admin/routes.php';
		require __DIR__.'/Frontend/routes.php';
	}
}
