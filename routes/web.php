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

Route::get('/', [
    'as' => 'welcome.show',
    'uses' => 'WelcomeController@show',
]);

Route::get('/catalog/{id?}', [
    'as' => 'catalog.show',
    'uses' => 'CatalogController@show',
]);

Route::get('/category', 'CategoryController@show');
Route::post('/category', 'CategoryController@store');
Route::get('/category/create', 'CategoryController@create');
Route::delete('/category/delete/{id}','CategoryController@delete');
Route::post('/category/modify/{id}','CategoryController@modify');

Route::get('/product', 'ProductController@show');

Route::get('/basket', 'BasketController@show');

Route::get('/customer', 'CustomerController@show');
