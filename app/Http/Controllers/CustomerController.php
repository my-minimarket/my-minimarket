<?php

namespace App\Http\Controllers;

use http\Env\Request;

class CustomerController extends Controller {

    public function show() {
        return view('customer', ['headTitle' => 'Creation']);
    }


    public function store(){

        $customer = new Customer();
        $customer->id_customer = request('id_customer');
        $customer->firstname = request('firstname');
        $customer->lastname = request('lastname');
        $customer->password = request('password');
        $customer->phone = request('phone');
        $customer->email = request('email');
        $customer->save();
        $customers = Customer::all();
        return view('customer.modify', ['headTitle' => 'Compte client', 'customers' => $customers]);

    }

    public function delete() {
        Customer::where('id_customer', request()->route('id_customer'))->delete();
        $customers = Customer::all();
        return view('customer.modify', ['headTitle' => 'Compte client', 'customers' => $customers]);
    }

    public function modify() {
        $customers = Customer::where('id_customer', request()->route('id_customer'))->first();
        return view('customer.modify', ['headTitle' => 'Compte client', 'customers' => $customers]);
    }
}
