@extends('layouts.page')

@section('headTitle')
    Connexion
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="border border-dark col-md-6">
            <div class="d-flex justify-content-center mt-2">
                <h1 class="d-flex   col-md-10  justify-content-center border border-dark-2 ">
                    LOGIN </h1>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-11">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">Adresse mail</label>
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   value="{{ old('email') }}" placeholder="Entrez votre adresse mail" required
                                   autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" placeholder="Entrez votre mot de passe" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group row justify-content-between">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Se souvenir de moi</label>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Se connecter</button>
                                <a href="{{ route('welcome.show') }}\">
                                    <button type="button" class="btn btn-secondary">Annuler</button>
                                </a>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
