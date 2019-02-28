<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function show() {

        $product= DB::select('select name,price from products where id_product=0000000006');
        dd($product);
        return view('product' , ['product' => $product]);
       // return view('product', ['headTitle' => 'Fiche article']);
    }


}
