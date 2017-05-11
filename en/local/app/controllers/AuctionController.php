<?php 

//use Mail;
//use Storage;
use Carbon\Carbon;

class AuctionController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para el modulo de subastas.
	|--------------------------------------------------------------------------
	|
	*/

	// public function getIndex(){
	// 	return View::make('subasta');
	// }

	/**
	 * Function showSubmodule
	 */
	public function showSubmodule () {
		$submodule = DB::table('module', 'module.id', 'module.name')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->where('module.id', '=', 2)
		->get();
        return View::make('subasta', array('submodule' => $submodule));
    }

    /**
     * Function getSubmodule --> Muestra los submodulos del modulo subasta
     */
    public function getSubmodule () {
    	$submodule = DB::table('module', 'module.id', 'module.name')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->where('module.id', '=', 2)
		->get();
        return View::make('subasta', array('submodule' => $submodule));
    }

    /**
     * Function getSectionSubmodule --> Muestra las secciones del submodulo
     */
    public function getSectionSubmodule ($id) {
    	$section_submodule = DB::table('module')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->join('section', 'section.idSubmodule', '=', 'submodule.id')
		->join('xref_section_component', 'section.id', '=', 'xref_section_component.idSection')
		->where('module.id', '=', 2)
		->where('section.idSubmodule', '=', $id)
		->get();
        return View::make('subasta', array('section_submodule' => $section_submodule));
    }

    /**
     * Function getSectionSubPQ --> Muestra las secciones del submodulo Por Que
     */
    public function getSectionSubPQ () {
    	// objeto vacio
    	$submodule_section_data = new stdClass();
    	//$comments_data = new stdClass();
		
    	$submodule_section = DB::table('module')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->join('section', 'section.idSubmodule', '=', 'submodule.id')
		->join('xref_section_component', 'section.id', '=', 'xref_section_component.idSection')
		->where('module.id', '=', 2)
		->get();

		/**
		 * query to the table subasta | extract Day, Month, Year and name of the month | Fecha proxima subasta afectuar
		 */
		$date_coming = DB::table('subasta as s')
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

		/**
		 * Date Current
		 */
		Carbon::setLocale('es');
		$now = Carbon::now(new DateTimeZone('America/Mexico_City'));
		$date = $now;
		// $hour toTimeString('H:i:s') = (12:00:00)
		$hour = $now->toTimeString();
		//$date=$now->format('l jS \\of F Y h:i:s');
		
		foreach ($submodule_section as $key => $value) {
			$submodule_section_data->{$value->name} = TextParser::change(nl2br($value->value));
		}
		/*
			Datos Subasta
		*/
			$CurrentAuctionPics = Subasta::getImages();

		/* Mostrar los comentarios de la subasta activa */	
		$comments = Comments::getComments();


        return View::make('subasta')->with('submodule_section_data', $submodule_section_data)->with('date', $date)->with('hour', $hour)->with('auctionpics',$CurrentAuctionPics)->with('date_coming', $date_coming)->with('comments', $comments);
    }

    /**
     * Function getSectionComments
     */
    public function getSectionComments () {
    	// objeto vacio
    	$submodule_section_data = new stdClass();
    	//$comments_data = new stdClass();
		
    	$submodule_section = DB::table('module')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->join('section', 'section.idSubmodule', '=', 'submodule.id')
		->join('xref_section_component', 'section.id', '=', 'xref_section_component.idSection')
		->where('module.id', '=', 2)
		->get();
		
		foreach ($submodule_section as $key => $value) {
			$submodule_section_data->{$value->name} = TextParser::change(nl2br($value->value));
		}

		/* Mostrar los comentarios de la subasta activa */	
		$comments = Comments::getComments();

        return View::make('comments')->with('submodule_section_data', $submodule_section_data)->with('comments', $comments);
    }

    /**
     * Function getSectionAuction
     */
    public function getSectionAuction () {
    	// objeto vacio
    	$submodule_section_data = new stdClass();
    	//$comments_data = new stdClass();
		
    	$submodule_section = DB::table('module')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->join('section', 'section.idSubmodule', '=', 'submodule.id')
		->join('xref_section_component', 'section.id', '=', 'xref_section_component.idSection')
		->where('module.id', '=', 2)
		->get();
		
		foreach ($submodule_section as $key => $value) {
			$submodule_section_data->{$value->name} = TextParser::change(nl2br($value->value));
		}
		/*
			Datos Subasta
		*/
			$CurrentAuctionPics = Subasta::getImages();

        return View::make('subastas')->with('submodule_section_data', $submodule_section_data)->with('auctionpics',$CurrentAuctionPics);
    }

    /**
     * Function getSectionComingSoon
     */
    public function getSectionComingSoon () {
    	// objeto vacio
    	$submodule_section_data = new stdClass();
    	//$comments_data = new stdClass();
		
    	$submodule_section = DB::table('module')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->join('section', 'section.idSubmodule', '=', 'submodule.id')
		->join('xref_section_component', 'section.id', '=', 'xref_section_component.idSection')
		->where('module.id', '=', 2)
		->get();

		/**
		 * query to the table subasta | extract Day, Month, Year and name of the month | Fecha proxima subasta afectuar
		 */
		$date_coming = DB::table('subasta as s')
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
		
		foreach ($submodule_section as $key => $value) {
			$submodule_section_data->{$value->name} = TextParser::change(nl2br($value->value));
		}

        return View::make('comingsoon')->with('submodule_section_data', $submodule_section_data)->with('date_coming', $date_coming);
    }

    /**
     * Function SendmailContactUS --> Subseccion Proximamente
     */
    public function SendmailContactUS () {
    	
    	if (Request::ajax()) {

	    	//$input = Input::all();
	    	$data = [
				'name'=> strip_tags(Input::get('name')),
				'email'=> strip_tags(Input::get('email')),
				'city'=> strip_tags(Input::get('city')),
				'comment'=> strip_tags(Input::get('comment'))
			];

			$rules = [
				'name'=> 'required',
				'email'=> 'required|email',
				'city'=> 'required',
				'comment'=> 'required'
			];
			
			$messages = array(
				'required' => 'El campo :attribute es obligatorio.',
				'email' =>'El campo :attribute no es un email valido',
			);

			$validation = Validator::make($data, $rules);

			if ($validation->passes()) {
				// Enviar correo
				Mail::send('subastas.email_send', $data, function($message) use ($data) {
					$message->to(Input::get('email'))
					->subject('German Arzate | Próximamente');
				});

				// Success message
				return Response::json(array(
						'success' => true,
						'msg' => 'Gracias por ponerte en contacto, tú mensaje se ha enviado'
					));

			} else {
				// Error message
				$messages = $validation->messages();

				if($validation->messages()->has('name'))
					$errorField = $validation->messages()->first('name');
				else if($validation->messages()->has('email'))
					$errorField = $validation->messages()->first('email');
				else if($validation->messages()->has('city'))
					$errorField = $validation->messages()->first('city');
				else if($validation->messages()->has('comment'))
					$errorField = $validation->messages()->first('comment');

				return Response::json(array(
					'success'=> false,
					'msg' => $errorField
					));
			}

    	}
    	
    }

	/*Obtiene la lista de pujas activas*/
	public function getAuctionBids(){
		if(Request::ajax()){
			$bids = 	Subasta::getBids();
			$time =		time(); /*Server Time*/
			return Response::json(array('bids' => $bids,'time'=>$time));
		}
	}

	public function getNewBids(){
		if(Request::ajax()){
			$change = 0;
			$oldBids = strip_tags(trim(Input::get('totalbids')));
			$newBids 		= count(Subasta::getBids());
			if((int)$oldBids == $newBids){
				$change = 0;
			}else{
				$change = 1;
			}
			return Response::json(array('change' => $change));
		}
	}
	public function postAuctionBid(){
		if(Request::ajax()){
			$data = [
				'name' 			=> strip_tags(trim(Input::get('name'))),
				'nickname' 		=> strip_tags(trim(Input::get('nickname'))),
				'email' 		=> strip_tags(trim(Input::get('email'))),
				'amount'		=> strip_tags(trim(Input::get('amount'))),
				'comment' 		=> strip_tags(trim(Input::get('comment')))
			];
			$rules = [
				'name'			=> 'required|max:50',
				'nickname'		=> 'required|max:20',
				'email' 		=> 'required|email|max:50',
				'amount' 		=> 'required|digits_between:1,9'
			];
			$validator = Validator::make($data, $rules);
			if($validator->passes()){
				$credentials = $data;
				$data = (object)$data;
				
				
				/*Obtener datos subasta activa*/
				$auction = Subasta::getActiveAuction();
				$auction_id = $auction->id;

						
				$bid = Auction_bid::getHighestBid($auction_id); /*Traer el monto actual mas grande de la suabasta activa*/
				$highestBid = $bid->amount;
				if($data->amount <= $highestBid){ /*Si la cantidad a ofertar es menor o igual que la cantidad mayor ofertada mandar mensaje de generar una ofertar mayor*/
					return Response::json(array('error' => 4,'msg' => number_format($highestBid) ));
				}else{	/*Guardar usuario y puja*/
					$user = Auction_user::isActive($data->email); /*Checar si el usuario existe*/
					if($user){ /*Si el usuario existe*/

						$duplicateNickName = Auction_user::checkNickName($data->nickname,$user->id);
						if($duplicateNickName){
							return Response::json(array('error' => 5,'msg' => 'Este apodo ya esta en uso, por favor elige otro.' ));
						}

						$user_status = $user->status;
						if($user_status){ /* Si el usuario es válido registrar puja */
							$auction = Subasta::getActiveAuction();
							$auction_id = $auction->id;
							$user_id = $user->id;
							$highestBidUser = $bid->user_id;
							if($highestBidUser == $user_id){ /*Si la oferta a registrar pertenece al mismo usuario con la mayor oferta actual*/
								return Response::json(array('error' => 1,'msg' => 'Su oferta no se registro ya que en este momento posee la más alta.' ));
							}else{ /*Registrar puja*/
								$auction_bid = new Auction_bid;
								$auction_bid = $auction_bid->addBid($data,$auction_id,$user_id,true);
								/*Update name & nickname*/
								$user = Auction_user::whereEmail($data->email)->first();
								$user->name 	= $data->name;
								$user->nickname = $data->nickname;
								$user->save();

								if($auction_bid){
									return Response::json(array('error' => 0,'msg' => 'Oferta registrada correctamente'));
								}
							}
						}else{	/*Si el usuario existe pero no es válido mandar aviso que revise su email, sin guardar la puja*/
							return Response::json(array('error' => 3,'msg' => 'Por favor revise su bandeja de entrada, ya se le ha enviado un E-mail de verificación.' ));
						}
					}else{ /*Si el usuario no existe, registrarlo, guardar la puja, ponerlo inactivo y mandar email de validación*/
						$duplicateNickName = Auction_user::checkNickName($data->nickname,0);
						if($duplicateNickName){
							return Response::json(array('error' => 5,'msg' => 'Este apodo ya esta en uso, por favor elige otro.' ));
						}
						$newUser = new Auction_user;
						$newUser = $newUser->addAuctionUser($data); /*get the user*/
						$credentials['code'] = $newUser->confirmation_code;
						
						$auction_bid = new Auction_bid;
						$auction_bid = $auction_bid->addBid($data,$auction_id,$newUser->id,false);

						Mail::send('emails.verification', $credentials, function($message) use ($data) {
							$message->to($data->email, $data->name)
						->subject('Verifica tu dirección de correo');
						});
						return Response::json(array('error' => 2,'msg' => 'Mensaje de verificacion enviado'));
					}

				}


				if($user){ /*Si el usuario existe*/
					$user_status = $user->status;
					if($user_status){ /* Si el usuario es válido registrar puja */
						$auction = Subasta::getActiveAuction();
						$auction_id = $auction->id;
						$user_id = $user->id;
						$bid = Auction_bid::getHighestBid($auction_id);
						$highestBid = $bid->amount;
						$highestBidUser = $bid->user_id;
						if($highestBidUser == $user_id){ /*Si la mayor oferta pertenece al mismo usuario que en el momento tiene la mejor oferta mandar mensaje*/
							return Response::json(array('error' => 1,'msg' => 'En este momento posee la oferta más alta.' ));
						}else if($data->amount <= $highestBid){ /*Si la cantidad a ofertar es menor o igual que la cantidad mayor ofertada mandar mensaje de generar una ofertar mayor*/
							return Response::json(array('error' => 4,'msg' => number_format($highestBid) ));
						}else{ /*Registrar puja si la cantidad ofertada es mayor*/
							$auction_bid = new Auction_bid;
							$auction_bid = $auction_bid->addBid($data,$auction_id,$user_id,true);
							if($auction_bid){
								return Response::json(array('error' => 0,'msg' => 'Oferta registrada correctamente'));
							}
						}
					}else{	/*Si el usuario existe pero no es válido mandar aviso que revise su email, sin guardar la puja*/
						return Response::json(array('error' => 3,'msg' => 'Por favor revise su bandeja de entrada, ya se le ha enviado un E-mail de verificación.' ));
					}
				}else{ /*Si el usuario no existe, registrarlo, guardar la puja, ponerlo inactivo y mandar email de validación*/

					$newUser = new Auction_user;
					$confirmation_code = $newUser->addAuctionUser($data); /*get the code*/
					$credentials['code'] = $confirmation_code;
					Mail::send('emails.verification', $credentials, function($message) use ($data) {
						$message->to($data->email, $data->name)
					->subject('Verifica tu dirección de correo');
					});
					return Response::json(array('error' => 2,'msg' => 'Mensaje de verificacion enviado'));
				}
				return Response::json(array('user' => $user));
			}else{
				$messages = $validator->messages();

				if($validator->messages()->has('name'))
					$errorField = 'Nombre: '.$validator->messages()->first('name');
				else if($validator->messages()->has('nickname'))
					$errorField = 'Apodo: '.$validator->messages()->first('nickname');
				else if($validator->messages()->has('email'))
					$errorField = 'E-mail: '.$validator->messages()->first('email');
				else if($validator->messages()->has('amount'))
					$errorField = 'Cantidad: '.$validator->messages()->first('amount');
				else if($validator->messages()->has('comment'))
					$errorField = 'Comentario: '.$validator->messages()->first('comment');

				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
		}
	}   

	/**
	 * Funcion getAllComments para traer todos los comentarios de la subasta
	 */
	public function getAllComments(){

		if(Request::ajax()){
			$comments = Comments::getComments();
			return Response::json(array('comments' => $comments));
		}

	}



}