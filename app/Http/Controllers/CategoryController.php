<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller {

    public function show() {
        $categories = Category::all();
        return view('category', ['headTitle' => 'Catégories', 'categories' => $categories]);
    }
}
