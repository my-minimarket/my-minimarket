@extends('layouts.page')

@section('content')
    <h1 class="text-center">Création d'un nouveau produit</h1>

    <form method="POST" action="{{ asset('/bo/product') }}">
        @csrf
        <div class="d-flex bg-white rounded shadow flex-column p-3" style="margin-bottom:10px">
            <div class="mb-3">
                <div class="col-md-12">
                    <label for="name">Nom : </label>
                </div>
                <div class="col-md-12">
                    <input type="text" name="name" id="name" class="w-100" placeholder="Nom du produit">
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-12">
                    <label for="price">Prix : </label>
                </div>
                <div class="col-md-12">
                    <input type="text" name="price" id="price" class="w-100" placeholder="Prix du produit">
                </div>
            </div>
            <div class="d-flex flex-row-reverse col-md-12 mb-3">
                <a href="{{ asset('/bo/product') }}"><input type="button" name="cancel" value="Annuler" class="ml-3"/></a>
                <div class>
                    <button type="submit">Créer</button>
                </div>
            </div>
        </div>
    </form>
@endsection
