@extends('layouts.page')

@section('content')
<h1>Adresses des clients</h1>

    @foreach ($adresses as $adresse)

        <p> {{$adresse->id}} : Customer lastname : {{$adresse->customer->lastname}}
            <br>
        {{$adresse->street}}, {{$adresse->complement}} {{$adresse->postal_code}} {{$adresse->city}} {{$adresse->country}}</p>


        <br />

    @endforeach

    @foreach ($customers as $custom)
        Custom : {{$custom->firstname}} <br />
        Addresses :
        <ul>
            @foreach ($custom->addresses()->get() as $adresse)
                <li>{{ $adresse->street }}</li>
            @endforeach
        </ul>
    @endforeach




@stop
