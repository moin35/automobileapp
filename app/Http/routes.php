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

Route::get('user/login','UserController@getlogin');//Authentication Moin
Route::post('user/login','UserController@postlogin');//Authentication Moin
Route::get('dashboard','UserController@index');//Dashboard Main Index Function Moin 
Route::get('logout','UserController@logout');// LogOut Moin

Route::get('/','UserController@getpublicView');//Public View Moin

Route::get('reg','UserController@getregstation');//saif
Route::post('reg','UserController@postregstation');//saif

Route::get('add/year/name','UserController@getYear');//Admin Brand & Year Name Moin
Route::post('add/year/name','UserController@postYear');//Admin Brand & Year Name Moin

Route::get('add/brand/name','UserController@getBrandYear');//Admin Brand & Year Name Moin
Route::post('add/brand/name','UserController@postBrandYear');//Admin Brand & Year Name Moin

