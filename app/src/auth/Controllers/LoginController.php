<?php namespace Auth\Controllers;

use Controller,
	View,
	Redirect,
	Sentry,
	Input,
	Cartalyst\Sentry\Users\LoginRequiredException,
	Cartalyst\Sentry\Users\PasswordRequiredException,
	Cartalyst\Sentry\Users\WrongPasswordException,
	Auth;

class LoginController extends Controller {
	public function getIndex()
	{
		return View::make('auth::login');
	}
	public function postIndex()
	{
		try {
			Sentry::authenticate(Input::except('_token'), false);
		}
		catch (\Exception $e) {
			return Redirect::back()->withErrors(
				array($e->getMessage())
			)->withInput(Input::old());
		}
		return Redirect::to('/admin');
	}
	public function getOut()
	{
		Sentry::logout();
		return Redirect::to('login');
	}
}
