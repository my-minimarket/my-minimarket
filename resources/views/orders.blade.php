@extends('layouts.page')

@section('content')
    <H1>COMMANDES</H1>


    @foreach ($order as $item)
        {{$item->lastname}} {{$item->firstname}} {{$item->date_order}}
    @endforeach

@stop