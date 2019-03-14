<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BoCategoryController extends Controller {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show() {
        $this->authorize('update-category');
        $categories = Category::all();
        return view('bo.categories.index', ['headTitle' => 'Catégories', 'categories' => $categories]);
    }

    public function create() {
        return view('bo.categories.create', ['headTitle' => 'Catégories']);
    }

    public function store() {
        $category = new Category();
        $category->description = request('description');
        $category->save();
        $categories = Category::all();
        return view('bo.categories.index',  ['headTitle' => 'Catégories', 'categories' => $categories]);
    }

    public function delete() {
        Category::where('id', request()->route('id'))->delete();
        $categories = Category::all();
        return view('bo.categories.index',  ['headTitle' => 'Catégories', 'categories' => $categories]);
    }

    public function modify() {
        $category = Category::where('id', request()->route('id'))->first();
        return view('bo.categories.modify',  ['headTitle' => 'Catégories', 'category' => $category]);
    }

    public function update() {
        Category::where('id', request()->route('id'))->update(['description' => request('description')]);
        $categories = Category::all();
        return view('bo.categories.index',  ['headTitle' => 'Catégories', 'categories' => $categories]);
    }
}
