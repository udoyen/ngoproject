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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::group(['middleware' => ['web']], function () {
    Route::get('login/facebook', 'Auth\AuthController@redirectToFacebook');
    Route::get('login/facebook/callback', 'Auth\AuthController@getFacebookCallback');
});
