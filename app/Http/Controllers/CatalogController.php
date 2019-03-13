<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class CatalogController extends Controller {

    public function show($id = null) {
        if ($id === null) {
            $products = Product::all();
        } else {
            $products = Category::find($id)->products()->get();
        }
        return view('catalog', ['headTitle' => 'Catalogue', 'products' => $products]);
    }
}
