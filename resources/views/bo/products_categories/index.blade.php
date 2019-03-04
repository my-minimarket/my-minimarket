@extends('layouts.page')

@section('content')
    <h1 class="text-center">Produits et catégories</h1>
    @foreach($products as $product)
        <div class="d-flex bg-white shadow p-3 justify-content-between">
            {{ $product->id . " / " . $product->name . " / " . $product->price . "€" }}

            <div class="d-flex">
                <form method="POST" action="#">
                    @csrf
                    <input type="submit" name="add" value="Ajouter une catégorie"/>
                </form>
            </div>
        </div>
        @foreach($product->categories()->get() as $category)
            <div class="d-flex bg-white shadow pl-5 pr-3 pb-3 justify-content-between">
                {{ $category->id . " " . $category->description }}
                <div class="d-flex">
                    <form method="POST" action="/bo/product_category/delete/{{ $product->id }}/{{ $category->id }}">
                        @method('DELETE')
                        @csrf
                        <input type="submit" name="delete" value="Supprimer"/>
                    </form>
                </div>
            </div>
        @endforeach
        <br>
    @endforeach
@endsection
