@extends('layouts.page')

@section('content')
    <h1 class="text-center">Produits</h1>
    @foreach($products as $product)
        <div class="d-flex bg-white rounded shadow p-3 justify-content-between">
            {{ $product->id_product . " / " . $product->name . " / " . $product->price . "€" }}
            <div class="d-flex">
                <form method="POST" action="/bo/product/modify/{{ $product->id_product }}" class="ml-3">
                    @csrf
                    <input type="submit" name="modify" value="Modifier"/>
                </form>
                <form method="POST" action="/bo/product/delete/{{ $product->id_product }}" class="ml-3">
                    @method('DELETE')
                    @csrf
                    <input type="submit" name="delete" value="Supprimer"/>
                </form>
            </div>
        </div>
        <br>
    @endforeach
    <a href="{{ asset('/bo/product/create') }}"><input type="button" name="create" value="Créer un nouveau produit"/></a>
@endsection
