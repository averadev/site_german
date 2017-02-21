<?php
/**
* 
*/

class Auction_user extends Eloquent
{

	protected $table = "subasta_user";
	public $timestamps = false;
	protected $SoftDelete = false;

	public function addAuctionUser($data){
		$code = str_random(30);

		$this->name 				= $data->name;
		$this->nickname 			= $data->nickname;
		$this->email 				= $data->email;
		$this->confirmation_code 	= $code;
		if($this->save()){
			return $code;
		}
			return false;
		
	}

	public static function isActive($email)
	{
		$data = DB::table('subasta_user')
		->where('email', $email)
		->first();
		
		return $data;
	}

}