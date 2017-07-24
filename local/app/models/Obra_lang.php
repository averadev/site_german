<?php
/**
* 
*/
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Obra_lang extends Eloquent implements SluggableInterface
{

	use SluggableTrait;

	protected $sluggable = array(
		'build_from' => 'name',
		'save_to'    => 'slug',
	);

	protected $table = "obra_lang";
	public $timestamps = false;
	protected $SoftDelete = false;

	function subasta(){
		return $this->belongsTo('Obra','subasta_id');
	}

	public function saveObraLang($data){
		$auctionDetail = Obra_lang::where('subasta_id',$data->idAuction)
					->where('language_id',Session::get('lang'))
					->get();
		if(count($auctionDetail)>0){
			$auctionDetail = $auctionDetail->first();
			$auctionDetail->name 	= $data->name;
			$auctionDetail->detail 	= $data->description;			
		}else{
			$auctionDetail = $this;
			$auctionDetail->subasta_id		= $data->idAuction;
			$auctionDetail->language_id		= Session::get('lang');
			$auctionDetail->name			= $data->name;
			$auctionDetail->detail			= $data->description;
		}

		if ($auctionDetail->save()){
			return true;
		}
		return false;
	}
}