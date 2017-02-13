<?php namespace App\Controllers\Admin;

	/*
	|--------------------------------------------------------------------------
	| Controlador para el administrador de subastas
	|--------------------------------------------------------------------------
	|
	*/

use Illuminate\Support\Facades\Response;
use BaseController;
use Redirect;
use View;
use Input;
use Mail;
use Validator;
use Cache;
use Event;
use Auth;
use Module;
use Submodule;
use Request;
use Section;
use Component;


class AuctionAdminController extends BaseController {

	function __construct(){
		$this->beforeFilter('auth');
		$this->beforeFilter('csrf',array('except'=>array('getIndex',)));
	}

	public function getIndex(){
		$modules  = Module::all();
		return View::make('admin.dashboard')
		->with('active', 'home')
		->with('modules',$modules);
	}







}