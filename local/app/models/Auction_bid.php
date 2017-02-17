<?php
/**
* 
*/

class Auction_bid extends Eloquent
{

	protected $table = "subasta_puja";
	public $timestamps = false;
	protected $SoftDelete = false;

	public static function getHighestBid($id_auction){
		$data = DB::table('subasta_puja')
				->select('cantidad as amount')
				->where('subasta_id',$id_auction)
				->orderBy('cantidad','DESC')
				->first();
		return $data;
	}

	public function addBid($data,$id_auction,$id_user)
	{
		$this->cantidad 		= $data->amount;
		$this->comment 			= $data->comment;
		$this->subasta_id 		= $id_auction;
		$this->subasta_user_id 	= $id_user;
		if($this->save()){
			return $this->id;
		}
			return false;
	}



}