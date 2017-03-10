<?php

/**
 * Models displays comments
 */

class Comments extends Eloquent {

	protected $table = "subasta_pujas";

	public static function getComments () {
		$comments = DB::table('subasta_puja as sp')
		->select('sp.id as id', 'su.name as Nombre', 'su.nickname as NombreNick', 'sp.comment as Comentario', 's.name as NombreEscultura', 'sp.created as Fecha')
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