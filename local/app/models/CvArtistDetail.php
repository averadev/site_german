<?php
/**
* 
*/

class CvArtistDetail extends Eloquent
{
	protected $table = "cv_artist_detail";
	protected $primaryKey = "id_cv_artist_detail";
	protected $fillable = array('id_cv_artist', 'name', 'description', 'status_cv', 'created_at', 'modified_by');
	public $timestamps = false;
	protected $SoftDelete = false;

	function cvartist(){
		return $this->belongsTo('CvArtist', 'id_cv_artist');
	}

	public function createCvWorksItemsDetail($data) {
			// $cv_item_detail = CvArtistDetail::where('id_cv_artist_detail', $data->id_cv_artist)->get();
			// if (count($cv_item_detail) >0) {
				// $cv_item_detail = $cv_item_detail->first();
				$this->id_cv_artist = 1;
				$this->name = $data->name;
				$this->description = $data->description;
				// $this->filename = $data->filename;
				$this->status_cv = 1;
				$this->created_at = date("Y-m-d H:i:s");
			// }

			if ($this->save()) {
				return true;
			}
			return false;
	}

	/**
	 * Function deleteCvWorksItemDetail
	 */
	public function deleteCvWorksItemDetail($data) {
		$response = $this->find($data->id_cv_artist_detail);
		$response->status_cv = 0;
		$response->updatet_at = date("Y-m-d H:i:s");
		$response->modified_by = "User Generic";

		if ($response->save()) {
			return true;
		}
		return false;
	}

}