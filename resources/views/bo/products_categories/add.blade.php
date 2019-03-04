@extends('layouts.page')

@section('content')
    <h1 class="text-center">Produits et catégories</h1>

    <div class="d-flex bg-white shadow p-3 justify-content-between">
        {{ $product->id . " / " . $product->name . " / " . $product->price . "€" }}

        <div class="d-flex">
            <form method="POST" action="/bo/product_category/{{ $product->id }}">
                @method('PUT')
                @csrf
                <select name="category">
                    @foreach($categories as $category)
                        <div class="d-flex bg-white shadow pl-5 pr-3 pb-3 justify-content-between">
                            <option value="{{ $category->id }}">{{ $category->description }}</option>
                        </div>
                    @endforeach
                </select>
                <input type="submit" name="add" value="Ajouter cette catégorie" class="ml-3"/>
                <a href="{{ asset('/bo/product_category') }}"><input type="button" name="cancel" value="Annuler" class="ml-3"/></a>
            </form>
        </div>
    </div>
    <br>
@endsection
