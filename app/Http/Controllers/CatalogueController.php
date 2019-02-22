<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogueController extends Controller {

    public function show() {
        return view('catalogue', ['headTitle' => 'Catalogue']);
    }
}
