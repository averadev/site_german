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
		return $this->belongsTo('Obra');
	}

}