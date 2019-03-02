@extends('layouts.page')

@section('content')
    <h1 class="text-center">Création d'un nouvelle catégorie</h1>

    <form method="POST" action="{{ asset('/bo/category') }}">
        @csrf
        <div class="d-flex bg-white rounded shadow flex-column p-3" style="margin-bottom:10px">
            <div class="col-md-12">
                <label for="description">Description : </label>
            </div>
            <div class="col-md-12">
                <input type="text" name="description" id="description" class="w-100" placeholder="Description de la catégorie">
            </div>
            <div class="d-flex flex-row-reverse col-md-12 my-3">
                <a href="{{ asset('/bo/category') }}"><input type="button" name="cancel" value="Annuler" class="ml-3"/></a>
                <div class>
                    <button type="submit">Créer</button>
                </div>
            </div>
        </div>
    </form>
@endsection
