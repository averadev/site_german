<?php
/**
* 
*/

class Auction_bid extends Eloquent
{

	protected $table = "subasta_puja";
	public $timestamps = false;
	protected $SoftDelete = false;

	function subastas(){
		return $this->belongsTo('Obra');
	}

	function auctionusers(){
		return $this->belongsTo('Auction_user');
	}

	public static function getBids($id){
	$data = Auction_bid::select(
		'cantidad'
		,DB::raw("FORMAT(cantidad, 2, 'en_GB') as cantidad2")
		,'comment'
		,'created'
		,'user.name as name'
		,DB::raw("date_format((created),'%d-%m-%Y %H:%i') as biddate"))
		->where('subasta_puja.status',1)
		->where('Obra.id',$id)
		->join('subasta_user as user','user.id', '=', 'subasta_puja.subasta_user_id')
		->join('Obra as Obra','Obra.id','=','subasta_puja.subasta_id')
		->orderBy('created','DESC')
		->paginate(10);
	return $data;
	}

	public static function getHighestBid($id_auction){
		$data = DB::table('subasta_puja')
				->select('cantidad as amount','subasta_user_id as user_id')
				->where('subasta_id',$id_auction)
				->where('status',1)
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
		$this->status 			= $active;
		if($this->save()){
			return true;
		}
			return false;
	}



}