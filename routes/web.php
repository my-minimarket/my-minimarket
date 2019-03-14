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
Route::post('/customer/modify', 'CustomerController@store');
Route::put('/customer/modify/{$id}', 'CustomerController@modify');
Route::delete('/customer/modify/{id}','CustomerController@delete');


Route::get('/customermodify', 'CustomerModifyController@show');

Route::get('/orders', 'OrdersController@showOrders');

// Address
Route::get('/address', 'AddressController@show');

// Back office
// Category
Route::get('/bo/category', 'BoCategoryController@show');
Route::post('/bo/category', 'BoCategoryController@store');
Route::get('/bo/category/create', 'BoCategoryController@create');
Route::post('/bo/category/modify/{id}','BoCategoryController@modify');
Route::put('/bo/category/modify/{id}','BoCategoryController@update');
Route::delete('/bo/category/delete/{id}','BoCategoryController@delete');

// Product
Route::get('/bo/product', 'BoProductController@show');
Route::post('/bo/product', 'BoProductController@store');
Route::get('/bo/product/create', 'BoProductController@create');
Route::post('/bo/product/modify/{id}','BoProductController@modify');
Route::put('/bo/product/modify/{id}','BoProductController@update');
Route::delete('/bo/product/delete/{id}','BoProductController@delete');

// ProductCategory
Route::get('/bo/product_category', 'BoProductCategoryController@show');
Route::post('/bo/product_category/{product_id}', 'BoProductCategoryController@add');
Route::put('/bo/product_category/{product_id}', 'BoProductCategoryController@store');
Route::delete('/bo/product_category/{product_id}/{category_id}','BoProductCategoryController@delete');

// Address
Route::get('/bo/address', 'BoAddressController@show');
Route::post('/bo/address', 'AddressController@store');
Route::get('/bo/address/create', 'AddressController@create');
//Route::post('/bo/address/modify/{id}','AddressController@modify');
//Route::put('/bo/address/modify/{id}','AddressController@update');
//Route::delete('/bo/address/delete/{id}','AddressController@delete');

// Promotion
Route::get('/promotion', 'PromotionsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
