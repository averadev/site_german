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
		Route::controller('/admin/subasta', 'AuctionAdminController');
		Route::get('/admin/section/{id}', 'DashboardController@showSection');	
		Route::controller('/admin', 'DashboardController');
	});

	/*verificación usuario*/
	Route::get('user/auth/{confirmationCode}','UserVerificationController@verify');	

	/*Servicios*/
	Route::get('servicios/monumental', 'ServicesController@getMonumental');
	Route::get('servicios/interiores', 'ServicesController@getInteriores');	
	Route::get('servicios/personalizadas', 'ServicesController@getPersonalizadas');	
    Route::controller('german', 'GermanController');
    Route::controller('contacto', 'ContactoController');
    Route::post('/contacto/contactomail', 'ContactoController@SendContactUSGerman');
	/** Subasta **/
	Route::get('/subasta', 'AuctionController@showSubmodule');
	Route::get('/subasta', 'AuctionController@getSectionSubPQ');
	Route::post('/subasta/coming', 'AuctionController@SendmailContactUS');
	Route::get('/subasta/allComments', 'AuctionController@getAllComments');
	Route::get('/subasta/bids', 'AuctionController@getAuctionBids');
	Route::post('/subasta/submit-bid', 'AuctionController@postAuctionBid');
	/*check bids*/
	Route::get('/subasta/check-bids', 'AuctionController@getNewBids');
	
	Route::controller('/', 'HomeController');
