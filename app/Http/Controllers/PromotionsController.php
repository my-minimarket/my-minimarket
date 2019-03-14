<?php

namespace App\Http\Controllers;

use App\Promotion;
use App\Product;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{
    public function show() {
        $promotions = Promotion::all();

        return view('promotion', ['promotions' => $promotions], ['headTitle' => 'PROMOTIONS']);
    }




}