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

Route::get('/cars', 'CarController@index');

Route::get('/locations', 'LocationController@index');
Route::post('/locations/{location}/like', 'likeController@store');

Route::get('/extras', 'ExtraController@index');

Route::get('/employees', 'EmployeeController@index');
Route::get('/employees/{employee}', 'EmployeeController@index');

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
