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

Auth::routes();

Route::get('/', 'ProvinceController@index')->name('province.index');
Route::group(['prefix' => 'province'], function() {
	Route::get('{id}', 'ProvinceController@show')->name('province.show');
});

Route::group(['prefix' => 'city'], function() {
	Route::get('{id}', 'CityController@show')->name('city.show');
});

Route::group(['prefix' => 'school'], function() {
	Route::get('{id}', 'SchoolController@show')->name('school.show');
});