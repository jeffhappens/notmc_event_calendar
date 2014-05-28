<?php

Route::get('/','SiteController@index');

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout');


Route::get('/search','SearchController@index');
Route::post('/search','SearchController@search');


Route::post('/tweets', function() {
	$tweets = Twitter::getUserTimeline(array('screen_name' => 'jeffreyamills', 'count' => 20, 'format' => 'json'));
	return $tweets;
});



Route::group(['before' => 'auth'], function() {
	// Protected routes
	Route::group(['before' => 'isAdmin'], function() {
		// Admin routes
		Route::get('/admin','AdminController@index');
	});

	Route::group(['before' => 'isClient'], function() {
		// Client routes
		Route::get('/client','ClientController@index');
	});

});


// Route filters
Route::filter('isAdmin', function() {
	if(Auth::user()->role < $_ENV['admin_priv_level']) {
		return Redirect::to('/');
	}
});

Route::filter('isClient', function() {
	if(Auth::user()->role < $_ENV['client_priv_level']) {
		return Redirect::to('/');
	}
});