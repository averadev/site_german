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

}