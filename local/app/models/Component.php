<?php
/**
* 
*/

class Component extends Eloquent
{

	protected $table = "xref_section_component";
	public $timestamps = false;
	protected $SoftDelete = false;

	function sections(){	
	    return $this->belongsTo('Section');
	}


}