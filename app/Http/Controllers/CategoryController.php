<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CategoryController extends Controller {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show() {
        $categories = Category::all();
        return view('categories.index', ['headTitle' => 'Catégories', 'categories' => $categories]);
    }

    public function create() {
        return view('categories.create', ['headTitle' => 'Catégories']);
    }

    public function store() {
        $category = new Category();
        $category->description = request('description');
        $category->save();
        $categories = Category::all();
        return view('categories.index',  ['headTitle' => 'Catégories', 'categories' => $categories]);
    }

    public function delete() {
        Category::where('id_category', request()->route('id'))->delete();
        $categories = Category::all();
        return view('categories.index',  ['headTitle' => 'Catégories', 'categories' => $categories]);
    }

    public function modify() {
        $category = Category::where('id_category', request()->route('id'))->first();
        return view('categories.modify',  ['headTitle' => 'Catégories', 'category' => $category]);
    }

    public function update() {
        Category::where('id_category', request()->route('id'))->update(['description' => request('description')]);
        $categories = Category::all();
        return view('categories.index',  ['headTitle' => 'Catégories', 'categories' => $categories]);
    }
}
