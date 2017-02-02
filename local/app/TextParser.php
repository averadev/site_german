<?php

/*
	Clase para reemplazar las etiquetas personalizadas a sus clases de estilo
	que se encuentran en css/text-paser.css
*/


class TextParser {

	public static function change($string){

		$parttern = array(
			"/<size-x3>/",
			"/<size-x35>/",			
			"/<\/[A-Za-z-0-9-]+>/", /* Match Numbers, lowercase and uppercase letters and _ - characters*/
		);

		$replace = array(
			"<span class='size-x3'>",
			"<span class='size-x35'>",
			"</span>",
		);

		$final_string = preg_replace($parttern,$replace,$string);

		return $final_string;

	}

}