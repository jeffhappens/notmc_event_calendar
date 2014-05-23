<?php

Route::get('/','SiteController@index');

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');

Route::get('/logout','LoginController@logout');

Route::get('/users', function() {
	$users = User::get();
	return $users;
});