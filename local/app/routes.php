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
		Route::controller('/admin/inbox', 'InboxController');
		Route::get('/admin/usuarios', 'UserAuctionController@showUsers');	
		Route::get('/admin/pujas/{id}', 'BidsAdminController@showBids');
		Route::get('/admin/section/{id}', 'DashboardController@showSection');
		Route::controller('admin/sales', 'SalesController');
		Route::controller('admin/cupones', 'CouponsController');
		Route::controller('admin', 'DashboardController');
	});
	/*verificación usuario*/
	Route::get('user/auth/{confirmationCode}','UserVerificationController@verify');	

	/*Catalogo de ventas*/
	Route::get('ventas', 'SalesListController@getIndex');
	Route::get('ventas/biography', 'SalesListController@viewBiography');
	Route::get('ventas/contact', 'SalesListController@viewContactUsForm');

	/*Servicios*/
	Route::post('servicios/sendmail', 'ServicesController@postAppointment');
	Route::get('servicios/monumental', 'ServicesController@getMonumental');
	Route::get('servicios/interiores', 'ServicesController@getInteriores');
	Route::get('servicios/personalizadas', 'ServicesController@getPersonalizadas');	
    Route::controller('german', 'GermanController');
    Route::get('/contacto', 'ContactoController@getIndex');
    Route::post('/contacto/contactomail', 'ContactoController@SendContactUSGerman');
	/** Subasta **/
		Route::get('/subasta', 'AuctionController@getSectionSubPQ');
		//Route::get('/subasta/comentarios', 'AuctionController@getSectionComments');
		//Route::get('/subasta/subastas', 'AuctionController@getSectionAuction');
		//Route::get('/subasta/proximamente', 'AuctionController@getSectionComingSoon');
		Route::post('/subasta/coming', 'AuctionController@SendmailContactUS');
		Route::get('/subasta/allComments', 'AuctionController@getAllComments');
		//Route::get('/subasta/registro', 'AuctionController@getRegistrate');
		Route::get('/subasta/bids', 'AuctionController@getAuctionBids');
	
	/*User sign up and bids*/
	Route::controller('/usuariopujas', 'AuctionUserAndBidsController');

	/*check bids*/
	Route::get('/subasta/check-bids', 'AuctionController@getNewBids');
	Route::post('/newsletter', 'HomeController@postNewsLetter');
	Route::controller('/', 'HomeController');
