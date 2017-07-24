<?php

class ContactoController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la pagina principal
	|--------------------------------------------------------------------------
	|
	*/

	public function getIndex(){

		$contactBlock = Component::getPageContent(6);
		return View::make('contacto')->with('contact_info', $contactBlock);
	}

	/**
	 * Function SendContactUSGerman
	 */
	public function SendContactUSGerman () {

		if (Request::ajax()) {

	    	$data = [
				'name'=> strip_tags(Input::get('name')),
				'email'=> strip_tags(Input::get('email')),
				'company'=> strip_tags(Input::get('company')),
				'subject'=> strip_tags(Input::get('asuntos')),
				'comment'=> strip_tags(Input::get('comment'))
			];

			$rules = [
				'name'=> 'required',
				'email'=> 'required|email',
				'company'=> 'required',
				'subject'=> 'required|integer|min:1|max:4',
				'comment'=> 'required'
			];

			$validation = Validator::make($data, $rules);

			if ($validation->passes()) {
				$datamail = (object)$data;
				$datamail->email_id = 6; /*Contacto*/
				$inbox = new Inbox;
				$inbox = $inbox->addEmail($datamail);
				Mail::send('emails.contacto', $data, function($message) use ($data) {
					$message->to(Input::get('email'))
					->subject('German Arzate | Contacto');
				});

				return Response::json(array('success' => true,'msg' => 'Gracias por ponerte en contacto, tú mensaje se ha enviado'));

			} else {

				$messages = $validation->messages();

				if($validation->messages()->has('name'))
					$errorField = 'nombre: '.$validation->messages()->first('name');
				else if($validation->messages()->has('email'))
					$errorField = 'email: '.$validation->messages()->first('email');
				else if($validation->messages()->has('company'))
					$errorField = 'empresa: '.$validation->messages()->first('company');
				else if($validation->messages()->has('asuntos'))
					$errorField = 'asunto: '.$validation->messages()->first('asuntos');
				else if($validation->messages()->has('comment'))
					$errorField = 'comentario: '.$validation->messages()->first('comment');

				return Response::json(array('success'=> false,'msg' => $errorField));
			}
		}
		
	}


}