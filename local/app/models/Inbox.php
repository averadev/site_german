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

	public static function getEmails(){
		$emails = Inbox::select(
			'id',
			'email_id',
			'name',
			'email',
			'city',
			'company',
			'subject',
			'comment',
			'status',
			'contactby',
			DB::raw("DATE_FORMAT(created, '%d-%m-%Y %h:%i %p') as created"),
			DB::raw("DATE_FORMAT(contactdate, '%d-%m-%Y') as contactdate"),
			DB::raw("DATE_FORMAT(appointment, '%d-%m-%Y') as appointment"))
		->with('emails')
		->OrderBy('created','desc')
		->paginate(10);

		return $emails;
	}

	public static function getEmailsByStatus($status){
		$emails = Inbox::select(
			'id',
			'email_id',
			'name',
			'email',
			'city',
			'company',
			'subject',
			'comment',
			'status',
			'contactby',
			DB::raw("DATE_FORMAT(created, '%d-%m-%Y %h:%i %p') as created"),
			DB::raw("DATE_FORMAT(contactdate, '%d-%m-%Y') as contactdate"),
			DB::raw("DATE_FORMAT(appointment, '%d-%m-%Y') as appointment"))
		->with('emails')
		->where('status',$status)
		->OrderBy('created','desc')
		->paginate(10);

		return $emails;
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
		$this->status 		= 0;
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

	public function upContactEmail($data){
		$response = $this->find($data->idemail);
		$response->status 		= 1;
		$response->contactby 	= $data->contactname;
		$response->contactdate 	= $data->contactdate;

		if($response->save()){
			return true;
		}

	}



}