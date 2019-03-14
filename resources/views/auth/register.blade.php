@extends('layouts.page')

@section('headTitle')
    Enregistrement
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="border border-dark col-md-6">
            <div class="d-flex justify-content-center mt-2">
                <h1 class="d-flex   col-md-10  justify-content-center border border-dark-2 ">
                    INSCRIPTION </h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-11">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="firstname">Prénom<sup>*</sup></label>
                            <input id="firstname" type="text"
                                   class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                   name="firstname" value="{{ old('firstname') }}" placeholder="Entrez votre prénom"
                                   required autofocus>

                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="lastname">Nom<sup>*</sup></label>
                            <input id="lastname" type="text"
                                   class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                   name="lastname" value="{{ old('lastname') }}" placeholder="Entrez votre nom" required
                                   autofocus>

                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse mail<sup>*</sup></label>
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   value="{{ old('email') }}" placeholder="Entrez votre adresse mail" required>
                            <small id="email" class="form-text text-muted">Nous ne partagerons jamais votre mail avec
                                qui que ce soit.
                            </small>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Mot de passe<sup>*</sup></label>
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" placeholder="Entrez votre mot de passe" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirmation du mot de passe<sup>*</sup></label>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" placeholder="Entrez votre mot de passe" required>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkCGV" required>
                            <label class="form-check-label" for="checkCGV">J'accepte les conditions générales de vente
                                et la politique de confidentialité.</label>
                        </div>

                        <div class="form-group row justify-content-between mb-4 mt-2">
                            <p><sup>*</sup>Champs requis</p>
                            <div>
                                <button type="submit" class="btn btn-primary">S'enregistrer</button>
                                <a href="{{ route('welcome.show') }}\"><button type="button" class="btn btn-secondary">Annuler</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
