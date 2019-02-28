<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
   public function showorder() {
        $orders = DB::select('select * from orders inner join customers where id_customer = CUSTOMERS_id_customer');

        return view('orders', ['order' => $orders], ['headTitle' => 'Fiche client']);
    }
}