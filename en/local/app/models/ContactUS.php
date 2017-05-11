<?php

/**
 * Models displays ContactUSInfo
 */

class ContactUS extends Eloquent {

	protected $table = "module";

	public static function showContactUSInfo () {
		$submodule_contactUsInfo = DB::table('module')
		->join('submodule', 'module.id', '=', 'submodule.idModule')
		->join('section', 'section.idSubmodule', '=', 'submodule.id')
		->join('xref_section_component', 'section.id', '=', 'xref_section_component.idSection')
		->where('module.id', '=', 6)
		->get();
		return $submodule_contactUsInfo;
	}
}

?>