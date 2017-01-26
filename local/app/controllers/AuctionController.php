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

	/**
	 * Function showSubmodule
	 */
	public function showSubmodule () {
		$submodule = DB::table('module', 'module.id', 'module.name')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->where('module.id', '=', 2)
		->get();
        return View::make('subasta', array('submodule' => $submodule));
    }

    /**
     * Function getSubmodule --> Muestra los submodulos del modulo subasta
     */
    public function getSubmodule () {
    	$submodule = DB::table('module', 'module.id', 'module.name')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->where('module.id', '=', 2)
		->get();
        return View::make('submodulo', array('submodule' => $submodule));
    }

    /**
     * Function getSectionSubmodule --> Muestra las secciones del submodulo
     */
    public function getSectionSubmodule ($id) {
    	$section_submodule = DB::table('module')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->join('section', 'section.idSubmodule', '=', 'submodule.id')
		->join('xref_section_component', 'section.id', '=', 'xref_section_component.idSection')
		->where('module.id', '=', 2)
		->where('section.idSubmodule', '=', $id)
		->get();
        return View::make('subasta', array('section_submodule' => $section_submodule));
    }

}