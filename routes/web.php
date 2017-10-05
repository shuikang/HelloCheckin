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

Route::get('/', 'CheckinController@index');
Route::post('/', 'CheckinController@enterCode');
Route::get('/checkin', 'CheckinController@checkinPage');
Route::get('/checkin/{code}', 'CheckinController@checkin');
Route::get('/export', 'CheckinController@export');

Route::get('/test', 'CheckinController@test');
