<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CatalogController extends Controller {

    public function show($id = null) {
        if ($id === null) {
            $products = DB::select('SELECT products.id_product, products.name, products.price, products.picture 
            FROM products 
            INNER JOIN categories_products
	        ON categories_products.PRODUCTS_id_product = products.id_product');
        } else {
            $products = DB::select('SELECT products.id_product, products.name, products.price, products.picture 
            FROM products 
            INNER JOIN categories_products
	        ON categories_products.PRODUCTS_id_product = products.id_product
            WHERE categories_products.CATEGORIES_id_category = ?;', [$id]);
        }
        return view('catalog', ['headTitle' => 'Catalogue', 'products' => $products]);
    }
}
