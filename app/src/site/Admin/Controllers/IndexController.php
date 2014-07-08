<?php namespace Site\Admin\Controllers;

use Controller,
	View,
	Sentry;

class IndexController extends Controller {
	public function getIndex()
	{
		return View::make('admin::layout');
	}
}
