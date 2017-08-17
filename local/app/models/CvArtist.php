<?php
/**
* 
*/

class CvArtist extends Eloquent
{
	protected $table = "cv_artist";
	protected $primaryKey = "id_cv_artist";
	public $timestamps = false;
	protected $SoftDelete = false;

	function cvdetailItems(){
		return $this->hasMany('CvArtistDetail', 'id_cv_artist');
	}

}