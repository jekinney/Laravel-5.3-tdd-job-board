<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('register', ['as' => 'register.create', 'uses' => 'Auth\RegisterController@create']);
Route::post('register', ['as' => 'register.store', 'uses' => 'Auth\RegisterController@store']);

Route::get('login', ['as' => 'login.create', 'uses' => 'Auth\LoginController@create']);
Route::post('login', ['as' => 'login.store', 'uses' => 'Auth\LoginController@store']);

Route::group(['prefix' => 'developer', 'as' => 'developer.', 'namespace' => 'Developer'], function() {
	Route::get('profile/create', ['as' => 'profile.create', 'uses' => 'ProfileController@create']);
	Route::get('profile/show', ['as' => 'profile.show', 'uses' => 'ProfileController@show']);
});

Route::group(['prefix' => 'employer', 'as' => 'employer.', 'namespace' => 'Employer'], function() {
	Route::get('profile/create', ['as' => 'profile.create', 'uses' => 'ProfileController@create']);
	Route::get('profile/show', ['as' => 'profile.show', 'uses' => 'ProfileController@show']);
});