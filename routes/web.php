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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', 'ProduitController@recent')->name('home');

Route::get('/products', 'ProduitController@index')->name('products');

Route::get('/categories', 'CategorieController@index')->name('categories');
