@extends('layouts.page')

@section('headTitle')
    {{ $headTitle }}
@endsection

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.css') }}">

    <!--flex row tous les produits -->
    <div class="row flex-column flex-lg-row">
    @foreach($products as $product)
        <!-- product wrapper 01-->
            <section class="col-12 col-lg-6 mb-3 ">
                <!-- product_description_wrapper-->
                @if(request()->route('id') == 7)
                    <div class="p-3 product-description-jap rounded shadow">
                        @elseif(request()->route('id') == 8)
                            <div class="p-3 product-description-usa rounded shadow">
                                @else
                                    <div class="p-3 product-description rounded shadow">
                                    {{--{{(request()->route('id'))}}--}}
                                    @endif
                                    <!-- titre -->
                                        <h3 class="text-uppercase">
                                            <small>{{ $product->name }}</small>
                                        </h3>
                                        <!-- price_wrapper -->
                                        <div class="d-flex ">
                                            <!-- price -->
                                            <p class="h3 mr-auto">
                                                <small>{{ $product->price }} €</small>
                                            </p>
                                        </div>
                                    </div> <!-- End product_description_wrapper-->
                                    <!-- Product_inner -->
                                    <div class="d-flex bg-white rounded shadow flex-column flex-md-row">
                                        <!-- img_product_wrapper-->
                                        <div class="d-flex align-items-end flex-column  p-3">
                                            <!-- img_product-->

                                            <!-- img_product_more-->
                                            <a href="#" title="lien vers la page html">
                                                <img class="mb-auto" src="{{ $product->picture }}" alt="product picture"
                                                     title="product picture" style="width: 100%"/></a>
                                        </div>
                                    </div>
            </section><!-- fin du wrapper -->
        @endforeach
    </div><!--  div row -->
@stop



