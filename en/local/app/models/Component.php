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


	public static function footer(){
		$dataGerman = DB::table('xref_section_component as block')
		->select('block.name','block.value','block.detail')
		->join('section','block.idSection','=','section.id')
		->join('submodule','submodule.id','=','section.idSubmodule')
		->where('submodule.idModule','=',8)
		->get();
		
		$blockFooter = new stdClass();
		foreach ($dataGerman as $key => $value) {
			$blockFooter->{$value->name} = TextParser::change(nl2br($value->value));
		}
		return $blockFooter;
	}

	public static function header(){
		$dataGerman = DB::table('xref_section_component as block')
		->select('block.name','block.value','block.detail')
		->join('section','block.idSection','=','section.id')
		->join('submodule','submodule.id','=','section.idSubmodule')
		->where('submodule.idModule','=',7)
		->get();
		
		$blockFooter = new stdClass();
		foreach ($dataGerman as $key => $value) {
			$blockFooter->{$value->name} = TextParser::change(nl2br($value->value));
		}
		return $blockFooter;
	}

	public function upElement($data){
		$response = $this->find($data->id);
		$response->value = $data->value;
		if($response->save()){
			return true;
		}
		return false;
	}


}