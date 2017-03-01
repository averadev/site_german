<?php

/*
	Clase para reemplazar las etiquetas personalizadas a sus clases de estilo
	que se encuentran en css/text-paser.css
*/


class TextParser {

	public static function change($string){

		$parttern = array(
			"/<size-x25>/",
			"/<size-x3>/",
			"/<size-x35>/",
			"/<size-x4>/",
			"/<size-x45>/",
			"/<size-x5>/",
			"/<size-x2>/",
			"/<size-x2-left>/",
			"/<size-x2-left2>/",
			"/<size-x8-left>/",
			"/<size-x2-right>/",
			"/<size-x3-right>/",
			"/<\/[A-Za-z-0-9-]+>/", /* Match Numbers, lowercase and uppercase letters and _ - characters*/
		);

		$replace = array(
			"<span class='size-x25'>",
			"<span class='size-x3'>",
			"<span class='size-x35'>",
			"<span class='size-x4'>",
			"<span class='size-x45'>",
			"<span class='size-x5'>",
			"<span class='size-x2'>",
			"<span class='size-x2-left'>",
			"<span class='size-x2-left2'>",
			"<span class='size-x8-left'>",
			"<span class='size-x2-right'>",
			"<span class='size-x3-right'>",
			"</span>",
		);

		$final_string = preg_replace($parttern,$replace,$string);

		return $final_string;

	}

}