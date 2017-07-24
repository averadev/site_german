<?php
/**
* 
*/

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Auction_user extends Eloquent implements UserInterface, RemindableInterface
{
	use UserTrait, RemindableTrait;

	protected $table = "subasta_user";
	protected $SoftDelete = false;

	function userbids() {	
		return $this->hasMany('Auction_bid','subasta_user_id','id');
	}

	public static function isUser($email)
	{
		$data = DB::table('subasta_user')
		->where('email', $email)
		->first();
		
		return $data;
	}

	public static function repeatedNickname($nickname)
	{
		$data = DB::table('subasta_user')
		->where('nickname', $nickname)
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

	/*Registrar un nuevo usuario*/
	public function addAuctionUser($data){
		$code = str_random(30);

		$this->name					= $data->name;
		$this->nickname				= $data->nickname;
		$this->email 				= $data->email;
		$this->password 			= Hash::make($data->password);
		$this->card_number			= $data->cardnumber;
		$this->card_type			= $data->card_type;
		$this->confirmation_code 	= $code;
		if($this->save()){
			return $this->confirmation_code;
		}
			return false;
		
	}	

}