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
		$dataGerman = DB::table('xref_section_component as block')
		->select('block.name','block.value','block.detail')
		->join('section','block.idSection','=','section.id')
		->join('submodule','submodule.id','=','section.idSubmodule')
		->where('submodule.idModule','=',5)
		->get();
		
		$block = new stdClass();
		foreach ($dataGerman as $key => $value) {
			$block->{$value->name} = TextParser::change(nl2br($value->value));
		}

		return View::make('german')
		->with('data',$block);		
	}

}