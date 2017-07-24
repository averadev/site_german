<?php namespace App\Controllers\Admin;

	/*
	|--------------------------------------------------------------------------
	| Controlador para el administrador de obras en venta
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
use Session;


/*models*/
use Module;
use Submodule;
use Obra;
use Obra_lang;
use Images;

class SalesController extends BaseController {
	function __construct(){
		$this->beforeFilter('auth.admin_user');
		$this->beforeFilter('csrf',array('except'=>array('getIndex','getCreate','getActive','getStop','getEdit','getShow','getPanorama','postUpdateSale')));
	}

	public function getIndex(){
		$modules  = Module::with('submodules')->get();
		$subastas  = Obra::select('id','status',DB::raw("CONCAT('$', FORMAT(price, 2)) as price"))
		->with(array('languages'=>function($query){
			$query->where('language_id','=',Session::get('lang'));
		}))
		->where('status',100)	//Obra finalizada
		->orWhere('status',101) //obra en venta activa	
		->orderBy('id','DESC')
		->with('images')->paginate(10);
		return View::make('admin.sales.index')
		->with('active', 'home')
		->with('modules',$modules)
		->with('activeModule','a')
		->with('activeSubmodule','a4')
		->with('sales',$subastas);
	}

	/* * * * * * *  V I S T A S  * * * * * * */

	/*Vista crear nueva obra*/
	public function getCreate(){
		$modules  = Module::with('submodules')->get();
		return View::make('admin.sales.create')
		->with('modules',$modules)
		->with('activeModule','a')
		->with('activeSubmodule','a4');	
	}

	/*Vista editar obra*/
	public function getEdit($id = null){
		$auction = Obra::select('id','price',DB::raw("DATE_FORMAT(iniDate, '%Y-%m-%d %H:%i') as iniDate, DATE_FORMAT(endDate, '%Y-%m-%d %H:%i') as endDate"))
		->where('id',$id)
		->with(array('images'=>function($query){
			$query->where('type','=',1);
		}))
		->with(array('languages'=>function($query){
			$query->where('language_id','=',Session::get('lang'));
		}))
		->firstOrFail();
		$modules  = Module::with('submodules')->get();
		return View::make('admin.sales.update')
		->with('auctionElement',$auction)
		->with('modules',$modules)
		->with('activeModule','a')
		->with('activeSubmodule','a4');
	}

	/*Ver subasta*/
	public function getShow($id = null) {
		$auction = Obra::select('id','price',DB::raw("DATE_FORMAT(iniDate, '%d-%m-%Y %h:%i %p') as iniDate, DATE_FORMAT(endDate, '%d-%m-%Y %h:%i %p') as endDate"))
			->where('id',$id)
			->with(array('images'=>function($query){
				$query->where('type','=',1);
			}))
			->with(array('languages'=>function($query){
				$query->where('language_id','=',Session::get('lang'));
			}))
			->firstOrFail();
		$modules  = Module::with('submodules')->get();
		return View::make('admin.sales.show')
			->with('auctionElement',$auction)
			->with('modules',$modules)
			->with('activeModule','a')
			->with('activeSubmodule','a4');
	}

	/*Ver editar Panorama*/
	public function getPanorama($id = null){
		$images = Images::getPanoramaImagesByAuctionID($id);
		$modules  = Module::with('submodules')->get();
		return View::make('admin.sales.panorama')
			->with('images',$images)
			->with('modules',$modules)
			->with('activeModule','a')
			->with('subasta_id',$id)
			->with('activeSubmodule','a4');

	}

	/* * * * * * * E N D  V I S T A S * * * * * * * * */

	/*Activar producto en venta*/
	public function getActive($id = null) {
		if($id){
			$active = Obra::find($id);
			$active->status = 101;	/*enable*/
			$active->save();
		}
		return Redirect::back();
	}

	/*Desactivar producto en venta*/
	public function getStop($id = null) {
		if($id){
			$stop = Obra::find($id);
			$stop->status = 100;	/*disable*/
			$stop->save();
		}
		return Redirect::back();
	}		

