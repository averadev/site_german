<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

	/*verificación usuario*/
	Route::get('user/auth/{confirmationCode}','UserVerificationController@verify');	

	/*Servicios*/
	Route::post('servicios/sendmail', 'ServicesController@postAppointment');
	Route::get('servicios/monumental', 'ServicesController@getMonumental');
	Route::get('servicios/interiores', 'ServicesController@getInteriores');
	Route::get('servicios/personalizadas', 'ServicesController@getPersonalizadas');	
    Route::controller('german', 'GermanController');
    Route::get('/contacto', 'ContactoController@getIndex');
    Route::post('/contacto/contactomail', 'ContactoController@SendContactUSGerman');
	/** Subasta **/
		Route::get('/subasta', 'AuctionController@showSubmodule');
		Route::get('/subasta', 'AuctionController@getSectionSubPQ');
		//Route::get('/subasta/comentarios', 'AuctionController@getSectionComments');
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
	Route::post('/newsletter', 'HomeController@postNewsLetter');
	Route::controller('/', 'HomeController');
