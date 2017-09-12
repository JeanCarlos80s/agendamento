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

Route::group(['prefix' => 'reunioes'], function(){
    Route::get('/',         ['as' => 'reuniaos.index',  'uses' => 'ReuniaoController@index']);
    Route::get('novo', 	    ['as' => 'reuniaos.novo', 	'uses' => 'ReuniaoController@novo']);
    Route::post('salvar', 	['as' => 'reuniaos.store', 	'uses' => 'ReuniaoController@store']);
});

Route::get('/', function () {
    return view('welcome');
});
