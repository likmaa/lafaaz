@extends('layouts.header')
@section('title', $actu->titre . ' - Actualité')
@section('content')
<!-- SECTION 1 -->
<section class="realisationSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h1 class="text-light mt-5 ms-4" style="font-size: small;">
                        <a href="{{ route('Accueil') }}" class="text-light">Accueil</a> / <a href="{{ route('actu1') }}" class="text-light">Actualités</a> / {{ $actu->titre }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

<section class="dactuSection1">
    <div class="container">
        <div class="row" style="position: relative;">
            <div class="col-lg-8 col-md-7">
                <div class="col-lg-12">
                    <div class="row my-4 mx-lg-0 mx-2 mx-md-0">
                        <img src="{{$actu->image}}" class="img-fluid d-lg-block d-none d-md-block" style="height: 80vh; object-fit: cover; object-position: center;" alt="{{$actu->titre}}">
                        <img src="{{$actu->image}}" class="img-fluid d-lg-none d-block d-md-none" style="height: 40vh; object-fit: cover; object-position: center;" alt="{{$actu->titre}}">
                        <h2 class="card-title text-body-secondary my-4">{{ $actu->titre }}</h2>
                        <p class="card-text lead">
                            <h6 class="text-bold fw-light">Publié le {{$actu->created_at}}</h6>
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
    
                    <p class="card-text lead mx-3 mx-lg-0 mx-md-0">
                        {!! $actu->description !!}
                    </p>

                    <div class="row mt-5 mx-lg-0 mx-3 mx-md-0">
                        
                        <div class="col-lg-6 col-md-6 @if(!is_null($previousActu)) border @endif py-4 px-3" style="text-align: left">
                            @if (!is_null($previousActu))
                                <a href="{{ route('actu2', $previousActu->id) }}" style="position: relative" class="d-flex justify-content-center align-items-center w-100 h-100">
                                    <i class="bi bi-chevron-left" style="position: absolute; left: 0%"></i>
                                    <span class="ms-5">
                                        {{ $previousActu->titre }}
                                    </span>
                                </a>
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-6 @if(!is_null($nextActu)) border @endif py-4 px-3" style="text-align: right"> 
                            @if (!is_null($nextActu))
                                <a href="{{ route('actu2', $nextActu->id) }}" style="position: relative" class="d-flex justify-content-center align-items-center w-100 h-100">
                                    <span class="me-5">
                                        {{ $nextActu->titre }}
                                    </span>
                                    <i class="bi bi-chevron-right" style="position: absolute; right: 0%;"></i> 
                                </a> 
                            @endif
                        </div>
                    </div>
                    
                </div>


            </div>

            <div class="offset-lg-1 col-lg-3 offset-md-1 col-md-4 mt-4">
                <h5 style="text-align: center" class="mt-3 mt-lg-0 mt-md-0">Articles recommandés</h5>
                <div class="mt-4 mb-5 underline_blue"></div>

                <div class="row">

                    @foreach($actus as $actu)
                    <div class="col-lg-12 mb-4">

                        <a class="text-dark" href="{{route('actu2' , $actu->id)}}">

                            <div class="row mx-lg-0 mx-md-0 mx-sm-2 mb-4 mb-lg-0 mb-md-0 mb-sm-0 mx-3">
                                <img src="{{$actu->image}}" style="object-fit: cover; object-position: center; height: 100%;" class="col-lg-4 d-lg-block d-none px-lg-0" alt="...">
                                <img src="{{$actu->image}}" style="object-fit: cover; object-position: center;" class="col-lg-4 d-lg-none d-block mb-2 px-lg-0" height="200" alt="...">
                                <div class="col-lg-8 d-flex flex-column justify-content-center align-item-center">
                                    @php 
                                        $titre = (strlen($actu->titre) > 40) ? substr($actu->titre, 0, 40) . '...' : substr($actu->titre, 0, 40);
                                    @endphp

                                    <small class="text-body-secondary">
                                        {{$actu->created_at}}
                                    </small>
                                    <small class="mt-2 text-body-secondary">
                                        {{$titre}}
                                    </small>
                                
                                </div>
                            </div>

                        </a>

                    </div>
                    @endforeach
        
                </div>

                <h5 style="text-align: center;" class="mt-4">Partagez sur vos réseaux</h5>
                <div class="mt-4 mb-5 underline_blue"></div>

                <div class="card mx-lg-0 mx-md-0 mx-sm-2 mb-4 mb-lg-0 mb-md-0 mb-sm-0 mx-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-9">
                            <div class="card-body">
                                <p class="card-text"><small class="text-body-secondary lead">Facebook</small></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 pt-3 col-3">
                            <a href="">
                                <i class="bi bi-facebook " class="img-fluid rounded-end"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mx-lg-0 mx-md-0 mx-sm-2 mb-4 mb-lg-0 mb-md-0 mb-sm-0 mx-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-9">
                            <div class="card-body">
                                <p class="card-text"><small class="text-body-secondary lead">Instagram</small></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 pt-3 col-3">
                            <a href="">
                                <i class="bi bi-instagram" class="img-fluid rounded-end"></i>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mx-lg-0 mx-md-0 mx-sm-2 mb-4 mb-lg-0 mb-md-0 mb-sm-0 mx-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-9">
                            <div class="card-body">
                                <p class="card-text"><small class="text-body-secondary lead">Linkedin</small></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 pt-3 col-3">
                            <a href="">
                                <i class="bi bi-linkedin" class="img-fluid rounded-end"></i>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mx-lg-0 mx-md-0 mx-sm-2 mb-4 mb-lg-0 mb-md-0 mb-sm-0 mx-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-9">
                            <div class="card-body">
                                <p class="card-text"><small class="text-body-secondary lead">Twitter</small></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 pt-3 col-3">
                            <a href="">
                                <i class="bi bi-x-lg" class="img-fluid rounded-end"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card mx-lg-0 mx-md-0 mx-sm-2 mb-4 mb-lg-0 mb-md-0 mb-sm-0 mx-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-9">
                            <div class="card-body">
                                <p class="card-text"><small class="text-body-secondary lead">Tiktok</small></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 pt-3 col-3">
                            <a href="">
                                <i class="bi bi-tiktok" class="img-fluid rounded-end"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mx-lg-0 mx-md-0 mx-sm-2 mb-4 mb-lg-0 mb-md-0 mb-sm-0 mx-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-9">
                            <div class="card-body">
                                <p class="card-text"><small class="text-body-secondary lead">Youtube</small></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 pt-3 col-3">
                            <a href="">
                                <i class="bi bi-youtube" class="img-fluid rounded-end"></i>

                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="dactuSection2">
    <div class="container">
        <h3 class="lead text-bolder ms-lg-0 ms-md-0 ms-2 me-lg-5 me-md-5 me-2">Autres actualités</h3>

        <div class="row">
            @foreach($autresactus as $actu)
            <div class="col-lg-4 col-md-4 mt-4">
                <div class="card mb-5 ms-lg-0 ms-md-0 ms-sm-0 ms-2 me-lg-5 me-md-1 me-2 mt-3">
                    <img src="{{$actu->image}}" class="card-img-top" height="200" alt="...">
                    <div class="card-body">
                        <p class="card-text"><small class="text-body-secondary">
                                Publié le : {{$actu->created_at}}</small></p>
                        <h5 class="card-title my-4">
                            {{$actu->titre}}
                        </h5>
                        <p class="card-text">
                            <small class="text-body-secondary">
                                <a class="" href="{{route('actu2' , $actu->id)}}">
                                    Lire l'intégralité
                                </a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 offset-lg-4">
                <a class="" href="{{route('actu1')}}">
                    <button class="py-2 w-100">
                            Plus d'actualités
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection