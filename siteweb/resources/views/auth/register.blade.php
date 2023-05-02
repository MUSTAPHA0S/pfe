@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Login.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<title>Login</title>
    <style>
        .register-wrap{
        width:100%;
        margin:auto;
        max-width:525px;
        height:150vh;
        position:relative;
        box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
    }
    </style>
    
</head>
<body>
<div class="register-wrap">
<div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Creer un compte</label>
        <div class="login-form">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="group">
                            <label for="name" class="label">{{ __('Nom') }}</label>

                            <div class="group">
                                <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="group">
                            <label for="prenom" class="label">{{ __('Prenom') }}</label>

                            <div class="group">
                                <input id="prenom" type="text" class="input @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required >

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="group">
                            <label for="sexe" class="label">{{ __('sexe') }}</label>

                            <div class="group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexe"  value="Homme">
                                    <label class="form-check-label" for="inlineRadio1">Homme</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexe"  value="femme">
                                    <label class="form-check-label" for="inlineRadio2">Femme</label>
                                </div>
                                @error('sexe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="group">
                            <label for="groupage" class="label">{{ __('groupage sanguin') }}</label>

                            <div class="group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="groupage"  value="A+">
                                    <label class="form-check-label" for="inlineRadio1">A+</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="groupage"  value="A-">
                                    <label class="form-check-label" for="inlineRadio2">A-</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="groupage"  value="B+">
                                    <label class="form-check-label" for="inlineRadio1">B+</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="groupage"  value="B-">
                                    <label class="form-check-label" for="inlineRadio2">B-</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="groupage"  value="AB+">
                                    <label class="form-check-label" for="inlineRadio1">AB+</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="groupage"  value="AB-">
                                    <label class="form-check-label" for="inlineRadio2">AB-</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="groupage"  value="O+">
                                    <label class="form-check-label" for="inlineRadio1">O+</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="groupage"  value="O-">
                                    <label class="form-check-label" for="inlineRadio2">O-</label>
                                </div>
                                @error('groupage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="group">
                            <label for="telephone" class="label">{{ __('Telephone') }}</label>

                            <div class="group">
                                <input id="telephone" type="text" class="input @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="group">
                            <label for="dateNaissance" class="label">{{ __('Date de naissance') }}</label>

                            <div class="group">
                                <input id="dateNaissance" type="date" class="input @error('dateNaissance') is-invalid @enderror" name="dateNaissance" value="{{ old('dateNaissance') }}" required autocomplete="dateNaissance">

                                @error('dateNaissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="group">
                            <label for="email" class="label">{{ __('Address E-Mail') }}</label>

                            <div class="group">
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="group">
                            <label for="password" class="label">{{ __('Mot de passe') }}</label>

                            <div class="group">
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="group">
                            <label for="password-confirm" class="label">{{ __('Confirmer le mot de passe') }}</label>

                            <div class="group">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="group">
                            <div class="group offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Creer un compte') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


</body>
</html>