@extends('layouts.layout')
@section('content')

<p class="text-center">Confirmation de mot de passe</p>

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf
    <div class="mb-4">
        Veuillez confirmer votre mot de passe avant de continuer.
        <label for="exampleInputPassword1" class="form-label mt-2">Mot de passe</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>


    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
        Confirmer le mot de passe
    </button>

    @if (Route::has('password.request'))
    <a class="btn btn-link text-center" href="{{ route('password.request') }}">
        Mot de passe oublié ?
    </a>
    @endif

</form>

@endsection