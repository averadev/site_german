<?php

class ServicesController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la vista de servicios extra
	|--------------------------------------------------------------------------
	|
	*/

	public function getMonumental(){
		return View::make('serviciosextra');
	}

}