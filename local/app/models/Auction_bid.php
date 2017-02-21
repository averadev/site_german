<?php
/**
* 
*/

class Auction_bid extends Eloquent
{

	const CREATED_AT = 'created';
	const UPDATED_AT = null;
	protected $table = "subasta_puja";
	public $timestamps = true;
	protected $SoftDelete = false;

	public static function getHighestBid($id_auction){
		$data = DB::table('subasta_puja')
				->select('cantidad as amount','subasta_user_id as user_id')
				->where('subasta_id',$id_auction)
				->orderBy('cantidad','DESC')
				->first();
		return $data;
	}

	public function addBid($data,$id_auction,$id_user,$active)
	{
		$this->cantidad 		= $data->amount;
		$this->comment 			= $data->comment;
		$this->subasta_id 		= $id_auction;
		$this->subasta_user_id 	= $id_user;
		$this->status 			= 1;
		if($this->save()){
			return true;
		}
			return false;
	}



}