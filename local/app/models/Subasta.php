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
}