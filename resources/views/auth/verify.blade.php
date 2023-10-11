
@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">Vérifiez votre adresse email</div>

                <div class="card-body text-center">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        Un nouveau lien de vérification a été envoyé à votre adresse e-mail.
                    </div>
                    @endif

                    Avant de poursuivre, veuillez vérifier si vous avez reçu un lien de vérification dans votre courrier électronique. Si vous n'avez pas reçu le courriel,
                    <form class="d-inline" method="POST" action="{{route ('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">cliquez ici pour en demander un autre</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

