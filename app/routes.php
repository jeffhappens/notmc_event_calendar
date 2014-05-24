<?php

Route::get('/','SiteController@index');

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');

Route::get('/logout','LoginController@logout');

Route::group(['before' => 'auth'], function() {
	// Protected routes
	Route::group(['before' => 'isAdmin'], function() {
		// Admin routes
	});

	Route::group(['before' => 'isClient', function() {
		// Client routes
	});

});



Route::filter('isAdmin', function() {
	if(Auth::user()->role > 64) {
		return Redirect::to('/');
	}
});

Route::filter('isClient', function() {
	if(Auth::user()->role > 32) {
		return Redirect::to('/');
	}
});