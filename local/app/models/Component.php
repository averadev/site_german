<?php
/**
* 
*/

class Component extends Eloquent
{

	protected $table = "xref_section_component";
	public $timestamps = false;
	protected $SoftDelete = false;

	function sections(){	
	    return $this->belongsTo('Section');
	}

	public static function getPageContent($module){
		/*
			"1"	 "Home"
			"2"	 "Subasta"
			"3"	 "Obras especiales"
			"4"	 "Notas de prensa"
			"5"	 "German Arzate"
			"6"	 "Contacto"
			"7"	 "Header"
			"8"	 "Footer"
		*/
		$dataGerman = DB::table('xref_section_component as block')
		->select('block.name','block.value','block.img_alt')
		->join('section','block.idSection','=','section.id')
		->join('submodule','submodule.id','=','section.idSubmodule')
		->where('block.idLanguage','=',1)
		->where('submodule.idModule','=',$module)
		->get();
		
		$block = new stdClass();
		foreach ($dataGerman as $key => $value) {
			$block->{$value->name} 	= TextParser::change(nl2br($value->value));
			$block->{$value->name."_alt"}	= $value->img_alt;
		}
		return $block;
	}

	public static function footer(){
		$dataGerman = DB::table('xref_section_component as block')
		->select('block.name','block.value','block.img_alt')
		->join('section','block.idSection','=','section.id')
		->join('submodule','submodule.id','=','section.idSubmodule')
		->where('block.idLanguage','=',1)
		->where('submodule.idModule','=',8)
		->get();
		
		$blockFooter = new stdClass();
		foreach ($dataGerman as $key => $value) {
			$blockFooter->{$value->name} = TextParser::change(nl2br($value->value));
			$blockFooter->{$value->name."_alt"}	= $value->img_alt;
		}
		return $blockFooter;
	}

	public static function header(){
		$dataGerman = DB::table('xref_section_component as block')
		->select('block.name','block.value','block.img_alt')
		->join('section','block.idSection','=','section.id')
		->join('submodule','submodule.id','=','section.idSubmodule')
		->where('block.idLanguage','=',1)
		->where('submodule.idModule','=',7)
		->get();
		
		$blockFooter = new stdClass();
		foreach ($dataGerman as $key => $value) {
			$blockFooter->{$value->name} = TextParser::change(nl2br($value->value));
			$blockFooter->{$value->name."_alt"}	= $value->img_alt;
		}
		return $blockFooter;
	}

	public static function getSectionComponents($idSection){
			$components =  DB::table('xref_section_component as block')
							->select('id','idComponent as type','name as compName')
							->where('idSection','=',$idSection)
							->where(function ($query) {
								$query->where('block.idLanguage','=',Session::get('lang'))
								->orWhere('block.idComponent', '=', 2);
							})
							->orderBy('idComponent')
							->get();
			return $components;
	}

	public function upElement($data,$img = null){
		$response = $this->find($data->id);
		if($data->value){
			$response->value = $data->value;
		}
		if($img){
			$response->img_alt = $data->alt;
		}
		if($response->save()){
			return true;
		}
		return false;
	}


}