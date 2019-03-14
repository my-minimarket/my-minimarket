@extends('layouts.page')

@section('content')
    <h1>Adresses des clients</h1>

    @foreach ($adresses as $adresse)



    @endforeach

    @foreach ($customers as $custom)
        @foreach ($custom->orders()->get() as $order)
            @foreach ($custom->addresses()->get() as $adresse)
                <ul>
                    <li>Customer Firstname : {{$custom->firstname}}</li>
                    <li>Customer Lastname : {{$adresse->customer->lastname}}</li>
                    <li>Customer id : {{$adresse->id}}</li>
                    <li>Customer Address : {{$adresse->street}} {{$adresse->complement}}</li>
                    <li>Customer CP : {{$adresse->postal_code}} {{$adresse->city}} {{$adresse->country}}</li>
                    <li>Customer Order : {{ $order->date_order }} </li>
                    <li>Bill delivery :{{ $order->date_bill }} </li>
                </ul>

            @endforeach
        @endforeach
    @endforeach


@stop

