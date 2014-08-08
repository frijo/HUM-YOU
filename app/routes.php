<?php

Route::get('/', array('as' => 'home', function ()
	{
		return View::make('index');
	}))->before('guest');
//Registrer
Route::get('signin', array('as' => 'signin',
		'uses' => 'UserController@create')
	)->before('guest');

Route::post('signin', array('as' => 'signin',
		'uses' => 'UserController@store')
)->before('guest');


//Login
Route::get('login', array('as' => 'login',
		'uses' => 'UserController@login')
	)->before('guest');

Route::post('login', array('as' => 'login',
		'uses' => 'UserController@authentication')
	)->before('guest');
//Logout
Route::get('logout', array('as' => 'logout', function () {
		Auth::logout();
		return Redirect::route('home')->with('flash_info', 'You logged out');
	}))->before('auth');


//Profile
Route::get('profile', array('as' => 'profile', function ()
	{
		return View::make('Profile.Index');
	}))->before('auth');

//Edit user
Route::get('edit', array('as' => 'edit',
		'uses' => 'UserController@edit')
	)->before('auth');
Route::post('edit', 'UserController@update');

//delete user
Route::get('delete', array('as' => 'delete',
		'uses' => 'UserController@delete')
	)->before('auth');