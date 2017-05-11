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
use Submodule;
use Subasta;
use Images;
use Auction_bid;

class BidsAdminController extends BaseController {
	function __construct(){
		$this->beforeFilter('auth');
		$this->beforeFilter('csrf',array('except'=>array('showBids')));
	}

	public function showBids($id = null){
		if(!$id){
			$activeAuction = Subasta::where('status',1)->firstOrFail();
			$id = $activeAuction->id;
		}

		$bids = Auction_bid::getBids($id);
	
		$subastas = Subasta::get(); 
		$modules  = Module::with('submodules')->get();
		return View::make('admin.bids.show')
		->with('active', 'home')
		->with('modules',$modules)
		->with('activeModule','a')
		->with('activeSubmodule','a2')
		->with('bids',$bids)
		->with('subastas',$subastas)
		->with('activeAuction',$id);
	}

}
