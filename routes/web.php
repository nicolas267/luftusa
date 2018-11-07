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

Route::get('/users', 'user@index');

Route::get('users/create', 'user@create')->name('userCreate');

Route::get('users/edit/{data}', 'user@edit')->name('userEdit');

Route::get('users/destroy/{data}', 'user@destroy')->name('userDestroy');

Route::post('users/store', 'user@store');

Route::post('users/upgrade', 'user@upgrade');

Route::get('/userstype', 'usertype@index');

Route::get('userstype/create', 'usertype@create')->name('usertypeCreate');

Route::get('userstype/edit/{data}', 'usertype@edit')->name('usertypeEdit');

Route::get('userstype/destroy/{data}', 'usertype@destroy')->name('usertypeDestroy');

Route::post('userstype/store', 'usertype@store');

Route::post('userstype/upgrade', 'usertype@upgrade');

Route::get('/carstype', 'cartype@index');

Route::get('carstype/create', 'cartype@create')->name('cartypeCreate');

Route::get('carstype/edit/{data}', 'cartype@edit')->name('cartypeEdit');

Route::get('carstype/destroy/{data}', 'cartype@destroy')->name('cartypeDestroy');

Route::post('carstype/store', 'cartype@store');

Route::post('carstype/upgrade', 'cartype@upgrade');