<?php
/**
* 
*/

class Section extends Eloquent
{

	protected $table = "section";
	public $timestamps = false;
	protected $SoftDelete = false;

	function components() {	
		return $this->hasMany('Component','idSection','id');
	}


}