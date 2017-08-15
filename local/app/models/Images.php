<?php
/**
* 
*/

class Images extends Eloquent
{

	/*
		Type 1: Normal images
		Type 2: Panorama images
	*/

	protected $table = "images";
	public $timestamps = false;
	protected $SoftDelete = false;

	function subastas(){
		return $this->belongsTo('Obra');
	}

	public static function getPanoramaImagesByAuctionID($id){
		return Images::Select('id','filename as filename','number as number')
			->where('subasta_id',$id)
			->where('type',2)
			->orderBy('number','ASC')
			->get();
	}

	public static function getPanoramaImagesByAuction($id){
		return Images::Select('filename as filename','number as number')
			->where('subasta_id',$id)
			->where('type',2)
			->orderBy('number','ASC')
			->get();
	}

	public static function getSculpturesOnSaleImages(){
		return Obra::Select('images.filename','obra_lang.name', 'obra_lang.slug', 'obra_lang.detail')
					->join('obra_lang','obra.id', '=', 'obra_lang.subasta_id')
					->join('images','obra.id', '=', 'images.subasta_id')
					->where('obra.status',101)
					->where('obra_lang.language_id',1)
					->whereNull('images.number')
					->groupBy('obra.id')
					->get();
	}

	public static function getSalesAuctionImagesByAuctionID($id){
		return Images::Select('id','filename as filename','number as number')
			->where('subasta_id',$id)
			->where('type',1)
			->get();	
	}

	public function sortAuctionImage($id,$number){
		$response = $this->find($id);
		$response->number = $number;
		if($response->save()){
			return true;
		}
		return false;
	}

	public function addImage($data){
		$this->filename 	= $data->name;
		$this->subasta_id 	= $data->idAuction;
		$this->type 		= 1;
		if($this->save()){
			return true;
		}
		return false;
	}

	public function addPanoramaImage($data){
		$this->filename 	= $data->name;
		$this->subasta_id 	= $data->idAuction;
		$this->type 		= 2;
		if($this->save()){
			return true;
		}
		return false;
	}

	public static function getSculpturesOnSaleImages_Detail($id){
		$query = Obra::Select('images.filename', 'obra_lang.subasta_id', 'obra_lang.name', 'obra_lang.slug', 'obra_lang.detail')
					->join('obra_lang','obra.id', '=', 'obra_lang.subasta_id')
					->join('images','obra.id', '=', 'images.subasta_id')
					->where('obra_lang.subasta_id', $id)
					->where('obra.status',101)
					->where('obra_lang.language_id',1)
					->whereNull('images.number')
					->groupBy('obra.id')
					->get();
		return $query;
	}

}