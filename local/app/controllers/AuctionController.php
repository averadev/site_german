<?php 
/** No se utilizo namespace
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
**/
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

		/*  */


        return View::make('subasta')->with('submodule_section_data', $submodule_section_data)->with('date', $date)->with('hour', $hour)->with('auctionpics',$CurrentAuctionPics)->with('date_coming', $date_coming);
    }

    /**
     * Function SendmailContactUS --> Subseccion Proximamente
     */
    public function SendmailContactUS () {
    	
    	if (Request::ajax()) {

	    	$input = Input::all();

			$rules = array (
					'name'=> 'required',
					'email'=> 'required|email',
					'city'=> 'required',
					'comment'=> 'required'
				);
			
			$messages = array(
				'required' => 'El campo :attribute es obligatorio.',
				'email' =>'El campo :attribute no es un email valido',
			);

			$validation = Validator::make($input, $rules, $messages);

			if ($validation->fails()) {

				return Response::json(array(
						'success' => false,
						'errors' => $validation->errors()->getMessageBag()->toArray()
					));

			} else {

				$send = Mail::send('subastas.email_send', $input, function($message) use ($input) {
					$message->to('tu_correo@dominio.com')
					->from(Input::get('email'), 'German Arzate | Próximamente')
					->subject(Input::get('comment'));
				});
				return $send;

				return Response::json(array(
						'success' => true,
						'message' => 'Gracias por ponerte en contacto, tú mensaje se ha enviado'
					));
			}

    	} else {

    		return 'No se ha realizado una petición';
    	}
    	
    }

	/*Obtiene la lista de pujas activas*/
	public function getAuctionBids(){
		if(Request::ajax()){
			$bids = 	Subasta::getBids();
				$time = time(); /*Server Time*/
			return Response::json(array('bids' => $bids,'time'=>$time));
		}
	}

	public function postAuctionBid(){
		if(Request::ajax()){
			$data = [
				'name' 			=> strip_tags(trim(Input::get('name'))),
				'nickname' 		=> strip_tags(trim(Input::get('nickname'))),
				'email' 			=> strip_tags(trim(Input::get('email'))),
				'amount'			=> strip_tags(trim(Input::get('amount'))),
				'comment' 		=> strip_tags(trim(Input::get('comment')))
			];
			$rules = [
				'name'			=> 'required|max:50',
				'nickname'		=> 'required|max:45',
				'email' 			=> 'required|email|max:50',
				'amount' 		=> 'required|digits_between:1,9',
				'comment' 		=> 'required|max:200'
			];
			$validator = Validator::make($data, $rules);
			if($validator->passes()){
				$data = (object)$data;
				$user = Auction_user::isActive($data->email);
				if($user){ /*Si el usuario existe*/
					$user_status = $user->status;
					if($user_status){ /* Si el usuario es válido registrar puja */
						$auction = Subasta::getActiveAuction();
						$auction_id = $auction->id;
						$user_id = $user->id;
						$highestBid = Auction_bid::getHighestBid($auction_id)->amount;
						if($data->amount <= $highestBid){ /*Si la cantida a ofertar es menor o igual que la cantidad mayor ofertada mandar mensaje de advertencia*/
							return Response::json(array('msg' => number_format($highestBid) ));
						}else{ /*Si la cantidad a ofertar es mayor registrar la puja*/
							$auction_bid = new Auction_bid;
							$auction_bid = $auction_bid->addBid($data,$auction_id,$user_id);
							if($auction_bid){
								return Response::json(array('msg' => 'Oferta registrada correctamente'));
							}		
						}				
					}else{	/*Si el usuario existe pero no es válido mandar aviso que revise su email, sin guardar la puja*/

					}
				}else{ /*Si el usuario no existe, registrarlo, guardar la puja, ponerlo inactivo y mandar email de validación*/

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



}