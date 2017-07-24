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
use Session;
use Sefa\Services\Mailer;

class AuthController extends BaseController {

	protected $user;

	/**
	 * Display the login page
	 * @return View
	 */
	public function getLogin() {
		if (!Auth::admin_user()->check()) return View::make('admin.login');
		else return Redirect::to('/admin');
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
				Auth::admin_user()->attempt($credentials,true);
			} else {
				Auth::admin_user()->attempt($credentials,false);
			}
			if(Auth::admin_user()->check()){
				Session::put('lang', 1);
				return Redirect::to('/admin');
			}
			return Redirect::back()->with('error_message', 'Usuario o contraseña no validos')->withInput();

		}
		if($validator->fails())
		{
			return Redirect::back()->with('error_message', 'Usuario y contraseña son requeridos')->withInput();
		}

	}

	/**
	 * Logout action
	 * @return Redirect
	 */
	public function getLogout() {

		Auth::admin_user()->logout();
    	return Redirect::to('/admin/login');
	}




}
