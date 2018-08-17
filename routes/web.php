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
    return view('homepage');
});

route::get ('/contact', function () { 
	return view ('contact'); 
});
Route::get('/register', 'UserController@create');

Route::post('customer-registed', 'UserController@store');


Route::post('customer-loggedin', 'UserController@postlogin') ->middleware('login');

Route::get('log-out', 'UserController@logout' );

Route::get('category', function () {

	return view ('categories.index');


});

Route::get('product', function () {

	return view ('products.show');


});


