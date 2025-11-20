@extends('layouts.header')
@section('title', 'Projet')
@section('content')
<!-- SECTION 1 -->
<section class="realisationSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h1 class="text-light mt-5 ms-4" style="font-size: small;">
                        <a class="text-light" href="{{ route('Accueil') }}">Accueil</a> / <a class="text-light" href="#">Nos Projets</a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

<section class="benevolatSection2">
    <div class="container">
        <div class="row mb-3">
            @foreach($projets->chunk(3) as $sousprojets)
            <div class="row">
                @foreach($sousprojets as $projet)
                <div class="col-lg-4">
                    <div class="card mb-5 m-3">
                        <!-- <img src="{{$projet->image}}" class="card-img-top" height="200" alt="..."> -->
                        <div class="card-img-top" style="height: 250px; background: url('{{config('filesystems.disks.public.url') . $projet->image}}'); background-size:cover; background-repeat: no-repeat"></div>

                        <div class="card-body pt-5">
                            <p class="card-text">
                                <small class="text-body-secondary">
                                    Débuté le : {{$projet->date}}
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
            @endforeach
        </div>
        {!! $projets->links() !!}


        <div class="row align-items-center mt-5 pt-2">
            <div class="col-lg-3 mb-5 offset-lg-4">
                <button class="w-100"> <a href="{{route('travail')}}">Nous rejoindre</a></button>
            </div>
        </div>
    </div>
</section>
@endsection