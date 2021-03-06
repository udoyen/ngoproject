<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
  Route::auth();
  Route::get('/home', 'HomeController@index');

  Route::get('login/facebook', 'Auth\AuthController@redirectToFacebook');
  Route::get('login/facebook/callback', 'Auth\AuthController@getFacebookCallback');

  Route::get('/', function () {
      return view('welcome');
  });

  Route::get('/about', 'PagesController@about');
  Route::get('/contact', 'PagesController@contact');

  Route::get('users/register', 'Auth\AuthController@getRegister');
  Route::post('users/register', 'Auth\AuthController@postRegister');
});
