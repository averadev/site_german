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

	public static function getCVWorksItems($id) {
		$query = CvArtist::Select('cv_d.id_cv_artist', 'cv_d.id_cv_artist_detail', 'cv_d.name', 'cv_d.description', 'cv_d.filename', 'cv_artist.status_cv')
		->where('cv_d.id_cv_artist_detail', $id)
		->join('cv_artist_detail as cv_d', 'cv_d.id_cv_artist', '=', 'cv_artist.id_cv_artist')
		->where('cv_artist.status_cv', 1)
		->orderBy('cv_artist.year_event', 'asc')
		->get();
		return $query;
	}

}