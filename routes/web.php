<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
//
Route::get('/', function () {
    return view('/auth/login');
});

Route::get('fuck', function () {
    return view('fuck', [
        'name' => '8=========D'
    ]);
});

Route::get('/list-detai', 'ModelController@getDetai');

//Route::get('login', function() {
//    return view('login');
//});

Auth::routes();

Route::get('/home', 'HomeController@index');
