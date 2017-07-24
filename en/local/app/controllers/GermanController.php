<?php

class GermanController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la pagina principal
	|--------------------------------------------------------------------------
	|
	*/

	public function getIndex(){
		/*Obtener los elementos de las secciones de German Arzate*/
		$dataGerman = Component::getPageContent(5);

		return View::make('german')
		->with('data',$dataGerman);		
	}

}