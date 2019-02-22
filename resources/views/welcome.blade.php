@extends('layouts.page')

@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('pictures/carousel/slidejapan.png') }}" alt="slide japon" width="1100" height="400">
                <div class="carousel-caption">
                    <h3>SAVEUR DU JAPON</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('pictures/carousel/slideusa.png') }}" alt="fond bleu" width="1100" height="400">
                <div class="carousel-caption">
                    <h3>SELECTION AMERICAINE</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('pictures/carousel/fondvert.png') }}" alt="fond vert" width="1100" height="400">
                <div class="carousel-caption">
                    <h3>SAVEUR D'ITALIE</h3>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- FIN CAROUSEL -->

    <!-- LES 3 BLOCS POUR LES NOUVEAUTES -->
    <section class="section_principal p-5 text-center">
        <h2>LES NOUVEAUTES</h2>


        <div class="row produits p-3">
            <div class="col-md-4">
                <div class="card">
                    <a href="#"><img class="card-img-top" src="{{ asset('pictures/carousel/carregris.png') }}"
                                     alt="carré gris" width="20" height="250"></a>
                    <div class="card-body">
                        <h5 class="card-title">JE DECOUVRE</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <a href="#"><img class="card-img-top" src="{{ asset('pictures/carousel/carregris.png') }}"
                                     alt="Card image cap" width="20" height="250"></a>
                    <div class="card-body">
                        <h5 class="card-title">JE DECOUVRE</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <a href="#"><img class="card-img-top" src="{{ asset('pictures/carousel/carregris.png') }}"
                                     alt="Card image cap" width="20" height="250"></a>
                    <div class="card-body">
                        <h5 class="card-title">JE DECOUVRE</h5>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
