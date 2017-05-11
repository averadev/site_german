<?php
/**
* 
*/

class Module extends Eloquent
{

	protected $table = "module";
	public $timestamps = false;
	protected $SoftDelete = false;

	function submodules() {	
		return $this->hasMany('Submodule','idModule','id');
	}


}