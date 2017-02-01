<?php

class GermanController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la pagina principal
	|--------------------------------------------------------------------------
	|
	*/

	public function getIndex(){
        $submodule = DB::table('module', 'module.id', 'module.name')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->where('module.id', '=', 5)
		->get();
		return View::make('german', array('submodule' => $submodule));
	}

}