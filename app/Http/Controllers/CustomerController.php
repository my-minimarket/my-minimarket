<?php

namespace App\Http\Controllers;

class CustomerController extends Controller {

    public function show() {
        return view('customer', ['headTitle' => 'Creation']);
    }
}
