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
    return view('home');
});

Route::get('/users', 'User@index');

Route::get('users/create', 'User@create')->name('userCreate');

Route::get('users/edit/{data}', 'User@edit')->name('userEdit');

Route::get('users/destroy/{data}', 'User@destroy')->name('userDestroy');

Route::post('users/store', 'User@store');

Route::post('users/upgrade', 'User@upgrade');

Route::get('/userstype', 'Usertype@index');

Route::get('userstype/create', 'Usertype@create')->name('usertypeCreate');

Route::get('userstype/edit/{data}', 'Usertype@edit')->name('usertypeEdit');

Route::get('userstype/destroy/{data}', 'Usertype@destroy')->name('usertypeDestroy');

Route::post('userstype/store', 'Usertype@store');

Route::post('userstype/upgrade', 'Usertype@upgrade');

Route::get('/carstype', 'Cartype@index');

Route::get('carstype/create', 'Cartype@create')->name('cartypeCreate');

Route::get('carstype/edit/{data}', 'Cartype@edit')->name('cartypeEdit');

Route::get('carstype/destroy/{data}', 'Cartype@destroy')->name('cartypeDestroy');

Route::post('carstype/store', 'Cartype@store');

Route::post('carstype/upgrade', 'Cartype@upgrade');