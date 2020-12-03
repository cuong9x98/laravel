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
    return view('admin.user.login');
});
// Admin
Route::group(['namespace'=>'admin','prefix'=>'admin'],function(){
	// Home
	Route::group(['namespace'=>'home'],function(){
		Route::get('/index','HomeController@index')->name('admin.home.index');
	});

	// User
	Route::group(['namespace'=>'user','prefix'=>'user'],function(){
		Route::get('login','UserController@login')->name('admin.user.login');
		Route::post('check-login','UserController@checkLogin')->name('admin.user.checkLogin');
	});

	//Category
	Route::group(['namespace'=>'category'],function(){
		Route::resource('category', 'CategoryController');
	});

});