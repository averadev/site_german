<?php 

use Carbon\Carbon;

class AuctionController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para el modulo de subastas.
	|--------------------------------------------------------------------------
	|
	*/

	/**
	 * Function getSectionSubPQ --> Muestra las secciones del submodulo ¿Por Que?, Proceso, ¿En que te convierte? y Especificaciones
	 */
	public function getSectionSubPQ () {
		
		/*Obtener los elementos de la seccion*/
		$submodule_section_data = Component::getPageContent(2);
		$currentAuctionDetail 	= Obra::getCurrentAuctionDetail();
		$currentAuctionPics 	= Obra::getImages();		
		$date_coming 			= Obra::getNextAuction(); /*sección proximamente*/
		$activeSales			= Obra::getSalesGallery();
		$comments 				= Comments::getComments(); /*Sección comentarios*/

		return View::make('subasta.secciones')
		->with('submodule_section_data', $submodule_section_data)
		->with('auctionpics', $currentAuctionPics)
		->with('auctiondetail',$currentAuctionDetail)
		->with('sales',$activeSales)
		->with('date_coming', $date_coming)
		->with('comments', $comments);

	}

	public function getRegistrate() {
		$submodule_section_data = Component::getPageContent(2);
		return View::make('subasta.registrate')->with('submodule_section_data', $submodule_section_data);
	}

	/**
	 * Function SendmailContactUS --> Subseccion Proximamente
	 */
	public function SendmailContactUS () {
		if (Request::ajax()) {

			$data = [
				'name'		=> strip_tags(Input::get('name')),
				'email'		=> strip_tags(Input::get('email')),
				'city'		=> strip_tags(Input::get('city')),
				'comment'	=> strip_tags(Input::get('comment'))
			];

			$rules = [
				'name'		=> 'required',
				'email'		=> 'required|email|max:50',
				'city'		=> 'required|max:50|',
				'comment'	=> 'required|max:250'
			];
			$validation = Validator::make($data, $rules);
			if($validation->passes()) {				
				$datamail = (object)$data;
				$datamail->email_id = 2; /*Proximamente*/
				$inbox = new Inbox;
				$inbox = $inbox->addEmail($datamail);
				if($inbox){
					Mail::send('emails.proximamente', $data, function($message) use ($data) {
						$message->to(Input::get('email'))
						->subject('German Arzate | Próximamente');
					});
					return Response::json(array('success' => true,'msg' => 'Gracias por ponerte en contacto, tú mensaje se ha enviado'));
				}
			} else {
				$messages = $validation->messages();
				if($validation->messages()->has('name'))
					$errorField = $validation->messages()->first('name');
				else if($validation->messages()->has('email'))
					$errorField = $validation->messages()->first('email');
				else if($validation->messages()->has('city'))
					$errorField = $validation->messages()->first('city');
				else if($validation->messages()->has('comments'))
					$errorField = $validation->messages()->first('comments');
				return Response::json(array('success'=> false,'msg' => $errorField));
			}
		}		
	}

	/*Obtiene la lista de pujas activas*/
	public function getAuctionBids(){
		if(Request::ajax()){
			$bids = 	Obra::getBids();
			$time =		time(); /*Server Time*/
			return Response::json(array('bids' => $bids,'time'=>$time));
		}
	}

	public function getNewBids(){
		if(Request::ajax()){
			$change = 0;
			$oldBids = strip_tags(trim(Input::get('totalbids')));
			$newBids 		= count(Obra::getBids());
			if((int)$oldBids == $newBids){
				$change = 0;
			}else{
				$change = 1;
			}
			return Response::json(array('change' => $change));
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