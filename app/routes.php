<?php

Route::get('/','SiteController@index');

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');

Route::get('/logout','LoginController@logout');

Route::group(['before' => 'auth'], function() {
	// Protected routes
});