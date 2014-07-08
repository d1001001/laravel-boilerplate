<?php namespace Site\Frontend\Controllers;

use Controller,
	View;

class IndexController extends Controller {
	public function getIndex()
	{
		return View::make('index');
	}
}