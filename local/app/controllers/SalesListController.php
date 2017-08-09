<?php

class SalesListController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para el catalogo de obras
	|--------------------------------------------------------------------------
	|
	*/

	public function getIndex(){

		return View::make('sales.saleshome');	
	}

	public function getObra($slug){
		$obra = Obra_lang::findBySlug($slug);
		// $work = new stdClass();
		if($obra){
			$price = Obra::getPrice($obra->subasta->id);
			$panorama = Images::getPanoramaImagesByAuction($obra->subasta->id);
			$otrasobras = Images::getSculpturesOnSaleImages();
			$submodule_section_data = Component::getPageContent(2);
			if($price){
				$json=file_get_contents('https://graph.facebook.com/?fields=og_object{likes.limit(0).summary(true)},share&ids=https://developers.facebook.com/docs/plugins/');
				$json=json_decode($json,true);
				$fbcomments = $json['https://developers.facebook.com/docs/plugins/']['share']['comment_count'];
				$fblikes = $json['https://developers.facebook.com/docs/plugins/']['share']['share_count'];	
				return View::make('sales.saleinfo')
						->with('submodule_section_data', $submodule_section_data)
						->with('panorama',$panorama)
						->with('fbcomments',$fbcomments)	
						->with('fblikes',$fblikes)
						->with('sculptures',$otrasobras);
			}
			return "VENDIDO";
		}

		return "NO ENCONTRADO";
	}

	/**
	 * Function viewBiography
	 */
	public function viewBiography()
	{
		$dataGermanBiography = Component::getPageContent(5);
		return View::make("sales.biography")->with("biography", $dataGermanBiography);
	}

	/**
	 * Function viewCVArtist
	 */
	public function viewCVArtist()
	{
		return View::make("sales.cv_artist");
	}

	/**
	 * Function viewWorks
	 */
	public function viewWorks()
	{
		$work = Obra::getWorksActive();
		return View::make("sales.works")->with("works", $work);
	}

	/**
	 * Function viewContactUsForm
	 */
	public function viewContactUsForm()
	{
		return View::make("sales.contact-us");
	}

	/**
	 * Function saveContactFormPost
	 */
	public function saveContactFormPost()
	{
		try {
			if (Request::ajax()) {
				$data = array(
					'name' => strip_tags(Input::get("name")),
					'email' => strip_tags(Input::get("email")),
					'subject' => strip_tags(Input::get("subject")),
					'comment' => strip_tags(Input::get("comment"))
				);

				$rules = array(
					'name' => 'required',
					'email' => 'required|email',
					'subject' => 'required',
					'comment' => 'required',
				);

				$validation = Validator::make($data, $rules);

				if($validation->passes())
				{
					$email_data = (object)$data;
					$email_data->email_id = 6; /* email id type - Contacto */
					$mailbox = new Inbox();
					$mailbox = $mailbox->addEmail($email_data);
					Mail::send("emails.contacto", $data, function($message) use ($data){
						$message->to(Input::get("email"))
						->subject("German Arzate | Contacto");
					});
					
					return Response::json(array('success' => true,'msg' => 'Gracias por ponerte en contacto, tú mensaje se ha enviado'));
					
					return Redirect::to('ventas/contact');
				} else {
					return Response::json(array('success' => false,'msg' => 'Complete los campos por favor'));
					
					return Redirect::to('ventas/contact');
				}
			}
			return Response::json(array('success' => false, 'msg' => 'No se ha podido enviar su mensaje'));
		} catch (Exception $e) {
			return "Ha ocurrido un error inesperado - ".$e->getMessage();
		}
	}

}