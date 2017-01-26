<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
	Route::controller('/servicios', 'ServicesController');
	//Route::controller('/subasta', 'AuctionController');
	Route::get('subasta', 'AuctionController@showSubmodule');
	Route::get('subasta/{id}/', 'AuctionController@getSectionSubmodule');
	Route::controller('/', 'HomeController');
