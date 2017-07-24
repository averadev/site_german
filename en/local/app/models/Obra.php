<?php
/**
* 
*/

class Obra extends Eloquent
{

	protected $table = "obra";
	public $timestamps = false;
	protected $SoftDelete = false;

	function images() {	
		return $this->hasMany('Images','subasta_id','id');
	}
	function bids() {
		return $this->hasMany('Auction_bid','subasta_id','id');
	}
	function languages() {	
		return $this->hasMany('Obra_lang','subasta_id','id');
	}	

	public static function getImages(){

		$datos = DB::table('obra')
		->select('images.filename as name')
		->leftJoin('images', 'images.subasta_id', '=', 'obra.id')
		->where('obra.status', '=', 1)
		->get();

		return $datos;
	}

	public static function getBids(){
		$bids = DB::table('obra')
			->select('user.name as name',
				'user.nickname as nick',
				DB::raw("FORMAT(pujas.cantidad,0) as amount,
					MONTH(created) as monthDate,
					Day(created) as dayDate,
					TIMESTAMPDIFF(HOUR, created, NOW()) AS hourAgo"
			))
			->where('obra.status',1)
			->where('pujas.status',1)
			->where('user.status',1)
			->join('subasta_puja as pujas','obra.id', '=', 'pujas.subasta_id')
			->join('subasta_user as user','user.id', '=', 'pujas.subasta_user_id')
			->orderBy('pujas.created','DESC')
			->get();
		return $bids;
	}

	public static function getActiveAuction(){
		$auction = DB::table('obra')
				->where('status',1)
				->first();
		return $auction;
	}

	public static function getActiveAuctionDetails(){
		$auction = Obra::select('id',DB::raw("DATE_FORMAT(endDate, '%Y-%m-%d') as endDate"))
		->where('status',1)
		->with(array('languages'=>function($query){
			$query->where('language_id','=',2);
		}))
		->with('images')->first();
		return $auction;
	}

	public static function getNextAuction(){
		/**
		 * query to the table subasta | extract Day, Month, Year and name of the month | Fecha proxima subasta afectuar
		 */	
		$data = DB::table('obra as s')
		->select('s.iniDate as FechaProximaSubasta', DB::raw('SUBSTRING(s.iniDate, 9,2) as Dia'), DB::raw('SUBSTRING(s.iniDate, 6,2) AS Mes'), DB::raw('SUBSTRING(s.iniDate, 1,4) AS Anio'), DB::raw('CASE WHEN MONTH(s.iniDate) = 1 THEN "January" 
					WHEN MONTH(s.iniDate) = 2 THEN "February" 
					WHEN MONTH(s.iniDate) = 3 THEN "March" 
					WHEN MONTH(s.iniDate) = 4 THEN "April" 
					WHEN MONTH(s.iniDate) = 5 THEN "May" 
					WHEN MONTH(s.iniDate) = 6 THEN "June" 
					WHEN MONTH(s.iniDate) = 7 THEN "July" 
					WHEN MONTH(s.iniDate) = 8 THEN "August" 
					WHEN MONTH(s.iniDate) = 9 THEN "September" 
					WHEN MONTH(s.iniDate) = 10 THEN "October" 
					WHEN MONTH(s.iniDate) = 11 THEN "November" 
					WHEN MONTH(s.iniDate) = 12 THEN "December" 
					ELSE "" 
				END AS NombreMes'), DB::raw('CASE WHEN s.status = 0 THEN "Inactivo" ELSE 
											CASE WHEN s.status = 1 THEN "Activo" ELSE 
												CASE WHEN s.status = 2 THEN "Proxima Subasta"
												END 
											END 
										END AS StatusOferta'))
		->where('s.status', '=', 2)
		->orderBy('s.iniDate', 'desc')
		->get();

		return $data;
	}
}