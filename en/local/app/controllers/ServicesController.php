<?php

class ServicesController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la vista de servicios extra
	|--------------------------------------------------------------------------
	|
	*/

	public function getMonumental(){

		/*Obtener los elementos de las sección*/
		$block = Component::getPageContent(3);

		return View::make('servicios.monumental')
					->with('data',$block);
	}
	public function getPersonalizadas(){

		$block = Component::getPageContent(3);
		
		return View::make('servicios.personalizadas')
							->with('data',$block);
	}
	public function getInteriores(){

		$block = Component::getPageContent(3);

		return View::make('servicios.interiores')
					->with('data',$block);

	}

	/*Formulario para citas*/
	public function postAppointment() {
		if (Request::ajax()) {

			$data = [
				'email_id'	=> strip_tags(Input::get('emailtype')),
				'name'		=> strip_tags(Input::get('name')),
				'email'		=> strip_tags(Input::get('email')),
				'company'	=> strip_tags(Input::get('company')),
				'date'		=> strip_tags(Input::get('date')),			
				'comment'	=> strip_tags(Input::get('comment'))
			];

			$rules = [
				'email_id'	=> 'required|integer|min:3|max:5',
				'name'		=> 'required|max:50',
				'email'		=> 'required|email|max:50',
				'company'	=> 'required|max:50|',
				'date'		=> 'required|date_format:"d/m/Y"|max:50',				
				'comment'	=> 'required|max:250'
			];
			$validation = Validator::make($data, $rules);
			if($validation->passes()) {				
				$datamail = (object)$data;
				$datamail->date = str_replace('/', '-', $datamail->date);
				$datamail->date = date('Y-m-d', strtotime($datamail->date));
				$inbox = new Inbox;
				$inbox = $inbox->addEmail($datamail);
				if($inbox){
					Mail::send('emails.obras_especiales', $data, function($message) use ($data) {
						$message->to(Input::get('email'))
						->subject('German Arzate | Obras especiales');
					});
					return Response::json(array('success' => true,'msg' => 'Gracias por ponerte en contacto, tú mensaje se ha enviado'));
				}
			} else {
				$messages = $validation->messages();
				if($validation->messages()->has('email_id'))
					$errorField = 'tipo: '.$validation->messages()->first('email_id');
				else if($validation->messages()->has('name'))
					$errorField = 'nombre: '.$validation->messages()->first('name');
				else if($validation->messages()->has('email'))
					$errorField = 'email: '.$validation->messages()->first('email');
				else if($validation->messages()->has('company'))
					$errorField = 'empresa: '.$validation->messages()->first('company');
				else if($validation->messages()->has('date'))
					$errorField = 'fecha: '.$validation->messages()->first('date');
				else if($validation->messages()->has('comment'))
					$errorField = 'comentario: '.$validation->messages()->first('comment');									
				return Response::json(array('success'=> false,'msg' => $errorField));
			}
		}		
	}

}