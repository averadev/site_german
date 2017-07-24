<?php


class Helper 
{


	static private $filePaths = array(
		0  => 'media/img/subasta_esculturas/', /*Imagenes de las obras en subasta*/
		1  => 'media/img/home/',
		2  => 'media/img/subasta/' ,
		3  => 'media/img/obras_especiales/',
		5  => 'media/img/german/',
		6  => 'media/img/contacto/',
		7  => 'media/img/',
		8  => 'media/img/home/'
	);

	public static function getFilePath($module){
		return self::$filePaths[$module];
	}

	public static function getExtensionMime($type){
		switch($type)
			{
			case 'image/gif'    : $extension = 'gif';   break;
			case 'image/png'    : $extension = 'png';   break;
			case 'image/jpeg'   : $extension = 'jpeg';   break;
			default :
				$extension = 'jpg';
			break;
			}
		return $extension;
	}

	/*Guardar imagen*/

	public static function saveImage($imgdata,$idAuction,$pathimg,$extension){
		$time = microtime(true) * 10000;	
		$name = "sub".$idAuction.'_'.number_format($time, 0, '.', '').'.'.$extension;
		$imgdata->move($pathimg, $name);
		return $name;
	}

	public static function saveImgElement($imgdata,$pathimg,$extension){
		$time = microtime(true) * 10000;	
		$name = "img".'_'.number_format($time, 0, '.', '').'.'.$extension;
		$imgdata->move($pathimg, $name);
		return $name;
	}

	public static function getMonthName($month){
		$monthNames = ["","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
		"Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
		$mName = $monthNames[$month];
		return $mName;
	}	

}