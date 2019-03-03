<?php

namespace App\Http\Controllers;

use App\Product;

class BoProductController extends Controller
{
    public function show() {
        $products = Product::all();
        return view('bo.products.index', ['headTitle' => 'BO produits', 'products' => $products]);
    }

    public function create() {
        return view('bo.products.create', ['headTitle' => 'BO produits']);
    }

    public function store() {
        $product = new Product();
        $product->name = request('name');
        $product->price = request('price');
        $product->save();
        $products = Product::all();
        return view('bo.products.index', ['headTitle' => 'BO produits', 'products' => $products]);
    }

    public function delete() {
        Product::where('id_product', request()->route('id'))->delete();
        $products = Product::all();
        return view('bo.products.index', ['headTitle' => 'BO produits', 'products' => $products]);
    }

    public function modify() {
        $product = Product::where('id_product', request()->route('id'))->first();
        return view('bo.products.modify',  ['headTitle' => 'Bo produits', 'product' => $product]);
    }

    public function update() {
        Product::where('id_product', request()->route('id'))->update(['name' => request('name'), 'price' => request('price')]);
        $products = Product::all();
        return view('bo.products.index', ['headTitle' => 'BO produits', 'products' => $products]);
    }
}
