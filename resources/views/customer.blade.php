@extends('layouts.page')

@section('content')
    <div class="ficheclient">
        <form>
        <div class="form-row">
            <div class="col">
                <label for="inputFirstName20">PRENOM</label>
                <input type="text" class="form-control" placeholder="Prénom">
            <!--</div>
            <div class="col">-->
                <label for="inputLastName">NOM</label>
                <input type="text" class="form-control" placeholder="Nom">
            </div>
        </div>

            <div class="form-row pt-4" >
                <div class="form-group col-md-6">
                    <label for="inputEmail4">EMAIL</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">MOT DE PASSE</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Mot de passe">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">ADRESSE</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="10 rue des petites chattes">
            </div>
            <div class="form-group">
                <label for="inputAddress2">COMPLEMENT</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Etage, autres">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">VILLE</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Paris">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">PAYS</label>
                    <select id="inputState"  class="form-control">
                        <option selected>SELECTIONNER</option>
                        <option>France</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">CODE POSTAL</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>

    </div>
@stop