<?php
/**
* 
*/

class Submodule extends Eloquent
{

	protected $table = "submodule";
	public $timestamps = false;
	protected $SoftDelete = false;

	function modules(){	
	    return $this->belongsTo('Module');
	}


}