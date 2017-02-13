<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
	/*Auth*/
	Route::group(array('namespace' => 'App\Controllers\Admin'), function () {
		Route::get('admin/logout', 'AuthController@getLogout');
		Route::get('admin/login', 'AuthController@getLogin');
		Route::post('admin/login', 'AuthController@postLogin');
	});
	
	/*Admin*/
	Route::group(array('namespace' => 'App\Controllers\Admin'), function () {
		Route::controller('/admin', 'DashboardController');	
	});

	/*Servicios*/
	Route::get('servicios/monumental', 'ServicesController@getMonumental');
	Route::get('servicios/interiores', 'ServicesController@getInteriores');	
	Route::get('servicios/personalizadas', 'ServicesController@getPersonalizadas');	
    Route::controller('german', 'GermanController');
    Route::controller('contacto', 'ContactoController');
	/** Subasta **/
	Route::get('/subasta', 'AuctionController@showSubmodule');
	Route::get('/subasta', 'AuctionController@getSectionSubPQ');
	Route::get('/subasta/{id}/', 'AuctionController@getSectionSubmodule');
	Route::controller('/', 'HomeController');
