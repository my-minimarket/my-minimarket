@extends('layouts.page')

@section('content')
<h1>Adresses des clients</h1>

    @foreach ($adresses as $adresse)
        <p> {{$adresse->id}} : {{$adresse->street}}, {{$adresse->complement}} {{$adresse->postal_code}} {{$adresse->city}} {{$adresse->country}}</p>
    @endforeach



@stop

