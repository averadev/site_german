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
	 * Function viewContactUsForm
	 */
	public function viewContactUsForm()
	{
		return View::make("sales.contact-us");
	}

}