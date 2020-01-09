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

Route::get('/login', 'AuthController@displayLogin');
Route::post('/login', 'AuthController@login');
Route::get('/lougout', 'AuthController@logout');

Route::get('/', 'SiegeController@getAll');

Route::group(['prefix' => 'services'], function(){
    Route::get('/siege/{id}', 'ServiceController@getAllFromSiege');
    Route::get('/{id}', 'ServiceController@getService');
    Route::get('/create/{id}', 'ServiceController@displayCreate');
    Route::post('/create/{id}', 'ServiceController@create');
    Route::get('/update/{id}', 'ServiceController@displayUpdate');
    Route::post('/update/{id}', 'ServiceController@update');
    Route::post('/updatebudget/{id}', 'ServiceController@updateBudget');
    Route::get('/delete/{id}', 'ServiceController@delete');
});

Route::group(['prefix' => 'sieges'], function(){
    Route::get('/', 'SiegeController@getAll');
    Route::get('/show/{id}', 'SiegeController@getSiege');
    Route::get('/count', 'SiegeController@count');
    Route::get('/update/{id}', 'SiegeController@displayUpdate');
    Route::post('/update/{id}', 'SiegeController@update');
    Route::get('/delete/{id}', 'SiegeController@delete');
    Route::post('/create', 'SiegeController@create');
    Route::get('/create', 'SiegeController@displayCreate');
});

Route::group(['prefix' => 'personnels'], function(){
  Route::get('/', 'UserController@getAll');
  Route::get('/delete/{id}', 'UserController@delete');
  Route::get('/update/{id}', 'UserController@displayUpdate');
  Route::post('/update/{id}', 'UserController@update');
  Route::post('/create', 'UserController@create');
  Route::get('/create', 'UserController@displayCreate');
});

//Routes personnels_service
Route::post('/personnels/services/create/{id}', 'UserServiceController@create');
Route::get('/personnels/services/delete/{id}/{id2}', 'UserServiceController@delete');


