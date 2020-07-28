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
Route::get('/',function(){
  return view('welcome');
});
Route::get('/content',function(){
    return view('teams.content');
});

Route::group(['prefix' => 'customers'], function(){
  Route::get('/', 'CustomerController@index')->name('index');
  Route::get('/create', 'CustomerController@create')->name('create');
  Route::post('/', 'CustomerController@store')->name('store');
  Route::get('/{id}', 'CustomerController@edit')->name('edit');
  Route::put('/{id}/update', 'CustomerController@update')->name('update');
  Route::delete('/{id}', 'CustomerController@delete')->name('delete');
});
