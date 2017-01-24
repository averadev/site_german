<?php

class ServicesController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la vista de servicios extra
	|--------------------------------------------------------------------------
	|
	*/

	public function getIndex(){
		return View::make('serviciosextra');
	}

}