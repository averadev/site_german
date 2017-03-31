<?php
/**
* 
*/

class Auction_user extends Eloquent
{

	protected $table = "subasta_user";
	protected $SoftDelete = false;

	function userbids() {	
		return $this->hasMany('Auction_bid','subasta_user_id','id');
	}

	public function addAuctionUser($data){
		$code = str_random(30);

		$this->name 				= $data->name;
		$this->nickname 			= $data->nickname;
		$this->email 				= $data->email;
		$this->confirmation_code 	= $code;
		if($this->save()){
			return $this;
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

	public static function checkNickName($nickname,$id){
		$nick = DB::table('subasta_user')
		->where('nickname', $nickname)
		->where('id','!=',$id)
		->first();
		if ($nick) {
			return true;
		}else{
			return false;
		}
	}

}