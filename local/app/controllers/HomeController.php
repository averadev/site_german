<?php

class HomeController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Controlador para la pagina principal
	|--------------------------------------------------------------------------
	|
	*/

	public function getIndex(){

		$dataHome = DB::table('xref_section_component as block')
			->select('block.name','block.value','block.detail')
			->join('section','block.idSection','=','section.id')
			->join('submodule','submodule.id','=','section.idSubmodule')
			->where('submodule.idModule','=',1)
			->get();
			
			$block = new stdClass();
			foreach ($dataHome as $key => $value) {
				$block->{$value->name} = $value->value;
			}

			return View::make('home')
			->with('data',$block);
	}

}