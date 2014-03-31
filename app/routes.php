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

Route::get('/', function()
{
	return View::make('hello');
});

////Fonction de base pour 
//// Route::get('users', function() 
//// {
//// 	return "Users!";
//// });
//
////Fonction attaché à un contrôleur (utile pour la création de component)
////Les contrôleurs extends généralement le base controller
//Route::get('user', 'UserController@getIndex');
//
//Route::get('users', function()
//{
//	return View::make('users');
//});