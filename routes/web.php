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

use Illuminate\Support\Facades\Route;

// Welcome
Route::get('/', [
    'as' => 'welcome.show',
    'uses' => 'WelcomeController@show',
]);

// Catalog
Route::get('/catalog/{id?}', [
    'as' => 'catalog.show',
    'uses' => 'CatalogController@show',
]);

// Category
Route::get('/category', 'CategoryController@show');
Route::post('/category', 'CategoryController@store');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/modify/{id}','CategoryController@modify');
Route::put('/category/modify/{id}','CategoryController@update');
Route::delete('/category/delete/{id}','CategoryController@delete');

// Product
Route::get('/product', 'ProductController@show');

// Basket
Route::get('/basket', 'BasketController@show');

// Customer
Route::get('/customer', 'CustomerController@show');
