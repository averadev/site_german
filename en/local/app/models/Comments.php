<?php

/**
 * Models displays comments
 */

class Comments extends Eloquent {

	protected $table = "subasta_puja";

	public static function getComments () {
		$comments = DB::table('subasta_puja as sp')
		->select('sp.id as id', 'su.name as Nombre', 'su.nickname as NombreNick', 'sp.comment as Comentario', 's.name as NombreEscultura', 'sp.created as Fecha', DB::raw('SUBSTRING(sp.created, 9,2) as Dia'), DB::raw('SUBSTRING(sp.created, 6,2) AS Mes'), DB::raw('SUBSTRING(sp.created, 1,4) AS Anio'), DB::raw('CASE WHEN MONTH(sp.created) = 1 THEN "Enero" 
					WHEN MONTH(sp.created) = 2 THEN "Febrero" 
					WHEN MONTH(sp.created) = 3 THEN "Marzo" 
					WHEN MONTH(sp.created) = 4 THEN "Abril" 
					WHEN MONTH(sp.created) = 5 THEN "Mayo" 
					WHEN MONTH(sp.created) = 6 THEN "Junio" 
					WHEN MONTH(sp.created) = 7 THEN "Julio" 
					WHEN MONTH(sp.created) = 8 THEN "Agosto" 
					WHEN MONTH(sp.created) = 9 THEN "Septiembre" 
					WHEN MONTH(sp.created) = 10 THEN "Octubre" 
					WHEN MONTH(sp.created) = 11 THEN "Noviembre" 
					WHEN MONTH(sp.created) = 12 THEN "Diciembre" 
					ELSE "" 
				END AS NombreMes'))
		->join('subasta_user as su', 'sp.subasta_user_id','=','su.id')
		->join('subasta as s', 'sp.subasta_id','=','s.id')
		->where('sp.status', 1)
		->where('su.status', 1)
		->where('s.status', 1)
		->orderBy('sp.created', 'desc')
		->get();
		return $comments;
	}
}

?>