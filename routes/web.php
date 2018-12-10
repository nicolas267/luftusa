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
    return redirect('home');
});

Route::get('/template', function () {
    return view('templates/index');
});

Route::middleware(['auth','web'])->group(function () {
   
	Route::get('admin', 'Admin@index');

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

	Route::get('carparts/edit/{datas}', 'Carpart@edit')->name('carpartsEdit');

	Route::get('carparts/destroy/{data}', 'Carpart@destroy')->name('carpartsDestroy');

	Route::post('carparts/store', 'Carpart@store');

	Route::post('carparts/upgrade', 'Carpart@upgrade');

	Route::get('/blogs', 'Blog@index');

	Route::get('blogs/create', 'Blog@create')->name('blogsCreate');

	Route::get('blogs/edit/{data}', 'Blog@edit')->name('blogsEdit');

	Route::get('blogs/destroy/{data}', 'Blog@destroy')->name('blogsDestroy');

	Route::post('blogs/store', 'Blog@store');

	Route::post('blogs/upgrade', 'Blog@upgrade');

	Route::get('cars/create', 'Car@create')->name('carsCreate');

	Route::get('cars/edit/{data}', 'Car@edit')->name('carsEdit');

	Route::get('cars/destroy/{data}', 'Car@destroy')->name('carsDestroy');

	Route::post('cars/store', 'Car@store');

	Route::post('cars/upgrade', 'Car@upgrade');

	Route::get('/cars', 'Car@index');

	Route::get('/carmodels', 'Carmodel@index');

	Route::get('carmodels/create', 'Carmodel@create')->name('carmodelsCreate');

	Route::get('carmodels/edit/{data}', 'Carmodel@edit')->name('carmodelsEdit');

	Route::get('carmodels/destroy/{data}', 'Carmodel@destroy')->name('carmodelsDestroy');

	Route::post('carmodels/store', 'Carmodel@store');

	Route::post('carmodels/upgrade', 'Carmodel@upgrade');

	Route::get('/newsletters','Newsletter@index');

	Route::get('mydata/', 'Mydata@edit');

	Route::post('mydata/store', 'Mydata@upgrade');

	Route::get('/galleries', 'Gallery@index');

	Route::get('galleries/create', 'Gallery@create')->name('galleriesCreate');

	Route::get('galleries/edit/{data}', 'Gallery@edit')->name('galleriesEdit');

	Route::get('galleries/destroy/{data}', 'Gallery@destroy')->name('galleriesDestroy');
	
	Route::get('newsletter/destroy/{data}', 'newsletter@destroy')->name('newsletterDestroy');
	
	Route::post('galleries/store', 'Gallery@store');

	Route::post('galleries/upgrade/{data}', 'Gallery@upgrade')->name('galleriesUpdate');
	
	Route::get('orders', 'Orders@index');

	Route::get('orders/destroy/{id}', 'Orders@destroy')->name('orderDestroy');
	
	Route::get('profile', 'Profile@index');

	Route::post('update', 'Profile@update');
});


Route::get('/blog', 'Blog@blog');

Route::get('blogs/show/{data}', 'Blog@show')->name('blogsShow');

Route::get('home', 'Home@index');

Route::post('newsletter/store','Newsletter@store');

Route::get('contact', 'Contact@index');

Route::get('about', 'About@index');

Route::get('cart', 'Cart@index');

Route::get('cartController/destroy/{id}', 'CartController@destroy')->name('cartDestroy');

Route::resource('cart','CartController');

Route::get('main', 'Main@index');

Route::resource('products','Products');

Auth::routes();

Route::get('/home', 'Home@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout');


Route::get('shipping', 'Shipping@index');

Route::post('contact', 'Contact@store')->name('contact.store');