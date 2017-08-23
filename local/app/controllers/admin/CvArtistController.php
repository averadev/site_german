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
use CvArtist;
use CvArtistDetail;

class CvArtistController extends BaseController {
	function __construct(){
		$this->beforeFilter('auth.admin_user');
		$this->beforeFilter('csrf',array('except'=>array('getListIndex','getFormCreate','getEdit','getStop','deleteCvWorksItemsById')));
	}

	public function getListIndex(){
		$modules  = Module::with('submodules')->get();
		$cv_works = CvArtist::getAllCvWorksItems();
		return View::make('admin.cv_artist.index_cv')
		->with('active', 'home')
		->with('modules',$modules)
		->with('activeModule','a')
		->with('activeSubmodule','a5')
		->with('cv_works',$cv_works);
	}

	public function getFormCreate(){
		$modules  = Module::with('submodules')->get();
		return View::make('admin.cv_artist.create_cv_works')
		->with('modules',$modules)
		->with('activeModule','a')
		->with('activeSubmodule','a5');
	}

	public function getEdit($id = null){
		if($id){
			$coupon = Coupons::getCouponById($id);
		}
		$modules  = Module::with('submodules')->get();
		return View::make('admin.coupons.update_coupons')
		->with('modules',$modules)
		->with('coupon',$coupon)
		->with('activeModule','a')
		->with('activeSubmodule','a5');
	}

	/*Desactivar Cupón*/
	public function getStop($id = null) {
		if($id){
			$stop = Coupons::find($id);
			$stop->status = 0;	/*disable*/
			$stop->save();
		}
		return Redirect::back();
	}

	public function deleteCvWorksItemsById($id=null) {
		$data = [
			'id_cv_artist_detail' => Input::get('id_cv_artist_detail')
		];
		print_r($data);

		$data = (object)$data;
		$cv_item_detail = new CvArtistDetail();
		$cv_works_detail = $cv_works_detail->deleteCvWorksItemDetail($data);
		return Redirect::back();
	}

	public function postCvWorksItems(){
		// if(Request::ajax()){
		try {
			
			$data = [
				'year_event' => strip_tags(trim(Input::get('year_event'))),
				'name' => strip_tags(trim(Input::get('name'))),
				'description' => strip_tags(trim(Input::get('description')))
			];

			$rules = [
				'year_event' => 'required',
				'name' => 'required|max:200',
				'description' => 'required|max:250'
			];

			$validator = Validator::make($data, $rules);
			if($validator->passes()){
				$data = (object)$data;
				$cv_works = new CvArtist();
				$cv_works_detail = new CvArtistDetail();
				// $addCvWorksItem = $cv_works->createCvWorksItems($data);
				// $data->id_cv_artist = $addCvWorksItem->id_cv_artist;
				// if($addCvWorksItem){
					// $addCvWorksItem->id_cv_artist = $data->id_cv_artist;
					// $data = $addCvWorksItem;
					$cv_works_detail = $cv_works_detail->createCvWorksItemsDetail($data);
					return Response::json(array('msg'=>'Trabajo añadido','error'=>0));
				// }
			}else{
				if($validator->messages()->has('year_event'))
					$errorField = 'Año: '.$validator->messages()->first('year_event');
				else if($validator->messages()->has('name'))
					$errorField = 'Nombre: '.$validator->messages()->first('name');
				else if($validator->messages()->has('description'))
					$errorField = 'Descripción: '.$validator->messages()->first('description');
				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
		} catch (Exception $e) {
			return Response::json(array('msg'=>'Ha ocurrido un error inesperado - ','error'=>$e->getMessage()));
		}
		// }
	}

	public function postUpdateCoupon(){
		if(Request::ajax()){
			$data = [
				'id' 			=> strip_tags(trim(Input::get('idCoupon'))),
				'name' 			=> strip_tags(trim(Input::get('name'))),
				'code' 			=> strip_tags(trim(Input::get('code'))),
				'discount' 		=> strip_tags(trim(Input::get('discount'))),
				'startDate' 	=> strip_tags(trim(Input::get('startDate'))),
				'endDate' 		=> strip_tags(trim(Input::get('endDate')))
			];
			$rules = [
				'id' 			=> 'required|integer',
				'name' 			=> 'required|max:45',
				'code' 			=> 'required|max:45',
				'discount' 		=> 'required|integer|between:1,99',
				'startDate'		=> 'required|date_format:"d-m-Y"',
				'endDate' 		=> 'required|date_format:"d-m-Y"'
			];
			$validator = Validator::make($data,$rules);
			if( $validator->passes() ){
				$data = (object)$data;
				$data->startDate = date("Y-m-d", strtotime($data->startDate)); /*Convert Date*/
				$data->endDate = date("Y-m-d", strtotime($data->endDate)); /*Convert Date*/				
				$data->discount = ($data->discount / 100);
				$coupon = new Coupons;
				$addCoupon = $coupon->updateCoupon($data);
				if($addCoupon){
					return Response::json(array('msg'=>'Cupón actualizado','error'=>0));
				}
			}else{
				if($validator->messages()->has('id'))
					$errorField = 'Por favor reinicie el navegador y vuelva a intentar';				
				else if($validator->messages()->has('name'))
					$errorField = 'Nombre: '.$validator->messages()->first('name');
				else if($validator->messages()->has('code'))
					$errorField = 'Código: '.$validator->messages()->first('code');
				else if($validator->messages()->has('discount'))
					$errorField = 'Descuento: '.$validator->messages()->first('discount');				
				else if($validator->messages()->has('startDate'))
					$errorField = 'Fecha de inicio: '.$validator->messages()->first('startDate');
				else if($validator->messages()->has('endDate'))
					$errorField = 'Fecha final: '.$validator->messages()->first('endDate');
				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
		}
	}


}
