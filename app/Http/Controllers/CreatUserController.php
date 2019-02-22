<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatUserController extends Controller {

    public function show() {
        return view('creatuser', ['headTitle' => 'Creation']);
    }
}
