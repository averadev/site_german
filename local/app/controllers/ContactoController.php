<?php

class ContactoController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la pagina principal
	|--------------------------------------------------------------------------
	|
	*/

	public function getIndex(){
		return View::make('contacto');
	}

	/**
	 * Function SendContactUS
	 */
	public function SendContactUSGerman () {

		if (Request::ajax()) {

	    	$input = Input::all();

			$rules = array (
					'name'=> 'required',
					'email'=> 'required|email',
					'company'=> 'required',
					'asuntos'=> 'required',
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
					->from(Input::get('email'), 'German Arzate | Contacto')
					->subject(Input::get('asuntos'));
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

}