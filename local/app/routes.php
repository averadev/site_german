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

	Route::controller('/subasta', 'AuctionController');
	Route::controller('/', 'HomeController');
