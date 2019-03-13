@extends('layouts.page')

@section('content')

    @foreach ($customer as $item)
        {{$item->date_bill}} {{$item->date_order}}
    @endforeach


    <div class="d-flex justify-content-center">
        <div class="   border border-dark col-md-6 ">
            <div class=" d-flex justify-content-center mt-2">
                <h1 class="d-flex   col-md-10  justify-content-center border border-dark-2 ">
                    INSCRIPTION </h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-11">
                    <form  method="post" action="/customer/modify">
                        {{ csrf_field() }}
                        <div class="form-group justify-content-between">
                            <label for="exampleInputPassword1">Prénom * </label>
                            <input name="firstname" type="text" class="form-control" id="exampleInputPassword1" required>
                </div>

                        <div class="form-group ">
                            <label for="exampleInputPassword1">Nom *</label>
                            <input name="lastname" type="text" class="form-control" id="exampleInputPassword1" required>

                        </div>

                        <div class="form-group  ">
                            <label for="mail">Adresse mail *</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   placeholder="Entrez mail" required>
                            <small id="email" class="form-text text-muted">Nous ne partageons jamais votre mail avec qui
                                que
                                ce
                                soit .
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="InputPassword1">Mots de passe *</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="Entrez mots de passe" required>
                        </div>
                        <div class="form-group">
                            <label for="InputPasswordbis">Mots de passe * (Confirmer votre choix)</label>
                            <input name="password"  type="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="Entrez mots de passe" required>
                        </div>
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">J'accepte les conditions générales de vente
                                et
                                la
                                politique de confidentialité</label>
                        </div>

                        <div class="row justify-content-between mb-4 mt-2"><p>* Chanmps requis</p>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
