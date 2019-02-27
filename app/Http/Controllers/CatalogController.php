<?php

namespace App\Http\Controllers;

class CatalogController extends Controller {

    public function show() {
        return view('catalog', ['headTitle' => 'Catalogue']);
    }
}
