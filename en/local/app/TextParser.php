<?php

/*
	Clase para reemplazar las etiquetas personalizadas a sus clases de estilo
	que se encuentran en css/text-paser.css
*/


class TextParser {

	public static function change($string){

		$pattern = array(
			"/<size-x08>/",
			"/<size-x1>/",
			"/<size-x11>/",
			"/<size-x12>/",
			"/<size-x13>/",
			"/<size-x15>/",
			"/<size-x16>/",
			"/<size-x2>/",
			"/<size-x21>/",
			"/<size-x23>/",
			"/<size-x25>/",
			"/<size-x27>/",
			"/<size-x3>/",
			"/<size-x35>/",
			"/<size-x4>/",
			"/<size-x45>/",
			"/<size-x5>/",
						
			"/<\/[A-Za-z-0-9-]+>/", /* Match Numbers, lowercase and uppercase letters and _ - characters*/
		);

		$replace = array(
			"<span class='size-x08'>",
			"<span class='size-x1'>",
			"<span class='size-x11'>",
			"<span class='size-x12'>",
			"<span class='size-x13'>",
			"<span class='size-x15'>",
			"<span class='size-x16'>",
			"<span class='size-x2'>",
			"<span class='size-x21'>",
			"<span class='size-x23'>",
			"<span class='size-x25'>",
			"<span class='size-x27'>",
			"<span class='size-x3'>",
			"<span class='size-x35'>",
			"<span class='size-x4'>",
			"<span class='size-x45'>",
			"<span class='size-x5'>",		
			"</span>",
		);

		$final_string = preg_replace($pattern,$replace,$string);

		return $final_string;

	}

}