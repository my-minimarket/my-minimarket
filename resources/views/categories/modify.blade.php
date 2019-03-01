@extends('layouts.page')

@section('content')
    <h1 class="text-center">Modification d'une catégorie</h1>

    <form method="POST" action="{{ asset('/category') }}">
        @method('PUT')
        @csrf
        <div class="d-flex bg-white rounded shadow flex-column p-3" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="description">Description : </label>
            </div>
            <div class="col-md-2">
                <input type="text" name="description" id="description" placeholder="Description de la catégorie" value="{{ $category->description }}">
            </div>
            <div class="my-3">
                <div class="col-md-4">
                    <button type="submit">Modifier</button>
                </div>
            </div>
        </div>

    </form>
@endsection
