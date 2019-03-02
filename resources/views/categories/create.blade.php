@extends('layouts.page')

@section('content')
    <h1 class="text-center">Création d'un nouvelle catégorie</h1>

    <form method="POST" action="{{ asset('/category') }}">
        @csrf
        <div class="d-flex bg-white rounded shadow flex-column p-3" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="description">Description : </label>
            </div>
            <div class="col-md-2">
                <input type="text" name="description" id="description" class="w-100" placeholder="Description de la catégorie">
            </div>
            <div class="my-3">
                <div class="col-md-4">
                    <button type="submit">Créer</button>
                </div>
            </div>
        </div>

    </form>
@endsection
