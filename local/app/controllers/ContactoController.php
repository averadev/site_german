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
		$input = Input::all();

		$rules =  array(
				'name' => 'required',
				'email' => 'required|email',
				'company' => 'required',
				'asuntos' => 'required',
				'comment' => 'required'
			);

		$messages = array(
				'required' => 'El campo :attribute es requerido',
				'email' => 'El campo :attribute no es un email valido'
			);

		$validation = Validator::make($input, $rules);

		if ($validation->fails()) {
			//$messages = $validation->messages();
			$return = '';
			foreach ($validation->errors()->all() as $err) {
				$return .= $err . '<br>';
			}
			return $return;
			return View::make('contacto')->withErrors($validation)->withInput();
		} else {
			$data = array(
					'name'=>Input::get('name'),
					'email'=>Input::get('email'),
					'company'=>Input::get('company'),
					'asuntos'=>Input::get('asuntos'),
					'comment'=>Input::get('comment'),
				);

			$send = Mail::send('subastas.email_send', $data, function($message) {
				$message->to('tu_correo@dominio.com')
				->from(Input::get('email'), 'German Arzate | Contacto')
				->subject(Input::get('asuntos'));
			});
			return $send;
		}
	}

}