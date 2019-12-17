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

Route::get('/login', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', 'SiegeController@getAll');
Route::get('/services/siege/{id}', 'ServiceController@getAllFromSiege');
Route::get('/service/{id}', 'ServiceController@getService');
Route::get('/services/add', function () {
  return view('/service/add');
});

Route::group(['prefix' => 'sieges'], function(){
    Route::get('/', 'SiegeController@getAll');
    Route::get('/show/{id}', 'SiegeController@getSiege');
    Route::get('/count', 'SiegeController@count');
    Route::post('/update/{id}', 'SiegeController@update');
    Route::get('/delete/{id}', 'SiegeController@delete');
    Route::post('/create', 'SiegeController@create');
    Route::get('/add', function () {
      return view('/siege/add');
  });
  });

Route::group(['prefix' => 'personnels'], function(){
  Route::get('/', 'PersonnelController@getAll');
  Route::get('/delete/{id}', 'PersonnelController@delete');
  Route::get('/add', function () {
    return view('/personnel/add');
});
});
