<?php
/**
* 
*/

class Obra_lang extends Eloquent
{

	protected $table = "obra_lang";
	public $timestamps = false;
	protected $SoftDelete = false;

	function subasta(){
		return $this->belongsTo('Obra','subasta_id');
	}

}