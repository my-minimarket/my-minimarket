<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addresses;

class AddressController extends Controller
{
    public function show() {

        $id = request()->route('id');
        if ($id) {
            $address = Addresses::where('id_address', $id)->get();
        } else {
            $address = Addresses::all();
        }
        return view('address', ['adresses' => $address, 'headTitle' => 'Adresses']);
    }

    public function create() {
        $address = Addresses::all();

        return view('address', ['adresses' => $address, 'headTitle' => 'Adresses']);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store() {
        $address = new addresses();

        $address->name = request('name');
        $address->description = request('description');
        $address->category_id = request('category');
        $address->price = request('price');


        $address->save();

        $addresses = Addresses::all();

        return view('address', ['adresses' => $address, 'headTitle' => 'Adresses']);
    }

    public function delete() {
        $id = request()->route('id');
        $address = Addresses::where('id_address', $id)->get();

        $address-> delete();

        return view('address', ['headTitle' => 'Adresses']);
    }
}
