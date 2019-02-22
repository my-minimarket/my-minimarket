@extends('layouts.page')

@section('content')

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="flex-column mr-0 card">
        <div class="col-lg-6 pt-5">
            <h1>PEPSI J-COLA - SAKURA</h1>


        </div>
        <div class="row">
            <p class="p-4">
                <img class="img-fluid" src="{{ asset('pictures/products/pepsi-cola-sakura.jpg') }}"
                     alt="Responsive image" width="380" height="380">
            </p>
            <div class="flex-grow-1 px-2 " style="height:380px">
                <div class=" row mx-sm-2 d-flex justify-content-between">
                    <div class="p-2">
                        <p class="p-2">Ref: 605674</p>
                        <p class="p-2">Poids: 0.560Kg</p>
                    </div>
                    <div class="p-2">

                        <p class="text-right"> 2 &nbsp; <i class="fa fa-eur"></i></p>
                    </div>
                    <div class="p-2 justify-self-end">
                        <button type="button" class="btn btn-default btn-lg">
                            <i class="fa fa-minus-circle"></i>
                        </button>
                        <input type="text" name="qty" id="quantity_wanted" value="1" size="4" maxlength="5">
                        <button type="button" class="btn btn-default btn-lg">
                            <i class="fa fa-plus-circle"></i>
                        </button>
                        <p class="p-2 text-right ml-auto">
                            <a href=""><i class="fa fa-cart-plus" style="font-size:50px"></i></a>
                        </p>
                    </div>
                </div>
                <div class="card-body">

                    <p class="card-text p-2">Description produitDescription produitDescription produitDescription
                        produit</p>

                </div>

            </div>
            <div class="flex-grow-1">
                <div class="col-lg-auto">
                    <div class="p-2">
                        <i class="fa fa-star"></i>
                        <i class=" fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class=" fa fa-star-half"></i> &nbsp; 4.5 / 5 <br/><br/>
                    </div>
                    <p class="p-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star-o"></i> Super bon ! mium</p>
                    <p class="p-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i> C'EST EXQUIS !</p>
                    <p class="p-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i
                                class="fa fa-star-o"></i><i class="fa fa-star-o"></i> Pas mal...</p>
                    <div id="customer" class="card d-inline-flex col-12 p-2">
                        <form class="col-12">

                            <div class="form" method="POST" action="">
                                <label for="exampleFormControlTextarea1" class="d-flex">DONNEZ VOTRE AVIS !
                                    <div class="">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star-o"></i>
                                    </div>
                                        <div class="d-flex ml-xl-auto">
                                        <input type="submit" name="Ajouter un avis" value="Ajouter un avis"
                                               class="btn btn-dark align-self-md-end">
                                    </div>
                                </label>

                                <input class="form-control form-control-lg" type="text"
                                       placeholder="Entrez votre texte ici">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




@stop


