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
use Helper;


/*models*/
use Module;
use Submodule;
use Subasta;
use Images;



class AuctionAdminController extends BaseController {

	function __construct(){
		$this->beforeFilter('auth');
		$this->beforeFilter('csrf',array('except'=>array('getIndex','getCreate','getShow','getEdit','putUpdateAuction','postSaveImage','postSetAuction','deleteDropImage','getActive','getNext','getStop')));
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

	public function getShow($id = null) {
		$auction = Subasta::select('id','name','detail',DB::raw("DATE_FORMAT(iniDate, '%d-%m-%Y %h:%i %p') as iniDate, DATE_FORMAT(endDate, '%d-%m-%Y %h:%i %p') as endDate"))
		->where('id',$id)->with('images')->firstOrFail();
		$modules  = Module::with('submodules')->get();
		return View::make('admin.auction.show')
		->with('auctionElement',$auction)
		->with('modules',$modules)
		->with('activeModule','a')
		->with('activeSubmodule','a1');
	}

	public function getEdit($id = null){
		$auction = Subasta::select('id','name','detail',DB::raw("DATE_FORMAT(iniDate, '%Y-%m-%d %H:%i') as iniDate, DATE_FORMAT(endDate, '%Y-%m-%d %H:%i') as endDate"))
		->where('id',$id)->with('images')->firstOrFail();
		$modules  = Module::with('submodules')->get();
		return View::make('admin.auction.update')
		->with('auctionElement',$auction)
		->with('modules',$modules)
		->with('activeModule','a')
		->with('activeSubmodule','a1');
	}

	public function getActive($id = null) {
		if($id){
			$auction = Subasta::where('status', '=', 1)->update(array('status' => 0));
			$active = Subasta::find($id);
			$active->status = 1;
			$active->save();
		}
		return Redirect::to('/admin');
	}

	public function getNext($id = null) {
		if($id){
			$auction = Subasta::where('status', '=', 2)->update(array('status' => 0));
			$active = Subasta::find($id);
			$active->status = 2;
			$active->save();
		}
		return Redirect::to('/admin');
	}	

	public function getStop() {
		Subasta::where('id', '>', 0)->update(array('status' => 0));
		return Redirect::to('/admin');
	}

	public function getCreate(){
		$modules  = Module::with('submodules')->get();
		return View::make('admin.auction.create')
		->with('modules',$modules)
		->with('activeModule','a')
		->with('activeSubmodule','a1');	
	}

	public function postSaveImage(){
		if(Request::ajax()){
			try{
				$data = [
					'image' 	=>  Input::file('imagen'),
					'idAuction'	=> strip_tags(trim(Input::get('idAuction'))),
				];
				$rules = [
					'image'		 => 'required|image',
					'idAuction'  => 'required|integer',
				];
				$validator = Validator::make($data,$rules);
				if($validator->passes()){
					$data = (object)$data;
					$file = $data->image;
					$pathFile = Helper::getFilePath(0);
					$extension = $file->getMimeType();
					$extensionName = Helper::getExtensionMime($extension);
					//$file->move($pathFile, 'prueba8621398.jpg');
					$name = Helper::saveImage($file,$data->idAuction, $pathFile,$extensionName);
					$data->name = $name;
					$image = new Images;
					$saveData = $image->addImage($data);
					if($saveData){
						$imagesData = Images::select('id','filename')->where('subasta_id',$data->idAuction)->get();
						return Response::json(array('error' => 0,'images'=>$imagesData ,'msg' =>  'Imagén Agregada'));
					}
					return Response::json(array('error' => 1,'msg' => 'Imagén no guardada, porvafor reinicie el navegador y vuelva a intentarlo'));
				}else{
					if($validator->messages()->has('idAuction'))
						$errorField = 'Por favor reinicie el navegador y vuelva a intentar';
					else if($validator->messages()->has('image'))
						$errorField = 'imagen: '.$validator->messages()->first('image');
					return Response::json(array('error' => 1,'msg' => $errorField ));	
				}
			}catch (Exception $e) {
				return Response::json(array('error' => 1,'msg' =>  $e->getMessage()));
			}
		}
	}

	public function deleteDropImage(){
		if(Request::ajax()){
			try{
				$data = [
					'imageid' 	=>  strip_tags(trim(Input::get('image'))),
				];
				$rules = [
					'imageid'		 => 'required|integer',
				];
				$validator = Validator::make($data,$rules);
				if($validator->passes()){
					$data = (object)$data;
					$delImage = Images::find($data->imageid);
					$delImage->delete();
					return Response::json(array('error' => 0,'msg' => 'Imagén eliminada'));
				}else{
					if($validator->messages()->has('image'))
						$errorField = 'Por favor reinicie el navegador y vuelva a intentar';
					return Response::json(array('error' => 1,'msg' => $errorField ));	
				}
			}catch (Exception $e) {
				return Response::json(array('error' => 1,'msg' =>  $e->getMessage()));
			}
		}
	}	

	public function postSetAuction(){
		if(Request::ajax()){
			$data = [
				'description' 	=> strip_tags(trim(Input::get('description'))),
				'name' 			=> strip_tags(trim(Input::get('name'))),
				'startDate' 	=> strip_tags(trim(Input::get('startDate'))),
				'endDate' 		=> strip_tags(trim(Input::get('endDate')))
			];
			$rules = [
				'name' 			=> 'required|max:45',
				'description' 	=> 'required|max:500',
				'startDate'		=> 'required|date_format:"d-m-Y H:i"',
				'endDate' 		=> 'required|date_format:"d-m-Y H:i"'
			];
			$validator = Validator::make($data,$rules);
			if( $validator->passes() ){
				$data = (object)$data;
				$data->startDate = date("Y-m-d H:i:s", strtotime($data->startDate)); /*Convert Date*/
				$data->endDate = date("Y-m-d H:i:s", strtotime($data->endDate)); /*Convert Date*/				
				$subasta = new Subasta;
				$addAuction = $subasta->storeAuction($data);
				return Response::json(array('subasta'=>$addAuction->id,'msg'=>'Subasta añadida','error'=>0));
			}else{
				if($validator->messages()->has('name'))
					$errorField = 'Nombre: '.$validator->messages()->first('name');
				else if($validator->messages()->has('description'))
					$errorField = 'Descripción: '.$validator->messages()->first('description');
				else if($validator->messages()->has('startDate'))
					$errorField = 'Fecha de inicio: '.$validator->messages()->first('startDate');
				else if($validator->messages()->has('endDate'))
					$errorField = 'Fecha final: '.$validator->messages()->first('endDate');
				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
		}
	}

	public function putUpdateAuction(){
		if(Request::ajax()){
			$data = [
				'idAuction'		=> strip_tags(trim(Input::get('idAuction'))),
				'description' 	=> strip_tags(trim(Input::get('description'))),
				'name' 			=> strip_tags(trim(Input::get('name'))),
				'startDate' 	=> strip_tags(trim(Input::get('startDate'))),
				'endDate' 		=> strip_tags(trim(Input::get('endDate')))
			];
			$rules = [
				'idAuction' 	=> 'required|integer',
				'name' 			=> 'required|max:45',
				'description' 	=> 'required|max:500',
				'startDate'		=> 'required|date_format:"d-m-Y H:i"',
				'endDate' 		=> 'required|date_format:"d-m-Y H:i"'
			];
			$validator = Validator::make($data,$rules);
			if( $validator->passes() ){
				$data = (object)$data;
				$data->startDate = date("Y-m-d H:i:s", strtotime($data->startDate)); /*Convert Date*/
				$data->endDate = date("Y-m-d H:i:s", strtotime($data->endDate)); /*Convert Date*/				
				$subasta = new Subasta;
				$upAuction = $subasta->updateAuction($data);
				return Response::json(array('msg'=>'Subasta Actualizada','error'=>0));
			}else{
				if($validator->messages()->has('idAuction'))
					$errorField = 'Por favor reinicie el navegador y vuelva a intentar';
				else if($validator->messages()->has('name'))
					$errorField = 'Nombre: '.$validator->messages()->first('name');
				else if($validator->messages()->has('description'))
					$errorField = 'Descripción: '.$validator->messages()->first('description');
				else if($validator->messages()->has('startDate'))
					$errorField = 'Fecha de inicio: '.$validator->messages()->first('startDate');
				else if($validator->messages()->has('endDate'))
					$errorField = 'Fecha final: '.$validator->messages()->first('endDate');
				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
		}
	}	


}