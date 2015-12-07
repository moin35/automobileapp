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




Route::get('reg', function () {
    return view('reg');
});
Route::get('test', function () {
    return view('test');
});