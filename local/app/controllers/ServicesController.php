<?php

class ServicesController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la vista de servicios extra
	|--------------------------------------------------------------------------
	|
	*/

	public function getMonumental(){
		return View::make('servicios.monumental');
	}
	public function getInteriores(){
		return View::make('servicios.interiores');
	}
	public function getPersonalizadas(){
		return View::make('servicios.personalizadas');
	}	


}