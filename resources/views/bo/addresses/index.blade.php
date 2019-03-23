@extends('layouts.page')

@section('content')
    <h1 class="text-center">Adresses</h1>

    @foreach($addresses as $address)

        <div class="d-flex bg-white shadow p-3 justify-content-between">
            {{ $address->id . " " . $address->street . " " . $address->complement . " " . $address->postal_code . " " . $address->city . " " . $address->country }}
            <div class="d-flex">
                @can('changeOwner')
                <form method="POST" action="/bo/addresses/modify/{{ $address->id }}" class="ml-3">
                    @csrf
                    <input type="submit" name="modify" value="Modifier"/>
                </form>
                @endcan
                <form method="POST" action="/bo/addresses/delete/{{ $address->id }}" class="ml-3">
                    @method('DELETE')
                    @csrf
                    <input type="submit" name="delete" value="Supprimer"/>
                </form>
            </div>
        </div>
        <br>
    @endforeach

    <a href="{{ asset('/bo/addresses/create') }}"><input type="button" name="create" value="Créer une nouvelle adresse"/></a>
@endsection
