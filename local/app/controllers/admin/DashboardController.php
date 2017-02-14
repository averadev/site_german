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

/*models*/
use Module;
use Submodule;

class DashboardController extends BaseController {
	function __construct(){
		$this->beforeFilter('auth');
		$this->beforeFilter('csrf',array('except'=>array('getIndex','getSubmodules','getSections')));
	}

	public function getIndex(){
		$modules  = Module::all();
		return View::make('admin.dashboard')
		->with('active', 'home')
		->with('modules',$modules);
	}

	public function getSubmodules(){
		if(Request::ajax()){
			$module = Input::get('module');
			$data  = Submodule::where('idModule','=',$module)->get();

			$idSubmodule = null;
			if( count($data) > 0 ){
				$idSubmodule = $data->take(1);
				$idSubmodule = $idSubmodule[0]->id;
			}

			$components =  Section::with(array('components'=>function($query){
						$query->where('xref_section_component.idComponent',1);
					}))->where('section.idSubmodule',$idSubmodule)->get();

			return Response::json(array('data' => $data, 'components' => $components ));
		}
	}

	public function getSections(){
		if(Request::ajax()){
			$idSubmodule = Input::get('submodule');

			$components =  Section::with(array('components'=>function($query){
						$query->where('xref_section_component.idComponent',1);
					}))->where('section.idSubmodule',$idSubmodule)->get();

			return Response::json(array('components' => $components ));
		}
	}


}
