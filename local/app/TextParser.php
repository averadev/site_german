<?php

class TextParser {

	public function change($string){

		$parttern = array();
		$parttern[0] = "/<large-x1>/";
		$parttern[1] = "/<large-x2>/";
		$parttern[2] = "/<\/[A-Za-z_-]+>/";/* Match lowercase and uppercase letters and _ - characters*/

		$replace = array();

		$replace[0] = "<span class='large-x1'>";
		$replace[1] = "<span class='large-x2'>";
		$replace[2] = "</span>";

		$final_string = preg_replace($parttern,$replace,$string);

		return $final_string;

	}

}