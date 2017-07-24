<?php
/**
* 
Status
0: cupón inactivo
1: cupón activo
*/

class Coupons extends Eloquent
{

	protected $table = "coupons";

	public static function getAllCoupons(){
		return	Coupons::Select('id',
					'name',
					'code',
					'discount',
					'status',
					DB::raw("DATE_FORMAT(startDate, '%d-%m-%Y') as startDate,
					DATE_FORMAT(endDate, '%d-%m-%Y') as endDate"));

	}

	public static function getCouponById($id){
		return Coupons::Select('id',
					'name',
					'code',
					'discount',
					DB::raw("DATE_FORMAT(startDate, '%d-%m-%Y') as startDate,
					DATE_FORMAT(endDate, '%d-%m-%Y') as endDate"))
		->Where('id',$id)->firstOrFail();
	}

	public function storeCoupon($data){

		$this->name			= $data->name;
		$this->code			= $data->code;
		$this->discount		= $data->discount;
		$this->startDate	= $data->startDate;
		$this->endDate		= $data->endDate;
		$this->status		= 0;
		if($this->save()){
			return true;
		}
	}


	public function updateCoupon($data){
		$response = $this->find($data->id);

		$response->name			= $data->name;
		$response->code			= $data->code;
		$response->discount		= $data->discount;
		$response->startDate	= $data->startDate;
		$response->endDate		= $data->endDate;

		if($response->save()){
			return true;
		}		
	}
	

}