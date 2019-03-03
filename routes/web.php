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

// Product
Route::get('/product', 'ProductController@show');

// Basket
Route::get('/basket', 'BasketController@show');

// Customer
Route::get('/customer', 'CustomerController@show');

// Back office
// Category
Route::get('/bo/category', 'CategoryController@show');
Route::post('/bo/category', 'CategoryController@store');
Route::get('/bo/category/create', 'CategoryController@create');
Route::post('/bo/category/modify/{id}','CategoryController@modify');
Route::put('/bo/category/modify/{id}','CategoryController@update');
Route::delete('/bo/category/delete/{id}','CategoryController@delete');

// Product
Route::get('/bo/product', 'BoProductController@show');
Route::post('/bo/product', 'BoProductController@store');
Route::get('/bo/product/create', 'BoProductController@create');
Route::post('/bo/product/modify/{id}','BoProductController@modify');
Route::put('/bo/product/modify/{id}','BoProductController@update');
Route::delete('/bo/product/delete/{id}','BoProductController@delete');
