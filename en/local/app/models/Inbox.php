<?php
/**
* 
*/

class Inbox extends Eloquent
{

	protected $table = "inbox";
	public $timestamps = false;
	protected $SoftDelete = false;
	
	function emails(){	
		return $this->belongsTo('Email','email_id');
	}

	/*
		email_id
		"1"	"Newsletter"
		"2"	"Proximamente"
		"3"	"Monumental"
		"4"	"Personalizadas"
		"5"	"Interiores"
		"6"	"Contacto"
	*/

	public function addEmail($data)
	{
		$this->email_id		= $data->email_id;
		$this->name 		= $data->name;
		$this->email 		= $data->email;
		$this->city 		= isset($data->city) ? $data->city : NULL;
		$this->company 		= isset($data->company) ? $data->company : NULL;
		$this->appointment 	= isset($data->date) ? $data->date : NULL;
		$this->subject 		= isset($data->subject) ? $data->subject : NULL;
		$this->comment 		= isset($data->comment) ? $data->comment : NULL;
		if($this->save()){
			return true;
		}
			return false;
	}



}