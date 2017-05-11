<?php

class ContactoController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la pagina principal
	|--------------------------------------------------------------------------
	|
	*/

	public function getIndex(){

		$contact_info = new stdClass();

		// query module -> Contacto
		$query_contactUs = ContactUS::showContactUSInfo();

		foreach ($query_contactUs as $key => $value) {
			$contact_info->{$value->name} = TextParser::change(nl2br($value->value));
		}
		return View::make('contacto')->with('contact_info', $contact_info);
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
				'asuntos'=> strip_tags(Input::get('asuntos')),
				'comment'=> strip_tags(Input::get('comment'))
			];

			$rules = [
				'name'=> 'required',
				'email'=> 'required|email',
				'company'=> 'required',
				'asuntos'=> 'required',
				'comment'=> 'required'
			];
			
			$messages = array(
				'required' => 'El campo :attribute es obligatorio.',
				'email' =>'El campo :attribute no es un email valido',
			);

			$validation = Validator::make($data, $rules);

			if ($validation->passes()) {
				// Enviar correo
				Mail::send('contacto_email_send', $data, function($message) use ($data) {
					$message->to(Input::get('email'))
					->subject('German Arzate | Contacto');
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
				else if($validation->messages()->has('company'))
					$errorField = $validation->messages()->first('company');
				else if($validation->messages()->has('asuntos'))
					$errorField = $validation->messages()->first('asuntos');
				else if($validation->messages()->has('comment'))
					$errorField = $validation->messages()->first('comment');

				return Response::json(array(
					'success'=> false,
					'msg' => $errorField
					));
			}
		}
		
	}


}