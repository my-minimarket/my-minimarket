<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class CatalogController extends Controller {

    public function show() {
        $products = DB::select('select * from products');
        dd($products);
        return view('product' , ['products' => $products]);
       // return view('catalog', ['headTitle' => 'Catalogue']);
    }
}
