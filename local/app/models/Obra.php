<?php
/**
	Modelo para las obras en venta y en subasta
		0 subasta finalizada
		1 subasta activa 
		2 proxima subasta
		100 producto vendido
		101 producto activo
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

	public static function getBids($userid = null){
		$bids = DB::table('obra')
			->select('user.name as name',
				'user.nickname as nick',
				DB::raw("FORMAT(pujas.cantidad,0) as amount,
					MONTH(created) as monthDate,
					Day(created) as dayDate,
					TIMESTAMPDIFF(HOUR, created, NOW()) AS hourAgo"
			))
			->join('subasta_puja as pujas','obra.id', '=', 'pujas.subasta_id')
			->join('subasta_user as user','user.id', '=', 'pujas.subasta_user_id')
			->where('obra.status',1)
			->where('pujas.status',1)
			->where('user.status',1);
			if($userid){
				$bids = $bids->where('user.id',$userid);
			}
			$bids = $bids->orderBy('pujas.created','DESC')
			->get();
		return $bids;
	}

	public static function getUserBids(){
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
			->where('user.id',Auth::auct_user()->get()->id)
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
			$query->where('language_id','=',1);
		}))
		->with(array('images'=>function($query){
			$query->where('type','=',1);
		}))->first();
		return $auction;
	}

	public static function getCurrentAuctionDetail(){
	$obra =	Obra::select('id')->where('status',1)
			->with(array('languages'=>function($query){
				$query->where('language_id','=',1);
			}))->first();
		return $obra;
	}

	public static function getNextAuction(){
		/**
		 * query to the table subasta | extract Day, Month, Year and name of the month | Fecha proxima subasta afectuar
		 */	
		$data = DB::table('obra as s')
		->select('s.iniDate as FechaProximaSubasta', DB::raw('SUBSTRING(s.iniDate, 9,2) as Dia'), DB::raw('SUBSTRING(s.iniDate, 6,2) AS Mes'), DB::raw('SUBSTRING(s.iniDate, 1,4) AS Anio'), DB::raw('CASE WHEN MONTH(s.iniDate) = 1 THEN "Enero" 
					WHEN MONTH(s.iniDate) = 2 THEN "Febrero" 
					WHEN MONTH(s.iniDate) = 3 THEN "Marzo" 
					WHEN MONTH(s.iniDate) = 4 THEN "Abril" 
					WHEN MONTH(s.iniDate) = 5 THEN "Mayo" 
					WHEN MONTH(s.iniDate) = 6 THEN "Junio" 
					WHEN MONTH(s.iniDate) = 7 THEN "Julio" 
					WHEN MONTH(s.iniDate) = 8 THEN "Agosto" 
					WHEN MONTH(s.iniDate) = 9 THEN "Septiembre" 
					WHEN MONTH(s.iniDate) = 10 THEN "Octubre" 
					WHEN MONTH(s.iniDate) = 11 THEN "Noviembre" 
					WHEN MONTH(s.iniDate) = 12 THEN "Diciembre" 
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

	public static function getSalesGallery(){
		$sales  = Obra::select(
			'id',
			'status',
			DB::raw("CONCAT('$', FORMAT(price, 2)) as price"))
		->with(array('languages'=>function($query){
			$query->where('language_id','=',1);
		}))->where('status',101)	//producto activo
		->orderBy('id','DESC')
		->with('images')->get();
		return $sales;
	}

	public static function getPrice($idObra){
		$data = Obra::select(DB::raw("CONCAT('$', FORMAT(price, 2)) as price"))
			->where('id',$idObra)
			->where('status',101)
			->get()->first();
		return $data;
	}


	/*Setters*/
	/*AUCTION*/

	public function storeAuction($data){
		$this->iniDate	= $data->startDate;
		$this->endDate	= $data->endDate;
		$this->status 	= 0;
		if($this->save()){
			return $this;
		}
		return false;		
	}

	public function updateAuction($data){
		$response = $this->find($data->idAuction);
		$response->iniDate	= $data->startDate;
		$response->endDate	= $data->endDate;
		if($response->save()){
			return true;
		}
		return false;		
	}

	/*SALES*/
	public function storeSale($data){
		$this->iniDate	= null;
		$this->endDate	= null;
		$this->price	= $data->price;
		$this->status 	= 100;
		if($this->save()){
			return $this;
		}
		return false;
	}

	public function updateSale($data){
		$response = $this->find($data->idAuction);
		$response->price	= $data->price;
		if($response->save()){
			return $this;
		}
		return false;
	}	

	/**
	 * Works active - status 101
	 */

	public static function getWorksActive()
	{
		$data = DB::table("obra as works")
		->select("works.id as worksId", "works.status as status", "works.price as price", "obra_lang.name as name", "obra_lang.slug as slug", "obra_lang.detail as detail", "images.filename as filename")
		->join("obra_lang as obra_lang", "obra_lang.subasta_id", "=", "works.id")
		->join("images as images", "images.subasta_id", "=", "obra_lang.subasta_id")
		->where("works.status", 101)
		->where("images.type", 1)
		->orderBy("obra_lang.name")
		->get();
		return $data;
	}

}