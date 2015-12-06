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

Route::get('/', function () {
    return view('login');
});
Route::get('dashboard', function () {
    return view('layouts.adminmaster');
});
Route::get('reg', function () {
    return view('reg');
});
Route::get('test', function () {
    return view('test');
});