	/*Crear nueva obra*/
	public function postSetSale(){
		if(Request::ajax()){
			$data = [
				'description' 	=> strip_tags(trim(Input::get('description'))),
				'name' 			=> strip_tags(trim(Input::get('name'))),
				'price' 		=> strip_tags(trim(Input::get('price')))
			];
			$rules = [
				'name' 			=> 'required|max:45',
				'description' 	=> 'required|max:500',
				'price' 		=> 'required|money'
			];
			$validator = Validator::make($data,$rules);
			if( $validator->passes() ){
				$data = (object)$data;				
				$sale  = new Obra;
				$language = new Obra_lang;
				$addSale = $sale->storeSale($data);
				$data->idAuction = $addSale->id;
				$language =  $language->saveObraLang($data);
				return Response::json(array('subasta'=>$addSale->id,'msg'=>'Subasta añadida','error'=>0));
			}else{
				if($validator->messages()->has('name'))
					$errorField = 'Nombre: '.$validator->messages()->first('name');
				else if($validator->messages()->has('description'))
					$errorField = 'Descripción: '.$validator->messages()->first('description');
				else if($validator->messages()->has('price'))
					$errorField = 'Precio: '.$validator->messages()->first('price');				
				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
		}
	}

	/*Actualizar obra*/
	public function postUpdateSale(){
		if(Request::ajax()){
			$data = [
				'idAuction'		=> strip_tags(trim(Input::get('idAuction'))),				
				'name' 			=> strip_tags(trim(Input::get('name'))),
				'description' 	=> strip_tags(trim(Input::get('description'))),
				'price' 		=> strip_tags(trim(Input::get('price')))
			];
			$rules = [
				'idAuction' 	=> 'required|integer',
				'name' 			=> 'required|max:45',
				'description' 	=> 'required|max:500',
				'price' 		=> 'required|money'
			];
			$validator = Validator::make($data,$rules);
			if( $validator->passes() ){
				$data = (object)$data;
				$sale  = new Obra;
				$language = new Obra_lang;
				$upSale = $sale->updateSale($data);
				$language =  $language->saveObraLang($data);
				return Response::json(array('msg'=>'Subasta Actualizada','error'=>0));
			}else{
				if($validator->messages()->has('idAuction'))
					$errorField = 'Por favor reinicie el navegador y vuelva a intentar';
				else if($validator->messages()->has('name'))
					$errorField = 'Nombre: '.$validator->messages()->first('name');
				else if($validator->messages()->has('description'))
					$errorField = 'Descripción: '.$validator->messages()->first('description');
				else if($validator->messages()->has('price'))
					$errorField = 'Precio: '.$validator->messages()->first('price');				
				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
		}
	}

	/*Guardar imagen de panorama*/
	public function postPanoramaImage(){
		if(Request::ajax()){
			try{
				$data = [
					'image' 	=>  Input::file('imagen'),
					'idAuction'	=> strip_tags(trim(Input::get('idAuction')))
				];
				$rules = [
					'image'		 => 'required|image',
					'idAuction'  => 'required|integer'
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
					$saveData = $image->addPanoramaImage($data);
					if($saveData){
						$imagesData = Images::getPanoramaImagesByAuctionID($data->idAuction);
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

	/*Eliminar imagen de panorama*/
	public function postDropPanImage(){
		if(Request::ajax()){
			try{
				$data = [
					'imageid' 	=>  strip_tags(trim(Input::get('image'))),
					'idAuction'	=> strip_tags(trim(Input::get('idAuction')))
				];
				$rules = [
					'imageid'	 => 'required|integer',
					'idAuction'	 => 'required|integer'
				];
				$validator = Validator::make($data,$rules);
				if($validator->passes()){
					$data = (object)$data;
					$delImage = Images::find($data->imageid);
					$delImage->delete();
					$imagesData = Images::getPanoramaImagesByAuctionID($data->idAuction);
					return Response::json(array('error' => 0,'images'=>$imagesData ,'msg' =>  'Imagen eliminada'));
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

	/*Ordenar Imagenes*/
	public function postImageSort(){
		if(Request::ajax()){
			$data = [
				'item' 	=> Input::get('item')
			];
			$rules = [
				'item' 	=> 'required'
			];
			$validator = Validator::make($data,$rules);
			if( $validator->passes() ){
				$data = (object)$data;
				$order = 1; //order number set to 1; 
				foreach ($data->item as $key => $idImage) {
					$images = new Images;
					$images = $images->sortAuctionImage($idImage,$order);
					$order++;
				}
				return Response::json(array('msg'=>'Orden guardada correctamente','error'=>0));
			}else{
				if($validator->messages()->has('item'))
					$errorField = 'Por favor reinicia el navegador';
				//else if($validator->messages()->has('description'))
				//	$errorField = 'Descripción: '.$validator->messages()->first('description');			
				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
		}
	}



}
