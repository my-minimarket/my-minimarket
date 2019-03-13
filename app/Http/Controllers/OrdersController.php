<?php
namespace App\Http\Controllers;

use App\Order;



class OrdersController extends Controller
{
   public function showOrders() {
        $orders = Order::all();

        return view('orders', ['order' => $orders], ['headTitle' => 'Fiche client']);
    }


}

 /* inner join customers where id_customer = CUSTOMERS_id_customer*/