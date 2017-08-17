<?php
/**
* 
*/

class CvArtistDetail extends Eloquent
{
	protected $table = "cv_artist_detail";
	protected $primaryKey = "id_cv_artist_detail";
	public $timestamps = false;
	protected $SoftDelete = false;

	function cvartist(){
		return $this->belongsTo('CvArtist');
	}

}