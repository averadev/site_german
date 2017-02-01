<?php

class ServicesController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la vista de servicios extra
	|--------------------------------------------------------------------------
	|
	*/

	public function getMonumental(){

		/*Obtener los elementos de las secciones de esculturas monumentales en servicios extras*/
		$data = DB::table('xref_section_component as block')
		->select('block.name','block.value','block.detail')
		->join('section','block.idSection','=','section.id')
		->join('submodule','submodule.id','=','section.idSubmodule')
		->where('submodule.id','=',1)
		->get();
		
		/*Se añade todo el conenido de las secciones a un objecto*/
		$block = new stdClass();
		foreach ($data as $key => $value) {
			$block->{$value->name} = nl2br($value->value);
		}

		return View::make('servicios.monumental')
					->with('data',$block);
	}
	public function getPersonalizadas(){
		/*Obtener los elementos de las secciones de esculturas personalizadas en servicios extras*/
		$data = DB::table('xref_section_component as block')
		->select('block.name','block.value','block.detail')
		->join('section','block.idSection','=','section.id')
		->join('submodule','submodule.id','=','section.idSubmodule')
		->where('submodule.id','=',2)
		->get();

		/*Se añade todo el conenido de las secciones a un objecto*/
		$block = new stdClass();
		foreach ($data as $key => $value) {
			$block->{$value->name} = nl2br($value->value);
		}
		
		return View::make('servicios.personalizadas')
							->with('data',$block);
	}
	public function getInteriores(){
		/*Obtener los elementos de las secciones de esculturas para interiores en servicios extras*/
		$data = DB::table('xref_section_component as block')
		->select('block.name','block.value','block.detail')
		->join('section','block.idSection','=','section.id')
		->join('submodule','submodule.id','=','section.idSubmodule')
		->where('submodule.id','=',3)
		->get();

		/*Se añade todo el conenido de las secciones a un objecto*/
		$block = new stdClass();
		foreach ($data as $key => $value) {
			$block->{$value->name} = nl2br($value->value);
		}

		return View::make('servicios.interiores')
					->with('data',$block);

	}

}