@extends('layouts.page')

@section('content')
    <h1 class="text-center">Modification d'un produit</h1>

    <form method="POST" action="/bo/product/modify/{{ $product->id }}">
        @method('PUT')
        @csrf
        <div class="d-flex bg-white shadow flex-column p-3" style="margin-bottom:10px">
            <div class="mb-3">
                <div class="col-md-12">
                    <label for="name">Nom : </label>
                </div>
                <div class="col-md-12">
                    <input type="text" name="name" id="name" class="w-100" placeholder="Nom du produit" value="{{ $product->name }}">
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-12">
                    <label for="price">Prix : </label>
                </div>
                <div class="col-md-12">
                    <input type="text" name="price" id="price" class="w-100" placeholder="Prix du produit" value="{{ $product->price }}">
                </div>
            </div>
            <div class="d-flex flex-row-reverse col-md-12 my-3">
                <a href="{{ asset('/bo/product') }}"><input type="button" name="cancel" value="Annuler" class="ml-3"/></a>
                <div class>
                    <button type="submit">Modifier</button>
                </div>
            </div>
        </div>
    </form>
@endsection
