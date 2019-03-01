@extends('layouts.page')

@section('content')
    @foreach($categories as $category)
        <div class="d-flex bg-white rounded shadow flex-column p-3">
            {{ $category->id_category . " " . $category->description }}
        </div>
        <br>
    @endforeach
@endsection
