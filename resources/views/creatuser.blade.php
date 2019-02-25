@extends('layouts.page')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="   border border-dark col-md-6 ">
            <div class=" d-flex justify-content-center mt-2">
                <h1 class="d-flex   col-md-10  justify-content-center border border-dark-2 ">
                    INSCRIPTION </h1>
            </div>
<div class="d-flex justify-content-center">
            <div class="col-md-11">
                <form method="post" action="http://httpbin.org/post">
                    <div class="form-group justify-content-between ">
                        <label for="surname">Prénom *  </label>
                        <input name="surname" type="text" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="form-group ">
                        <label for="name">Nom *</label>
                        <input name="name" type="text" class="form-control" id="exampleInputPassword1">

                    </div>

                    <div class="form-group  ">
                        <label for="InputEmail1">Adresse mail *</label>
                        <input name="mail" type="email" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp"
                               placeholder="Entrez mail">
                        <small id="emailHelp" class="form-text text-muted">Nous ne partageons jamais votre mail avec qui
                            que
                            ce
                            soit .
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Mots de passe *</label>
                        <input name="mailbis" type="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Entrez mots de passe">
                    </div>
                    <div class="form-group">
                        <label for="InputPasswordbis">Mots de passe * (Confirmer votre choix)</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Entrez mots de passe">
                    </div>
                    <div class="form-check ">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">J'accepte les conditions générales de vente
                            et
                            la
                            politique de confidentialité</label>
                    </div >

                    <div class="row justify-content-between mb-4 mt-2"> <p>* Chanmps requis</p>
                            <button type="submit" class="btn btn-primary">Envoyé</button></div>
                </form>
            </div>
</div>

        </div>
    </div>
    </div>
@endsection
