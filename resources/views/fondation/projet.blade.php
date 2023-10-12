@extends('layouts.header')
@section('title', 'Projet')
@section('content')
<!-- SECTION 1 -->
<section class="realisationSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h2>
                        Les projets en cours de <br>
                        la Fondation les Amis de A à Z
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

<section class="benevolatSection2">
    <div class="container">
        <div class="row mb-3">
            @foreach($projets as $projet)
            <div class="col mb-5 m-3">
                <div class="card">
                    <img src="{{$projet->image}}" class="card-img-top" height="200" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            <small class="text-body-secondary">
                                Débuter le : {{$projet->date}}
                            </small>
                        </p>
                        <h5 class="card-title my-4">
                            {{$projet->titre}}
                        </h5>
                        <p class="card-text">
                            <small class="text-body-secondary">
                                <a class="" href="{{route('detail', $projet->id)}}">
                                    Lire l'intégralité
                                </a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {!! $projets->links() !!}


        <div class="row align-items-center mt-5 pt-2">
            <div class="col-lg-3 mb-5 offset-lg-4">
                <button class="w-100"> <a href="{{route('travail')}}">Collaboration</a></button>
            </div>
        </div>
    </div>
</section>
@endsection