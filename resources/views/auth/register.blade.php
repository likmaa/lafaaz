@extends('layouts.layout')
@section('content')

<p class="text-center">INSCRIPTION</p>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputtext1" class="form-label">Nom</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputtext1" aria-describedby="textHelp" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-4">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="exampleInputPassword1">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-4">
        <label for="password-confirm" class="form-label">Confirmé le mot de passe</label>
        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="password-confirm">

    </div>
    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
    {{ __("S'inscrire") }}
    </button>
    <!-- <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">{{ __("S'inscrire") }}</a> -->
    <div class="d-flex align-items-center justify-content-center">
        <p class="fs-4 mb-0 fw-bold">Vous avez deja un compte?</p>
        <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">
            {{ __('Connexion') }}
        </a>
    </div>
</form>

@endsection