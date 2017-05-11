<?php
/**
* 
*/

class Images extends Eloquent
{

	protected $table = "images";
	public $timestamps = false;
	protected $SoftDelete = false;

	function subastas(){
		return $this->belongsTo('Subasta');
	}

	public function addImage($data){
		$this->filename 	= $data->name;
		$this->subasta_id 	= $data->idAuction;
		if($this->save()){
			return true;
		}
		return false;
	}

}