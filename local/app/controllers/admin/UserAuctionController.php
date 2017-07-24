<?php namespace App\Controllers\Admin;
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
use Auction_bid;
use Auction_user;

class UserAuctionController extends BaseController {
	function __construct(){
		$this->beforeFilter('auth.admin_user');
		$this->beforeFilter('csrf',array('except'=>array('showUsers')));
	}

	public function showUsers(){
		$users = Auction_user::select(
			'name'
			,'nickname'
			,'email'
			,'status'
			,DB::raw("date_format((created_at),'%d-%m-%Y %H:%i') as creado"))
		->orderBy('created_at','DESC')
		->paginate(10);
		$modules  = Module::with('submodules')->get();
		return View::make('admin.user.show')
		->with('active', 'home')
		->with('modules',$modules)
		->with('activeModule','a')
		->with('activeSubmodule','a3')
		->with('users',$users);
	}

}
