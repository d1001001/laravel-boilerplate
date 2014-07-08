<?php namespace Auth\Controllers;

use Controller,
	View,
	Validator,
	Input,
	Redirect,
	Sentry;

class SignupController extends Controller {
	public function getIndex()
	{
		return View::make('auth::signup');
	}
	public function postIndex()
	{
		$input = Input::all();
		$validator = Validator::make(
			array(
				'email' => $input['email'],
				'password' => $input['password']
			),
			array(
				'email' => 'required|email|unique:users',
				'password' => 'required|min:6'
			)
		);
		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput(Input::old());
		}
		else {
			$user = Sentry::createUser(array(
				'email'     => $input['email'],
				'password'  => $input['password'],
				'activated' => true,
			));
			return Redirect::to('/');
		}
	}
}
