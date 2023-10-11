@extends('layouts.header')
@section('title', 'Emplois')
@section('content')

<!-- SECTION 1 -->
<section class="aboutSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h2>
                        Nos offres d'emplois
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

<section class="travelSection2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 px-3">
                <div class="row">
                    @foreach($emploies as $emploie)
                    <div class="col-lg-12">
                        <div class="card mb-3 bg-white py-4">
                            <div class="row g-0 px-3">
                                <div class="col-md-2 text-center pt-3">
                                    <img src="{{$emploie->image}}" class="rounded" alt="..." width="95" height="95">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body py-2">
                                        <h4 class="card-title text-body-secondary">{{$emploie->titre}}</h4>
                                        <h6 class="card-title text-body-secondary py-2">Référence: {{$emploie->reference}}</h6>
                                        <hr class="my-4">
                                        <p class="card-text">
                                            <small class="text-body-secondary"><i class="bi bi-briefcase-fill px-1"></i>Expérience: {{$emploie->experience}}ans</small>
                                            <small class="text-body-secondary px-2"><i class="bi bi-mortarboard-fill px-1"></i>Etudes: {{$emploie->niveaue}}</small>
                                            <small class="text-body-secondary px-2"><i class="bi bi-calendar px-1"></i>Contrat: {{$emploie->contrat}}</small>
                                            <small class="text-body-secondary px-2"><i class="bi bi-alarm-fill px-1"></i>Expire le le: {{$emploie->expire}}</small>
                                            <button class="float-end py-1 px-4"><a class="text-white" href="{{route('demplois', $emploie->id)}}">Voir</a></button>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {!! $emploies->links() !!}

                </div>
            </div>

            <div class="col-lg-3 px-3">
                <div class="row">
                    @foreach($projets as $projet)
                    <div class="col-lg-12">
                        <div class="card mb-3 bg-white py-2 px-3">
                            <div class="card-body py-2">
                                <h6 class="card-title text-body-secondary">{{$projet->titre}}</h6>
                                <p class="card-text">
                                    <small class="text-body-secondary">Date de lancement : {{$projet->date}}</small>
                                    <br> <a href="{{route('detail', $projet->id)}}">voir plus</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>


    </div>
</section>
@endsection