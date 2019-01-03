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
Route::get('/', function()
{
    return view( 'welcome');
});

Route::get('/products', 'ProductController@index')->name('products.index');
Route::post('/products', 'PorductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products/store', 'ProductController@store')->name('products.store');
Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit');
Route::delete('/products/delete/{id}', 'ProductController@destroy')->name('products.destroy');
Route::get('/products/show/{id}', 'ProductController@show')->name('products.show');
Route::post('/products/update/{id}', 'ProductController@update')->name('products.update');
//Route::get('/products/update/{id}', 'ProductController@update')->name('products.update');
Route::get('/users', 'UserController@index')->name('users.index');
Route::post('/users', 'UserController@index')->name('users.index');
