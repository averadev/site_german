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

	function cvdetail() {	
		return $this->hasMany('CvArtistDetail','id_cv_artist','id_cv_artist_detail');
	}

	function cvdetailItems(){
		return $this->hasMany('CvArtistDetail', 'id_cv_artist')->select('id_cv_artist','id_cv_artist_detail',DB::raw('case when length(description) > 60 then 
concat(substring(description,1,50), "...") else description end as description_short'))->where('status_cv', 1);
	}

	function cv_artis_detail() {	
		return $this->hasMany('CvArtistDetail','id_cv_artist','id_cv_artist_detail');
	}

	public static function getCVWorksItems($id) {
		$query = CvArtist::Select('cv_d.id_cv_artist', 'cv_d.id_cv_artist_detail', 'cv_d.name', 'cv_d.description', 'cv_d.filename', 'cv_artist.status_cv')
		->join('cv_artist_detail as cv_d', 'cv_d.id_cv_artist', '=', 'cv_artist.id_cv_artist')
		->where('cv_d.id_cv_artist_detail', $id)
		->where('cv_artist.status_cv', 1)
		->orderBy('cv_artist.year_event', 'asc')
		->get();
		return $query;
	}

	public static function getAllCvWorksItems() {
		$query = CvArtist::Select('cv_d.id_cv_artist', 'cv_d.id_cv_artist_detail', 'cv_artist.year_event', 'cv_d.name', 'cv_d.description', 'cv_d.filename', 'cv_d.created_at', 'cv_artist.status_cv', 'cv_d.status_cv as status_item')
		->join('cv_artist_detail as cv_d', 'cv_d.id_cv_artist', '=', 'cv_artist.id_cv_artist')
		->where('cv_artist.status_cv', 1)
		->orderBy('cv_artist.year_event', 'desc')
		->get();
		return $query;
	}

	public function createCvWorksItems($data) {
		$this->year_event = $data->year_event;
		$this->created_at = date("Y-m-d H:i:s");
		$this->status_cv = 1;
		if($this->save()){
			return true;
		}
		return false;
	}

}