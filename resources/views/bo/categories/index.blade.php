@extends('layouts.page')

@section('content')
    <h1 class="text-center">Catégories</h1>
    @foreach($categories as $category)
        <div class="d-flex bg-white rounded shadow p-3 justify-content-between">
            {{ $category->id_category . " " . $category->description }}
            <div class="d-flex">
                <form method="POST" action="/bo/category/modify/{{ $category->id_category }}" class="ml-3">
                    @csrf
                    <input type="submit" name="modify" value="Modifier"/>
                </form>
                <form method="POST" action="/bo/category/delete/{{ $category->id_category }}" class="ml-3">
                    @method('DELETE')
                    @csrf
                    <input type="submit" name="delete" value="Supprimer"/>
                </form>
            </div>
        </div>
        <br>
    @endforeach
    <a href="{{ asset('/bo/category/create') }}"><input type="button" name="create" value="Créer une nouvelle catégorie"/></a>
@endsection
