<?php

namespace App\Http\Controllers;

use App\Customer;
use http\Env\Request;

class CustomerController extends Controller {

    public function show() {
        return view('customer', ['headTitle' => 'Creation']);
    }


    public function store(){

        $customer = new Customer();
        $customer->firstname = request('firstname');
        $customer->lastname = request('lastname');
        $customer->password = request('password');
        $customer->phone = request('phone');
        $customer->email = request('email');
        $customer->save();

        return view('customer.modify', ['headTitle' => 'Compte client', 'customer' => $customer]);

    }

    public function delete() {
        Customer::where('id_customer', request()->route('id_customer'))->delete();
        $customers = Customer::all();
        return view('customer.modify', ['headTitle' => 'Compte client', 'customers' => $customers]);
    }

    public function modify($id) {
        $customers = Customer::where('id_customer', request()->route('id_customer'))->first();
        return view('customer.modify', ['headTitle' => 'Compte client', 'customers' => $customers]);
    }

    public function update() {
        $customers = Customer::where('id_customer', request()->route('id_customer'))->first();
        return view('customer.modify', ['headTitle' => 'Compte client', 'customers' => $customers]);
    }


}
