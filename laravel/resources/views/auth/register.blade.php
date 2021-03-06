@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("S'inscrire") }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Firstname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="Firstname" type="text" class="form-control @error('Firstname') is-invalid @enderror" name="Firstname" value="{{ old('Firstname') }}" required autocomplete="Firstname" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Lastname" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="Lastname" type="text" class="form-control @error('Lastname') is-invalid @enderror" name="Lastname" value="{{ old('Lastname') }}" required autocomplete="Lastname" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __("l'adresse email") }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <i class="fas fa-eye" id="toggle-password"  onclick="Pass()" data-toggle="tooltip" data-placement="top" title="Afficher le mot de passe"style=" position: relative; top: 10px; "></i>

                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation ') }}</label>
                            <div class="col-md-6">
                               <input id="password-confirm" type="password"  class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <i class="fas fa-eye" id="toggle-password1" data-toggle="tooltip" data-placement="top" title="Afficher le mot de passe" onclick="Cpass()" style=" position: relative; top: 10px; "></i>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __("S'inscrire") }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function Pass() {
   var x = document.getElementById("password");
   var y = document.getElementById("toggle-password");

   if (x.type === "password") {
     x.type = "text";
     y.className="fas fa-eye-slash";
      y.title="Masquer mot de passe";

   } else {
     x.type = "password";
     y.className="fas fa-eye";
     y.title="Afficher mot de passe";
   }
 }
 function Cpass() {
   var x = document.getElementById("password-confirm");
   var y = document.getElementById("toggle-password1");
   if (x.type === "password") {
     x.type = "text";
     y.className="fas fa-eye-slash";
      y.title="Masquer mot de passe";
   } else {
     x.type = "password";
     y.className="fas fa-eye";
     y.title="Afficher mot de passe";
   }
 }
     </script>

@endsection
