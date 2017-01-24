<?php 


class AuctionController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para el modulo de subastas.
	|--------------------------------------------------------------------------
	|
	*/

	// public function getIndex(){
	// 	return View::make('subasta');
	// }

	/* Function showSubmodule */
	public function showSubmodule () {
		$submodule = DB::table('submodule')
		->where('idModule', '=', '2')
		->get();
        return View::make('subasta', array('submodule' => $submodule));
    }

}