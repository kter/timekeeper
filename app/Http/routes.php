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

Route::group(['prefix' => 'users', 'middleware' => 'admin'], function () {
    // Route::resource('hello', 'App\Controllers\helloController');
    Route::get('/','UserController@index');
    Route::get('new', 'UserController@new');
    Route::post('confirm', 'UserController@confirm');
    Route::post('create', 'UserController@create');
    Route::delete('destroy', 'UserController@destroy');
});

Route::get('login', 'LoginController@new')->middleware('logged_out');
Route::post('login', 'LoginController@create')->middleware('logged_out');
Route::delete('logout', 'LoginController@destroy')->middleware('logged_in');
