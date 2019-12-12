<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('auth/login', 'AuthController@login');

Route::group(['prefix' => 'sieges'], function(){
    Route::get('/', 'SiegeController@getAll');
    Route::get('/show/{id}', 'SiegeController@getSiege');
    Route::get('/count', 'SiegeController@count');
    Route::post('/update/{id}', 'SiegeController@update');
    Route::get('/delete/{id}', 'SiegeController@delete');
    Route::post('/create', 'SiegeController@create');
  });

  Route::group(['prefix' => 'services'], function(){
    // Route::get('/', 'ServiceController@getAll');
    // Route::get('/show/{id}', 'ServiceController@getService');
    // Route::get('/count', 'ServiceController@getCount');
    // Route::post('/update', 'ServiceController@updateService');
    // Route::get('/delete/{id}', 'ServiceController@deleteService');
    // Route::post('/create', 'ServiceController@createService');
  });

  Route::group(['prefix' => 'personnels'], function(){
    // Route::get('/', 'PersonnelController@getAll');
    // Route::get('/show/{id}', 'PersonnelController@getPersonnel');
    // Route::get('/count', 'PersonnelController@getCount');
    // Route::post('/update', 'PersonnelController@updatePersonnel');
    // Route::get('/delete/{id}', 'PersonnelController@deletePersonnel');
    // Route::post('/create', 'PersonnelController@createPersonnel');
  });

  Route::group(['prefix' => 'depenses'], function(){
    // Route::get('/', 'DepenseController@getAll');
    // Route::get('/show/{id}', 'DepenseController@getDepense');
    // Route::get('/count', 'DepenseController@getCount');
    // Route::post('/update', 'DepenseController@updateDepense');
    // Route::get('/delete/{id}', 'DepenseController@Depense');
    // Route::post('/create', 'DepenseController@createDepense');
  });
