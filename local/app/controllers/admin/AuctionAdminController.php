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
use Request;
use Section;
use Component;
use DB;


/*models*/
use Module;
use Submodule;
use Subasta;
use Images;



class AuctionAdminController extends BaseController {

	function __construct(){
		$this->beforeFilter('auth');
		$this->beforeFilter('csrf',array('except'=>array('getIndex')));
	}

	public function getIndex(){
		$modules  = Module::with('submodules')->get();
		$subastas  = Subasta::select('name',DB::raw("date_format((iniDate),'%d/%m/%Y %h:%i %p') as iniDate"),DB::raw("date_format((endDate),'%d/%m/%Y %h:%i %p') as endDate"))->orderBy('id','DESC')->with('images')->paginate(10);
		return View::make('admin.auction_index')
		->with('active', 'home')
		->with('modules',$modules)
		->with('auctions',$subastas);
	}


}