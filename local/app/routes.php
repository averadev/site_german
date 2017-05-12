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
		Route::get('/admin/usuarios', 'UserAuctionController@showUsers');	
		Route::get('/admin/pujas/{id}', 'BidsAdminController@showBids');
		Route::get('/admin/section/{id}', 'DashboardController@showSection');
		Route::controller('admin', 'DashboardController');
	});
	/*verificación usuario*/
	Route::get('user/auth/{confirmationCode}','UserVerificationController@verify');	

	/*Servicios*/
	Route::get('servicios/monumental', 'ServicesController@getMonumental');
	Route::get('servicios/interiores', 'ServicesController@getInteriores');	
	Route::get('servicios/personalizadas', 'ServicesController@getPersonalizadas');	
    Route::controller('german', 'GermanController');
    Route::get('/contacto', 'ContactoController@getIndex');
    Route::post('/contacto/contactomail', 'ContactoController@SendContactUSGerman');
	/** Subasta **/
	Route::get('/subasta', 'AuctionController@getSectionSubPQ');
	Route::get('/subasta/comentarios', 'AuctionController@getSectionComments');
	Route::get('/subasta/subastas', 'AuctionController@getSectionAuction');
	Route::get('/subasta/proximamente', 'AuctionController@getSectionComingSoon');
	Route::post('/subasta/coming', 'AuctionController@SendmailContactUS');
	Route::get('/subasta/allComments', 'AuctionController@getAllComments');
	Route::get('/subasta/bids', 'AuctionController@getAuctionBids');

	
	/*User actions*/
	Route::post('/subasta/login', 'AuctionController@postLogin');
	Route::post('/subasta/log-out', 'AuctionController@postLogout');
	Route::post('/subasta/new-auction-user', 'AuctionController@postAuctionUser');
	Route::post('/subasta/submit-bid', 'AuctionController@postAuctionBid');
	/*check bids*/
	Route::get('/subasta/check-bids', 'AuctionController@getNewBids');
	/* Home */
	Route::controller('/', 'HomeController');
