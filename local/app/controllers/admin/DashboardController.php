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

class DashboardController extends BaseController {
	function __construct(){
		$this->beforeFilter('auth');
		$this->beforeFilter('csrf',array('except'=>array('getIndex','getSections','getComponents','showSection','getElement')));
	}

	public function getIndex(){
		$modules  = Module::with('submodules')->get();
		$subastas  = Subasta::select('name','id','status',DB::raw("date_format((iniDate),'%d-%m-%Y %h:%i %p') as iniDate"),DB::raw("date_format((endDate),'%d-%m-%Y %h:%i %p') as endDate"))->orderBy('id','DESC')->with('images')->paginate(10);
		return View::make('admin.auction.index')
		->with('active', 'home')
		->with('modules',$modules)
		->with('activeModule','a')
		->with('activeSubmodule','a1')
		->with('auctions',$subastas);
	}

	public function getComponents(){
		if(Request::ajax()){
			$idSection = Input::get('section');
			$components =  Component::Select('id','idComponent as type','name as compName')->where('idSection','=',$idSection)->get();
			return Response::json(array('components' => $components ));
		}
	}

	public function getElement(){
		if(Request::ajax()){
			$idComponent = Input::get('component');
			$component = Component::select('id','idComponent as type','value')->where('id','=',$idComponent)->first();
			return Response::json(array('component' => $component ));
		}		
	}

	public function showSection($idSubmodule){
		$sections =  Section::with('components')->where('section.idSubmodule',$idSubmodule)->get();

		$idModule = Submodule::Select('idModule')->where('id','=',$idSubmodule)->firstOrFail();

		$idModule = (int)$idModule->idModule;
		$modules  = Module::with('submodules')->get();
		return View::make('admin.submodule')
		->with('active', 'home')
		->with('sections',$sections)
		->with('activeModule',$idModule)
		->with('activeSubmodule',$idSubmodule)
		->with('modules',$modules);
	}

}
