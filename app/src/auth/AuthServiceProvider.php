<?php namespace Auth;

use View,
	Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider {
	public function register()
	{
	}
	public function boot()
	{
		View::addNamespace('auth', __DIR__.'/views');
		require 'routes.php';
		require 'filters.php';
	}
}
