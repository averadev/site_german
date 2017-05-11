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

		$this->email 				= $data->email;
		$this->card_number			= $data->cardnumber;
		$this->card_type			= $data->card_type;
		$this->confirmation_code 	= $code;
		if($this->save()){
			return $this->confirmation_code;
		}
			return false;
		
	}

	public static function isUser($email)
	{
		$data = DB::table('subasta_user')
		->where('email', $email)
		->first();
		
		return $data;
	}

	public static function isActive($email)
	{
		$data = DB::table('subasta_user')
		->where('email', $email)
		->where('status',1)
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