@extends('layouts.page')

@section('content')
    <h1 class="text-center">Catégories</h1>
    @foreach($categories as $category)
        <div class="d-flex bg-white rounded shadow p-3 justify-content-between">
            {{ $category->id_category . " " . $category->description }}
            <div>
                <form method="POST" action="/category/delete/{{ $category->id_category }}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <input type="submit" name="delete" value="Supprimer"/>
                </form>
            </div>
        </div>
        <br>
    @endforeach
    <a href="{{ asset('/category/create' }}"><input type="button" name="create" value="Création"/></a>
@endsection
