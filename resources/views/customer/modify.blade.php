@extends('layouts.page')

@section('headTitle')
    {{ $headTitle }}
@endsection

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/customer.css') }}">

    <div class="text-center">
        <h1>MON COMPTE</h1>
    </div>

    <!-- DEBUT FORM MES INFORMATIONS-->
    <h2>
        <small>
            MES INFORMATIONS
        </small>
    </h2>
    <form method="post" action="/customer/modify">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col-xs-4">
                <label for="inputFirstName20">Prénom</label>
                <input type="text" class="form-control" placeholder="Prénom" value="{{$customers->firstname}}">
            </div>
            <div class="col-xs-4">
                <label for="inputLastName">NOM</label>
                <input type="text" class="form-control" placeholder="Nom" value="{{$customers->lastname}}">
            </div>
        </div>

        <div class="form-row pt-4">
            <div class="col-xs-4">
                <label for="inputEmail4">EMAIL</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                       value="{{$customers->email}}">
            </div>

        </div>


        <div class=" justify-content-end d-flex">
            <div>
                <button type="submit" class="btn btn-primary d-block ">CHANGER DE MDP</button>
            </div>

            <div>
                <button type="submit" class="btn btn-primary d-block ">MODIFIER COMPTE</button>

            </div>
        </div>
    </form>


    <!-- FIN FORM MES INFORMATIONS-->

    <!-- DEBUT FORM MES ADRESSES-->
    <div class="container fluid">
        <div class="col">
            <h2 class="mt-5">
                <small>
                    MES ADRESSES
                </small>
            </h2>
        </div>
        <div class="row">

            <div class="col-sm-6">
                <form class="border border-dark">

                    <div class=" mt-5">

                        <h4>FACTURATION</h4>
                        <div class="form-row">
                            <div class="col-xs-4">
                                <label for="inputFirstName20">PRENOM</label>
                                <input type="text" class="form-control" placeholder="Prénom">
                            </div>
                            <div class="col-xs-4">
                                <label for="inputLastName">NOM</label>
                                <input type="text" class="form-control" placeholder="Nom">
                            </div>
                            <div class="form-row pt-4">
                                <div class="col-xs-4">
                                    <label for="inputEmail4">EMAIL</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                                    >
                                </div>

                            </div>
                            <div class="form-group pt-4 ml-3">
                                <label for="inputAddress">ADRESSE</label>
                                <input type="text" class="form-control" id="inputAddress"
                                       placeholder="10 rue des petites chattes">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputCity">VILLE</label>
                                    <input type="text" class="form-control" id="inputCity" placeholder="Paris">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">PAYS</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>SELECTIONNER</option>
                                        <option>France</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputZip">CODE POSTAL</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <label for="inputFirstName20">NUMERO DE TELEPHONE</label>
                                <input type="number" class="form-control" placeholder="Numéro">
                            </div>
                        </div>
                        <div>

                            <div class="justify-content-end d-flex">

                                <button type="submit" class="btn btn-primary mt-2">SUPPRIMER</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <form>
                    <div class=" other border border-dark">
                        <h4>LIVRAISON</h4>


                        <div class="form-row">
                            <div class="col-xs-4">
                                <label for="inputFirstName20">PRENOM</label>
                                <input type="text" class="form-control" placeholder="Prénom">
                            </div>
                            <div class="col-xs-4">
                                <label for="inputLastName">NOM</label>
                                <input type="text" class="form-control" placeholder="Nom">
                            </div>
                            <div class="form-row pt-4">
                                <div class="col-xs-4">
                                    <label for="inputEmail4">EMAIL</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                                    >
                                </div>

                            </div>
                            <div class="form-group pt-4 ml-3">
                                <label for="inputAddress">ADRESSE</label>
                                <input type="text" class="form-control" id="inputAddress"
                                       placeholder="10 rue des petites chattes"
                                >
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputCity">VILLE</label>
                                    <input type="text" class="form-control" id="inputCity" placeholder="Paris"
                                    >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">PAYS</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>SELECTIONNER</option>
                                        <option>France</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputZip">CODE POSTAL</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <label for="inputFirstName20">NUMERO DE TELEPHONE</label>
                                <input type="number" class="form-control" placeholder="Numéro">
                            </div>
                        </div>
                        <div>
                            <div class="justify-content-end d-flex">
                                <button type="submit" class="btn btn-primary d-block ">AJOUTER</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 other border border-dark">
                    </div>

                </form>
            </div>

            <!-- FIN FORM MES ADRESSES-->
        </div>
    </div>
@endsection
