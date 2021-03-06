<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// PAGE
Route::get('/', 'IndexController@index');

// CONTACT
Route::post('contact', 'IndexController@getContactUsForm');

// LOGIN
Route::get('login', array('as' => 'login', 'uses' => 'AdminController@getLogin'));
Route::post('login', 'AdminController@doLogin');
Route::get('logout', array('as' => 'logout', 'uses' => 'AdminController@doLogout'));

// API
Route::group(array('prefix' => 'api'), function(){
	Route::get('/noticias', 'NoticiaController@getNoticiasJSON');
	Route::get('/comercializadoras', 'ComercializadoraController@getComercializadorasJSON');
	Route::get('/sponsors', 'SponsorController@getSponsorsJSON');
});

// DASHBOARD
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function(){
	// DASHBOARD
	Route::get('dashboard', array('as' => 'dashboard','uses' => 'AdminController@getDashboard'));

	// COMERCIALIZADORAS
	Route::group(array('prefix'=>'comercializadoras'), function(){
		Route::get('/', array('as' => 'comercializadoras', 'uses' => 'ComercializadoraController@index'));
		Route::get('/nueva', array('as' => 'comercializadoras/nueva', 'uses' => 'ComercializadoraController@create'));
		Route::post('/', 'ComercializadoraController@store');
		Route::get('/{id}', 'ComercializadoraController@show');
		Route::get('/{id}/editar', 'ComercializadoraController@edit');
		Route::put('/{id}', 'ComercializadoraController@update');
		Route::delete('/{id}', 'ComercializadoraController@destroy');
	});
	// NOTICIAS
	Route::group(array('prefix' => 'noticias'), function(){
		Route::get('/', array('as' => 'noticias', 'uses' => 'NoticiaController@index'));
		Route::get('/nueva', array('as' => 'noticias/nueva', 'uses' => 'NoticiaController@create'));
		Route::post('/', 'NoticiaController@store');
		Route::get('/{id}', 'NoticiaController@show');
		Route::get('/{id}/editar', 'NoticiaController@edit');
		Route::put('/{id}', 'NoticiaController@update');
		Route::delete('/{id}', 'NoticiaController@destroy');
	});

	// SPONSORS
	Route::group(array('prefix' => 'sponsors'), function(){
		Route::get('/', array('as' => 'sponsors', 'uses' => 'SponsorController@index'));
		Route::get('/nueva', array('as' => 'sponsors/nueva', 'uses' => 'SponsorController@create'));
		Route::post('/', 'SponsorController@store');
		Route::get('/{id}', 'SponsorController@show');
		Route::get('/{id}/editar', 'SponsorController@edit');
		Route::put('/{id}', 'SponsorController@update');
		Route::delete('/{id}', 'SponsorController@destroy');
	});
});