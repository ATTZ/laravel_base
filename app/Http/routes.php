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
    return view('welcome');
});

Route::auth();

Route::get('/home', ['uses' => 'HomeController@index', 'middleware' => ['role:maker']]);

Route::get('/admin', ['uses' => 'HomeController@index']);


Route::group(['middleware' => ['IpAuth']],function() {
    
});

Route::group(['middleware' => ['role:maintain']], function() {

    
});

Route::group(['middleware' => ['role:admin']], function() {
    
    Route::resource('admin/conf', 'Admin\\ConfController');
    
});
