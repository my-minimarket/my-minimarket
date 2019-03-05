<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class BoAddressController extends Controller
{
    public function show() {

        $id = request()->route('id');
        if ($id) {
            $address = Address::where('id', $id)->get();
        } else {
            $address = Address::all();
        }
        return view('bo.addresses.index', ['addresses' => $address, 'headTitle' => 'Adresses']);
    }

    public function create() {
        $address = Address::all();

        return view('bo.addresses.index', ['addresses' => $address, 'headTitle' => 'Adresses']);


    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store() {
        $address = new Address();

        $address->id = request()->route('id');
        $address->street = request()->route('street');
        $address->complement = request()->route('complement');
        $address->postal_code = request()->route('postal_code');
        $address->city = request()->route('city');
        $address->country = request()->route('country');


        $address->save();

        $addresses = Address::all();

        return view('bo.addresses.index', ['addresses' => $address, 'headTitle' => 'Adresses']);

    }

    public function delete() {
        $id = request()->route('id');
        $address = Address::where('id_address', $id)->get();

        $address-> delete();

        return view('bo.addresses.index', ['addresses' => $address, 'headTitle' => 'Adresses']);

    }
}
