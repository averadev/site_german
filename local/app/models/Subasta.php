<?php
/**
* 
*/

class Subasta extends Eloquent
{

	protected $table = "subasta";
	public $timestamps = false;
	protected $SoftDelete = false;

	function images() {	
		return $this->hasMany('Images','subasta_id','id');
	}
	public static function getImages(){

		$datos = DB::table('subasta')
		->select('images.filename as name')
		->leftJoin('images', 'images.subasta_id', '=', 'subasta.id')
		->where('subasta.status', '=', 1)
		->get();

		return $datos;
	}

	public static function getBids(){
		$bids = DB::table('subasta')
			->select('user.name as name','user.nickname as nick',DB::raw("UNIX_TIMESTAMP(created) as startDate, FORMAT(pujas.cantidad,0) as amount"))
			->where('subasta.status',1)
			->where('pujas.status',1)
			->where('user.status',1)
			->join('subasta_puja as pujas','subasta.id', '=', 'pujas.subasta_id')
			->join('subasta_user as user','user.id', '=', 'pujas.subasta_user_id')
			->orderBy('pujas.created','DESC')
			->get();
		return $bids;
	}

	public static function getActiveAuction(){
		$auction = DB::table('subasta')
				->where('status',1)
				->first();
		return $auction;
	}
}