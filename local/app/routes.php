<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
	/*Servicios*/
	Route::get('servicios/monumental', 'ServicesController@getMonumental');
	Route::get('servicios/interiores', 'ServicesController@getInteriores');	
	Route::get('servicios/personalizadas', 'ServicesController@getPersonalizadas');	
    Route::controller('/german', 'GermanController');
    Route::controller('/contacto', 'ContactoController');
	/** Subasta **/
	Route::get('/subasta', 'AuctionController@showSubmodule');
	Route::get('/subasta/{id}/', 'AuctionController@getSectionSubmodule');
	Route::controller('/', 'HomeController');
