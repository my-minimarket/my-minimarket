<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Carbon\Carbon;

class BoProductCategoryController extends Controller
{
    public function show()
    {
        $products = Product::all();
        return view('bo.products_categories.index', ['headTitle' => 'BO produits catégories', 'products' => $products]);
    }

    public function add()
    {
        $product = Product::find(request()->route('product_id'));
        $productCategories = [];
        foreach ($product->categories()->get() as $productCategory) {
            $productCategories[] = $productCategory->id;
        }
        $categories = Category::whereNotIn('id', $productCategories)->get();
        return view('bo.products_categories.add', ['headTitle' => 'BO produits', 'product' => $product, 'categories' => $categories]);
    }

    public function store()
    {
        $product = Product::find(request()->route('product_id'));
        $product->categories()->attach(request('category'), ['created_at' => Carbon::today(), 'updated_at' => Carbon::today()]);
        return redirect('/bo/product_category');
    }

    public function delete()
    {
        Product::find(request()->route('product_id'))->categories()->detach(request()->route('category_id'));
        return redirect('/bo/product_category');
    }
}
