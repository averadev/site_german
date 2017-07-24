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
use Coupons;

class CouponsController extends BaseController {
	function __construct(){
		$this->beforeFilter('auth.admin_user');
		$this->beforeFilter('csrf',array('except'=>array('getIndex','getCreate','getEdit','getActive','getStop')));
	}

	public function getIndex(){
		$modules  = Module::with('submodules')->get();
		$coupons = Coupons::getAllCoupons()->paginate(10);
		return View::make('admin.coupons.index_coupons')
		->with('active', 'home')
		->with('modules',$modules)
		->with('activeModule','a')
		->with('activeSubmodule','a5')
		->with('coupons',$coupons);
	}

	public function getCreate(){
		$modules  = Module::with('submodules')->get();
		return View::make('admin.coupons.create_coupons')
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

	/*Activar Cupón*/
	public function getActive($id = null) {
		if($id){
			$active = Coupons::find($id);
			$active->status = 1;	/*enable*/
			$active->save();
		}
		return Redirect::back();
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

	public function postSaveCoupon(){
		if(Request::ajax()){
			$data = [
				'name' 			=> strip_tags(trim(Input::get('name'))),
				'code' 			=> strip_tags(trim(Input::get('code'))),
				'discount' 		=> strip_tags(trim(Input::get('discount'))),
				'startDate' 	=> strip_tags(trim(Input::get('startDate'))),
				'endDate' 		=> strip_tags(trim(Input::get('endDate')))
			];
			$rules = [
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
				$addCoupon = $coupon->storeCoupon($data);
				if($addCoupon){
					return Response::json(array('msg'=>'Cupón añadido','error'=>0));
				}				
			}else{
				if($validator->messages()->has('name'))
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
