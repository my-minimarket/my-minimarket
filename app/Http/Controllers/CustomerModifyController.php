<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerModifyController extends Controller
{
  public function show() {
        return view('customermodify', ['headTitle' => 'Fiche client']);
    }
}
