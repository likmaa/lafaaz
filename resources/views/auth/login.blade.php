@extends('layouts.layout')
@section('content')

<p class="text-center">Connexion</p>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-4">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div class="form-check">
            <input class="form-check-input primary" type="checkbox" id="flexCheckChecked"  name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label text-dark" for="flexCheckChecked">
                Se souvenir de moi
            </label>
        </div>
        @if (Route::has('password.request'))
        <a class="text-primary fw-bold" href="{{ route('password.request') }}">
            {{ __('Mot de passe oublié?') }}
        </a>
        @endif
    </div>
    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
        Connexion
    </button>
    <div class="d-flex align-items-center justify-content-center">
        <p class="fs-4 mb-0 fw-bold">Devenir membre ?</p>
        <a class="text-primary fw-bold ms-2" href="{{ route('register') }}">
            {{ __('Créer votre compte') }}</a>
    </div>
</form>
@endsection