<?php

/**
* Promoters Controller
*/
class PromotersController extends BaseController
{
	
	function __construct()
	{
		//
	}

	/**
	 * Function listViewPromoters
	 */
	public function listViewPromoters()
	{
		return View::make("sales.list_promoters");
	}

}
