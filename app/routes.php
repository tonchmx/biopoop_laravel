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

// LOGIN
Route::get('login', 'AdminController@getLogin');
Route::post('login', 'AdminController@doLogin');
Route::get('logout', 'AdminController@doLogout');

// DASHBOARD
Route::group(array('prefix' => 'admin'), function(){
	Route::get('dashboard', 'AdminController@getDashboard');
});