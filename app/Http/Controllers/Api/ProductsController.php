<?php

namespace App\Http\Controllers\Api;

use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show($id = null)
    {
        if ($id === null) {
            return response()->json(Product::all());
        } else {
            return response()->json(Product::find($id));
        }
    }

    public function store(Request $request)
    {
        // TODO : Ajouter la validation des données d'entrée
        $product = Product::create($request->all());

        return response()->json([
            'message' => 'Great success! New product created',
            'id' => $product->id
        ]);
    }

    public function delete($id)
    {
        Product::where('id', $id)->delete();

        return response()->json([
            'message' => 'Great success! product deleted',
        ]);
    }

    public function update($id, Request $request)
    {
        // TODO : Ajouter la validation des données d'entrée
        Product::where('id', $id)->update(['name' => $request->name, 'price' => $request->price]);

        return response()->json([
            'message' => 'Great success! Product modified',
            'id' => $id
        ]);
    }


}
