@extends('layouts.page')

@section('content')
    <div class="border border-dark-2">
        <h1 class="d-flex flex-columns align-items-center justify-content-center border border-dark-2 ">
            INSCRIPTION </h1>
        <div class="d-flex flex-columns align-items-center justify-content-center ">


            <form>
                <div class="form-group ">
                    <label for="surname">Prénom</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"
                           placeholder="Entrez mots de passe">
                </div>
                <div class="form-group ">
                    <label for="name1">Nom</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"
                           placeholder="Entrez mots de passe">
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1">Adresse mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Entrez mail">
                    <small id="emailHelp" class="form-text text-muted">Nous ne partageons jamais votre mail avec qui que
                        ce
                        soit .
                    </small>
                </div>
                <div class="form-group ">
                    <label for="exampleInputPassword1">Mots de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                           placeholder="Entrez mots de passe">
                </div>
                <div class="form-group ">
                    <label for="exampleInputPassword1">Mots de passe (Confirmer votre choix)</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                           placeholder="Entrez mots de passe">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">J'accepte les conditions générales de vente et
                        la
                        politique de confidentialité</label>
                </div>
                <button type="submit" class="btn btn-primary">Envoyé</button>
            </form>
        </div>
    </div>
@endsection
