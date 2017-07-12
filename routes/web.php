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
Route::get('/home','myWorkController@getWork')->name('home');
Route::post('/themcv','myWorkController@postWork')->name('add');

Route::get('/delete/{id}','myWorkController@deleteWork')->name('delete');

Route::get('/done/{id}','myWorkController@doneWork');


