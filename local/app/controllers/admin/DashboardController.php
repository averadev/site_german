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
use Helper;
use Session;

/*models*/
use Module;
use Submodule;
use Obra;
use Images;

class DashboardController extends BaseController {
	function __construct(){
		$this->beforeFilter('auth.admin_user');
		$this->beforeFilter('csrf',array('except'=>array('getIndex','getSections','getComponents','showSection','getElement','putSaveText','postSaveImage','getLanguage')));
	}

	public function getIndex(){
		$modules  = Module::with('submodules')->get();
		$subastas  = Obra::select('id','status',DB::raw("date_format((iniDate),'%d-%m-%Y %h:%i %p') as iniDate"),DB::raw("date_format((endDate),'%d-%m-%Y %h:%i %p') as endDate"))
		->with(array('languages'=>function($query){
			$query->where('language_id','=',Session::get('lang'));
		}))
		->where('status',0)	//subasta finalizada
		->orWhere('status',1) //subasta activa
		->orWhere('status',2) //proxima subasta
		->orderBy('id','DESC')
		->paginate(10);		
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
			$components =  Component::getSectionComponents($idSection);
			return Response::json(array('components' => $components ));
		}
	}

	public function getElement(){
		if(Request::ajax()){
			$idComponent = Input::get('component');
			$component = Component::select('id','idComponent as type','value','img_alt','img_text_dimension')->where('id','=',$idComponent)->first();
			return Response::json(array('component' => $component ));
		}		
	}

	public function getLanguage($lang){
		if($lang == 1){
			Session::put('lang', 1);
			return Redirect::back();
		}
		Session::put('lang', 2);
		return Redirect::back();
	}

	public function postSaveText(){
		if(Request::ajax()){
			$data = [
				'id' 		=> strip_tags(trim(Input::get('id_element'))),
				'value' 	=> trim(Input::get('value'))
			];
			$rules = [
				'id' 		=> 'required|integer',
				'value' 	=> 'required|max:500',
			];
			$validator = Validator::make($data,$rules);
			if( $validator->passes() ){
				$data = (object)$data;
				$component = new Component;
				$update = $component->upElement($data);
				if($update){
					return Response::json(array('error' => 0,'msg' =>  'Actualización Correcta'));
				}
			}else{
				if($validator->messages()->has('id'))
					$errorField = 'Por favor reinicie el navegador y vuelva a intentar';
				else if($validator->messages()->has('value'))
					$errorField = 'Texto: '.$validator->messages()->first('value');
				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
		}
	}

	public function postSaveImage(){
		if(Request::ajax()){
			$data = [
				'id' 		=> strip_tags(trim(Input::get('element_id'))),
				'module' 	=> strip_tags(trim(Input::get('moduleid'))),
				'alt'		=> strip_tags(trim(Input::get('tag_img'))),
				'image' 	=> Input::file('imagen')
			];
			$rules = [
				'id' 		=> 'required',
				'alt'		=> 'required|max:120',
				'module' 	=> 'required|integer'
			];
			$image = false;
			if($data['image']){
				$rules['image'] = 'required|image|max:1024';
				$image = true;
			}

			$validator = Validator::make($data,$rules);
			if( $validator->passes() ){
				$data = (object)$data;
				$data->value = false;
				if($image){
					$file = $data->image;
					$pathFile = Helper::getFilePath($data->module);
					$extension = $file->getMimeType();
					$extensionName = Helper::getExtensionMime($extension);
					$name = Helper::saveImgElement($file,$pathFile,$extensionName);
					$data->value = $name;
				}
				$component = new Component;
				$update = $component->upElement($data,true);
				if($update){
					return Response::json(array('error' => 0,'msg' =>  'Actualización Correcta'));
				}
			}else{
				if($validator->messages()->has('id'))
					$errorField = 'Por favor reinicie el navegador y vuelva a intentar';
				else if($validator->messages()->has('alt'))
					$errorField = 'Alt: '.$validator->messages()->first('alt');
				else if($validator->messages()->has('image'))
					$errorField = 'Imagen: '.$validator->messages()->first('image');				
				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
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
