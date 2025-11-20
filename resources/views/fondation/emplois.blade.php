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
            <div class="col-lg-7 px-3">
                <div class="row">
                    <h3 class="mb-3"> Vous pourrez être intéressés par les offres d'emploi suivantes. </h3>
                    @foreach($emploies as $emploie)
                    <div class="col-lg-12">
                        <div class="card mb-3 bg-white">
                            <div class="row g-0">
                                <div class="col-md-5 text-center">
                                    <img src="{{config('filesystems.disks.public.url') . $emploie->image}}" class="rounded w-100 h-100" alt="...">
                                </div>

                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h4 class="card-title text-body-secondary px-2">{{$emploie->titre}}</h4>
                                        <h6 class="card-title text-body-secondary p-2">Référence: {{$emploie->reference}}</h6>
                                        <hr class="my-4">
                                        <p class="card-text d-flex flex-column justify-content-between px-2">
                                            <small class="text-body-secondary"><i class="bi bi-briefcase-fill pe-2"></i>Expérience: {{$emploie->experience}}ans</small><br>
                                            <small class="text-body-secondary"><i class="bi bi-mortarboard-fill pe-2"></i>Etudes: {{$emploie->niveaue}}</small><br>
                                            <small class="text-body-secondary"><i class="bi bi-calendar pe-2"></i>Contrat: {{$emploie->contrat}}</small><br>
                                            <small class="text-body-secondary"><i class="bi bi-alarm-fill pe-2"></i>Expire le : {{$emploie->expire}}</small><br>
                                            <a class="text-white" href="{{route('demplois', $emploie->id)}}"><button class="float-end py-1 px-4 my-3 me-4">Voir</button></a>
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

            <div class="offset-1 col-lg-4 px-4">
                <h3>Projets récents</h3>
                <div class="row">
                    @foreach($projets as $projet)
                    <div class="col-lg-12 border px-0 mb-3">
                        <div class="card-img-top" style="height: 250px; background: url('{{ config('filesystems.disks.public.url') . $projet->image }}'); background-size:cover; background-repeat: no-repeat"></div>
                        
                        <div class="card bg-white py-2 px-3">
                            <div class="card-body py-2">
                                <h6 class="card-title text-body-secondary">{{$projet->titre}}</h6>
                                <p class="card-text">
                                    <small class="text-body-secondary">Date de lancement : {{$projet->date}}</small>
                                    <br> <a href="{{route('detail', $projet->id)}}">Voir plus</a>
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