@extends('layouts.page')

@section('content')
    <h2 class="text-center"><small>
        MES INFORMATIONS
        </small></h2>
    <div class="ficheclient">
        <form>
            <div class="container p-0 d-flex">
                <p>CIVILITE</p>
                <form role="form">
                    <label class="radio-inline pl-3">
                        <input type="radio" name="optradio">Madame
                    </label>
                    <label class="radio-inline pl-3">
                        <input type="radio" name="optradio">Monsieur
                    </label>
                </form>
            </div>
        <div class="form-row">
            <div class="col-xs-4">
                <label for="inputFirstName20">PRENOM</label>
                <input type="text" class="form-control" placeholder="Prénom" disabled>
            </div>
            <div class="col-xs-4">
                <label for="inputLastName">NOM</label>
                <input type="text" class="form-control" placeholder="Nom" disabled>
            </div>
        </div>

            <div class="form-row pt-4" >
                <div class="col-xs-4">
                    <label for="inputEmail4">EMAIL</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" disabled>
                </div>

            </div>
            <div class="form-group">
                <label for="inputAddress">ADRESSE</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="10 rue des petites chattes" disabled>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">VILLE</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Paris" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">PAYS</label>
                    <select id="inputState"  class="form-control" disabled>
                        <option selected>SELECTIONNER</option>
                        <option>France</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">CODE POSTAL</label>
                    <input type="text" class="form-control" id="inputZip" disabled>
                </div>
            </div>
            <div class="form-group">
            </div>

            <div class="form-group">
                <label for="sel1">DATE DE NAISSANCE</label>
                <select class="col-xs-2 pl-3" id="sel1" disabled>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>

                <select class="col-xs-3 pl-3" id="sel1" disabled>
                    <option>Janvier</option>
                    <option>Fevrier</option>
                    <option>Mars</option>
                    <option>Avril</option>
                    <option>Mai</option>
                    <option>Juin</option>
                    <option>Juillet</option>
                    <option>Aout</option>
                    <option>Septembre</option>
                    <option>Octobre</option>
                    <option>Octobre</option>
                    <option>Decembre</option>
                </select>

                <select class="col-xs-3" id="sel1" disabled>
                    <option>1950</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary d-block">CHANGER DE MDP</button>
            <button type="submit" class="btn btn-primary mt-2">MODIFIER MES INFORMATIONS</button>
        </form>

        <form>

            <h2 class="text-center"><small>
                    MES ADRESSES
                </small></h2>
            <div class="container mt-5">
                <div class="row col-lg-4">
                    <div class="col-sm-8">
                    <h3 class="text-center"><small>FACTURATION</small></h3>
                    </div>
                </div>
            </div>
        </form>

        <form>
            <div class="container mt-5">
                <div class="row col-lg-30">
                    <div class="col-sm-8">
                        <h3 class="text-center"><small>LIVRAISON</small></h3>
                    </div>
                </div>
            </div>
        </form>

    </div>
@stop