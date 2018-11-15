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
    return view('home/index');
});
Route::get('admin', function () {
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

Route::get('/carversions', 'Carversion@index');

Route::get('carversions/create', 'Carversion@create')->name('carversionsCreate');

Route::get('carversions/edit/{data}', 'Carversion@edit')->name('carversionsEdit');

Route::get('carversions/destroy/{data}', 'Carversion@destroy')->name('carversionsDestroy');

Route::post('carversions/store', 'Carversion@store');

Route::post('carversions/upgrade', 'Carversion@upgrade');

Route::get('/carparts', 'Carpart@index');

Route::get('carparts/create', 'Carpart@create')->name('carpartsCreate');

Route::get('carparts/edit/{data}', 'Carpart@edit')->name('carpartsEdit');

Route::get('carparts/destroy/{data}', 'Carpart@destroy')->name('carpartsDestroy');

Route::post('carparts/store', 'Carpart@store');

Route::post('carparts/upgrade', 'Carpart@upgrade');

Route::get('/caryears', 'Caryear@index');

Route::get('caryears/create', 'Caryear@create')->name('caryearsCreate');

Route::get('caryears/edit/{data}', 'Caryear@edit')->name('caryearsEdit');

Route::get('caryears/destroy/{data}', 'Caryear@destroy')->name('caryearsDestroy');

Route::post('caryears/store', 'Caryear@store');

Route::post('caryears/upgrade', 'Caryear@upgrade');

Route::get('/parts', 'Part@index');

Route::get('parts/create', 'Part@create')->name('partsCreate');

Route::get('parts/edit/{data}', 'Part@edit')->name('partsEdit');

Route::get('parts/destroy/{data}', 'Part@destroy')->name('partsDestroy');

Route::post('parts/store', 'Part@store');

Route::post('parts/upgrade', 'Part@upgrade');

Route::get('/blogs', 'Blog@index');

Route::get('blogs/create', 'Blog@create')->name('blogsCreate');

Route::get('blogs/edit/{data}', 'Blog@edit')->name('blogsEdit');

Route::get('blogs/destroy/{data}', 'Blog@destroy')->name('blogsDestroy');

Route::post('blogs/store', 'Blog@store');

Route::post('blogs/upgrade', 'Blog@upgrade');

Route::get('/cars', 'Car@index');

Route::get('cars/create', 'Car@create')->name('carsCreate');

Route::get('cars/edit/{data}', 'Car@edit')->name('carsEdit');

Route::get('cars/destroy/{data}', 'Car@destroy')->name('carsDestroy');

Route::post('cars/store', 'Car@store');

Route::post('cars/upgrade', 'Car@upgrade');

Route::get('/carmodels', 'Carmodel@index');

Route::get('carmodels/create', 'Carmodel@create')->name('carmodelsCreate');

Route::get('carmodels/edit/{data}', 'Carmodel@edit')->name('carmodelsEdit');

Route::get('carmodels/destroy/{data}', 'Carmodel@destroy')->name('carmodelsDestroy');

Route::post('carmodels/store', 'Carmodel@store');

Route::post('carmodels/upgrade', 'Carmodel@upgrade');

Route::get('home', 'Home@index');