<?php
/**
* 
*/

class Auction_user extends Eloquent
{

	protected $table = "subasta_user";
	public $timestamps = false;
	protected $SoftDelete = false;

	public static function isActive($email)
	{
		$data = DB::table('subasta_user')
		->where('email', $email)
		->first();
		
		return $data;
	}

}