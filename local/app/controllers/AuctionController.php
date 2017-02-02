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
        return View::make('subasta', array('submodule' => $submodule));
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

    /**
     * Function getSectionSubPQ --> Muestra las secciones del submodulo Por Que
     */
    public function getSectionSubPQ () {
    	// objeto vacio
    	$submodule_section_data = new stdClass();

    	$submodule_section = DB::table('module')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->join('section', 'section.idSubmodule', '=', 'submodule.id')
		->join('xref_section_component', 'section.id', '=', 'xref_section_component.idSection')
		->where('module.id', '=', 2)
		->get();
		
		foreach ($submodule_section as $key => $value) {
			$submodule_section_data->{$value->name} = TextParser::change(nl2br($value->value));
		}
        return View::make('subasta')->with('submodule_section_data', $submodule_section_data);
    }

}