<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CustomerModifyController extends Controller
{
 public function show() {
        return view('customer.modify', ['headTitle' => 'Fiche client']);
    }


}

