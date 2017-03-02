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
Route::get('/', ['as' => 'home', 'uses' => function(){
	return view('index');
}]);

Route::get('/details/1', ['as'=>"details_1", "uses"=>function () {
    return view('1');
}]);

Route::post('/details/2','FormController@firstSubmit')->name('next');



