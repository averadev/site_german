<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
<<<<<<< HEAD
	/*Servicios*/
	Route::get('servicios/monumental', 'ServicesController@getMonumental');
	Route::get('servicios/interiores', 'ServicesController@getTnteriores');	
	Route::get('servicios/personalizadas', 'ServicesController@getPersonalizadas');	

	Route::controller('/subasta', 'AuctionController');
=======
	Route::controller('/servicios', 'ServicesController');
	//Route::controller('/subasta', 'AuctionController');
	Route::get('subasta', 'AuctionController@showSubmodule');
>>>>>>> origin/master
	Route::controller('/', 'HomeController');
