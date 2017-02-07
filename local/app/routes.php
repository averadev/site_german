<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

	Route::group(array('namespace' => 'App\Controllers\Admin'), function () {
	
		// admin auth
		Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'AuthController@getLogout'));
		Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'AuthController@getLogin'));
		Route::post('admin/login', array('as' => 'admin.login.post', 'uses' => 'AuthController@postLogin'));
		
	});	



	/*Admin Routes*/
	
	Route::group(array('prefix' => 'admin', 'namespace' => 'App\Controllers\Admin', 'before' => 'auth.admin'), function () {
	
	    // admin dashboard
	    Route::get('/', array('as' => 'admin.dashboard', function () {
	
	        return View::make('admin/dashboard')->with('active', 'home');
	    }));	
	
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
