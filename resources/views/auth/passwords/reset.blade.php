@extends('layouts.layout')
@section('content')

<p class="text-center">Réinitialiser le mot de passe</p>
<form method="POST" action="{{ route('password.update') }}">

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="mb-4">
        <label for="email" class="form-label">Adresse e-mail</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="password-confirm" class="form-label">Confirmer le mot de passe</label>
        <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
    </div>

    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
        Réinitialiser le mot de passe
    </button>
</form>

@endsection