<?php 

class AuctionUserAndBidsController extends BaseController {

	function __construct(){
		$this->beforeFilter('auth.auct_user',array('except'=>array('postAuctionUser','postLogin')));
		$this->beforeFilter('csrf');
	}

	/*Registra un nuevo usuario*/
	public function postAuctionUser(){
		if(Request::ajax()){
			$data = [
				'name'					 => strip_tags(trim(Input::get('name'))),
				'nickname' 				 => strip_tags(trim(Input::get('nickname'))),
				'email' 				 => strip_tags(trim(Input::get('email'))),
				'cardnumber'			 => strip_tags(trim(Input::get('card_number'))),
				'type'					 => strip_tags(trim(Input::get('selectCard'))),				
				'password'				 => strip_tags(trim(Input::get('password'))),
				'password_confirmation'	 => strip_tags(trim(Input::get('password_confirm')))
			];
			$rules = [
				'name' 				 	 => 'required|max:40',
				'nickname' 				 => 'required|max:20',
				'email' 				 => 'required|email|max:50',
				'cardnumber'			 => 'required',
				'type' 					 => 'required',				
				'password' 				 => 'required|min:6|confirmed',
				'password_confirmation'  => 'required|min:6'
			];
			$validator = Validator::make($data, $rules);
			if($validator->passes()){
				$data = (object)$data;
				$card_type = '';
				if($data->type == 1){
					$card_type = 'visa';
				}else if($data->type == 2){
					$card_type = 'mastercard';
				}
				$data->card_type = $card_type;
				$card = CreditCard::validCreditCard($data->cardnumber, $card_type); /*Validar tarjeta de credito*/
				$card = (object)$card;
				$user = Auction_user::isUser($data->email); /*Checar si el usuario existe*/
				$nikname = Auction_user::repeatedNickname($data->nickname);

				if (!($card->valid)){ /*Si la tarjeta no es valida*/
					return Response::json(array('error' => 1,'msg' => "El Número de tarjeta es inválido" ));
				}else if($user){ /*Si el usuario existe*/
					return Response::json(array('error' => 1,'msg' => "El E-mail introducido ya esta registrado" ));
				}else if($nikname){ /*Si el usuario existe*/
					return Response::json(array('error' => 1,'msg' => "El Nickname introducido ya esta en uso porfavor elige otro" ));
				}

				if($card->valid && !($user) && !($nikname) ){ /*Si la tarjeta de credito es valida, el email no existe y el nickname no esta en uso, registrar usuario*/
					$newUser = new Auction_user;
					$confirmation_code = $newUser->addAuctionUser($data); /*get the code*/
					$credentials['code'] = $confirmation_code;
					Mail::send('emails.verification', $credentials, function($message) use ($data) {
						$message->to($data->email, 'Verifica tu correo')
					->subject('Verifica tu dirección de correo');
					});
					return Response::json(array('error' => 0,'msg' => 'Mensaje de verificación enviado a su correo'));
				}

				
			}else{
				$messages = $validator->messages();
				if($validator->messages()->has('name'))
					$errorField = 'Nombre: '.$validator->messages()->first('name');
				else if($validator->messages()->has('nickname'))
					$errorField = 'Nickname: '.$validator->messages()->first('nickname');
				else if($validator->messages()->has('email'))
					$errorField = 'E-mail: '.$validator->messages()->first('email');
				else if($validator->messages()->has('cardnumber'))
					$errorField = 'Numero de tarjeta: '.$validator->messages()->first('cardnumber');
				else if($validator->messages()->has('type'))
					$errorField = 'Tipo de tarjeta: '.$validator->messages()->first('type');
				else if($validator->messages()->has('password'))
					$errorField = 'Contraseña: '.$validator->messages()->first('password');
				else if($validator->messages()->has('password_confirmation'))
					$errorField = 'Cofirmación de contraseña: '.$validator->messages()->first('password_confirmation');
				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
		}	
	}

	/*Usuario login*/
	public function postLogin(){
		if(Request::ajax()){
			$credentials = [
				'email'		=> trim(Input::get('email_login')),
				'password'	=> trim(Input::get('password_login')),
				'status' 	=> 1
			];
			$rules = [
				'email'		=> 'required|email|max:50',
				'password' 	=> 'required'
			];
			$validator = Validator::make($credentials, $rules);
			if($validator->passes()){
				$email = $credentials['email'];
				if( Auction_user::isUser($email) && !(Auction_user::isActive($email)) ){
					return Response::json(array('error' => 1,'msg' => 'No has confirmado tu E-mail' ));
				}
				Auth::auct_user()->attempt($credentials);			
				if(Auth::auct_user()->check()){
					return Response::json(array('error' => 0));
				}
				return Response::json(array('error' => 1,'msg' => 'Usuario o contraseña no validos' ));
			}else{
				$messages = $validator->messages();
				if($validator->messages()->has('email'))
					$errorField = 'E-mail '.$validator->messages()->first('email');
				else if($validator->messages()->has('password'))
					$errorField = 'Password: '.$validator->messages()->first('password');

				return Response::json(array('error' => 1,'msg' => $errorField ));
			}
		}		
	}

	public function postLogOut(){
		if(Request::ajax()){
			Auth::auct_user()->logout();
			return Response::json(array('error' => 0));
		}
	}

	/*obtiene las pujas del usuario logiado*/
	public function getUserBids(){
		if(Request::ajax()){
			$bids = 	Obra::getBids(Auth::auct_user()->get()->id);
			return Response::json(array('bids' => $bids));
		}
	}


	public function postSaveBid(){
		if(Request::ajax()){
			$data = [
				'amount'		=> strip_tags(trim(Input::get('amount'))),
				'comment' 		=> strip_tags(trim(Input::get('comment')))
			];
			$rules = [
				'amount' 		=> 'required|digits_between:1,9'
			];
			$validator = Validator::make($data, $rules);
			if($validator->passes()){
				$data = (object)$data;

				/*Obtener la subasta activa*/
				$auction = Obra::getActiveAuction();
				$auction_id = $auction->id;
				if(!$auction){ /*Si no existe una subasta activa*/
					return Response::json(array('error' => 2,'msg' => "No hay subastas activas." ));
				}

				 /*Traer el monto actual mas grande de la suabasta activa*/
				$bid = Auction_bid::getHighestBid($auction_id);
				$highestBid = $bid->amount;

				/*Si la cantidad a ofertar es menor o igual que la cantidad mayor ofertada mandar mensaje de generar una ofertar mayor*/
				if($data->amount <= $highestBid){ 
					return Response::json(array('error' => 2,'msg' =>  "Su oferta tiene que ser mayor a la actual de $".number_format($highestBid) ));
				}

				$user_id = Auth::auct_user()->get()->id;
				$highestBidUser = $bid->user_id;


				/*Si la oferta a registrar pertenece al mismo usuario con la mayor oferta actual*/
				
				if($highestBidUser == $user_id){ 
					return Response::json(array('error' => 2,'msg' => 'Su oferta no se registro ya que en este momento posee la más alta.' ));
				}

				/* Guardar oferta */
				$auction_bid = new Auction_bid;
				$auction_bid = $auction_bid->addBid($data,$auction_id,$user_id,true);

				if($auction_bid){
					return Response::json(array('error' => 0,'msg' => 'Oferta registrada correctamente'));
				}


			}else{
				$messages = $validator->messages();

				if($validator->messages()->has('amount'))
					$errorField = 'Cantidad: '.$validator->messages()->first('amount');
				else if($validator->messages()->has('comment'))
					$errorField = 'Comentario: '.$validator->messages()->first('comment');

				return Response::json(array('error' => 1,'msg' => $errorField ));
			}

		}
	}


} /* End controller */