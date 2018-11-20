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

Route::get('/', function () {
    return view('welcome');
});

Route::get('my-datatables', 'MyDatatablesController@index');
Route::get('get-data-my-datatables', ['as' => 'get.data', 'uses' => 'MyDatatablesController@getData']);

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/nueva-pqr', 'PqrsController@create');

Route::resource('pqrs', 'PqrsController');
