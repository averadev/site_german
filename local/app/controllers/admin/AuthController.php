<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Mail;
use Validator;
use Cache;
use Event;
use Auth;
use Sefa\Services\Mailer;

class AuthController extends BaseController {

	protected $user;

	/**
	 * Display the login page
	 * @return View
	 */
	public function getLogin() {
		if (!Auth::check()) return View::make('admin.login');
		else return Redirect::route('admin.dashboard');
	}

	/**
	 * Login action
	 * @return Redirect
	 */
	public function postLogin() {


		$rememberMe = Input::get('rememberMe');
		$credentials = [
			'email'		=> trim(Input::get('email')),
			'password'	=> trim(Input::get('password'))
		];
		$rules = [
			'email'   => 'required',
			'password' => 'required'
		];
		$validator = Validator::make($credentials,$rules);
		if( $validator->passes() ){
			if (!empty($rememberMe)) {
				Auth::attempt($credentials,true);
			} else {
				Auth::attempt($credentials,false);
			}
			if(Auth::check()){
				return Redirect::route('admin.dashboard');
			}
			return Redirect::back()->with('error_message', 'Usuario o contraseña no validas')->withInput();
			//return Redirect::back()->withInput()->with('failure','username or password is invalid!');
		}
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}


		//try {
//
		//	if (!empty($rememberMe)) {
		//		Auth::attempt($credentials,true);
		//	} else {
		//		Auth::attempt($credentials,false);
		//	}
//
		//	if ($this->user) {
//
		//		Event::fire('user.login', $this->user);
		//		return Redirect::route('admin.dashboard');
		//	}
		//} catch (\Exception $e) {
		//	return Redirect::route('admin.login')->withErrors(array('login' => $e->getMessage()));
		//}
	}

	/**
	 * Logout action
	 * @return Redirect
	 */
	public function getLogout() {

		$this->user = Sentry::getUser();
		Event::fire('user.logout', $this->user);
		Sentry::logout();
		return Redirect::route('admin.login');
	}




}
