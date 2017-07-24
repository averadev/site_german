<?php
/**
* 
*/

class Email extends Eloquent
{

	protected $table = "email";
	public $timestamps = false;
	protected $SoftDelete = false;
	
	function inbox() {	
		return $this->hasMany('Email','email_id','id');
	}


}