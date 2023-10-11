@extends('layouts.header')
@section('title', 'Detail du stage')
@section('content')

<!-- SECTION 1 -->
<section class="aboutSection1">
    <!-- <div class="back"> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 align-self-end">
                <h2>
                    Detail sur l'offre de Stage
                </h2>
            </div>
        </div>
    </div>
    <!-- </div> -->
</section>
<!-- END SECTION 1 -->

<section class="demploi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 my-3">
                <div class="card mb-3 bg-white py-4">
                    <div class="row g-0 px-3">
                        <h3 class="card-title text-body-secondary text-center">{{$stage->titre}}</h3>
                        <div class="col-md-10">
                            <div class="card-body py-2">
                                <p class="card-text">
                                    <small class="text-body-secondary py-5"><i class="bi bi-briefcase-fill px-1"></i>Expérience: {{$stage->experience}}ans</small>
                                    <br><small class="text-body-secondary py-5"><i class="bi bi-mortarboard-fill px-1"></i>Etudes: {{$stage->niveaue}}</small>
                                    <br><small class="text-body-secondary py-5"><i class="bi bi-calendar px-1"></i>Contrat: {{$stage->contrat}}</small>
                                    <br><small class="text-body-secondary py-5"><i class="bi bi-alarm-fill px-1"></i>Publié le: {{$stage->created_at}}</small>
                                    <br><small class="text-body-secondary py-5"><i class="bi bi-alarm-fill px-1"></i>Expire le: {{$stage->expire}}</small>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2 text-center pt-3">
                            <img src="{{$stage->image}}" class="rounded" alt="..." width="95" height="95">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 px-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-3 bg-white p-2">
                            <div class="card-body">
                                <h5 class="card-title text-body-secondary">{{$stage->titre}}</h5>
                                <p class="card-text pt-2 lead">
                                    Référence: <small class="text-body-secondary text-bold-500">{{$stage->reference}}</small>
                                </p>
                                <p class="card-text pt-2 lead">
                                    Date limite de candidature : {{$stage->expire}}
                                </p>

                                <p class="card-text pt-2 lead">
                                    Description de l'offre
                                </p>

                                <p class="card-text pt-2 lead">
                                    {{$stage->description}}

                                </p>
                                <p class="card-text pt-2 lead">
                                    Contrat :
                                    <small class="text-body-secondary text-bold-500 pb-2">
                                        {{$stage->contrat}}
                                    </small>
                                </p>
                                <p class="justify-content-center align-items-center text-center">
                                    @guest
                                    <button class="mt-4 px-5 py-2 justify-content-center"><a href="{{route('login')}}">Postuler</a></button>
                                    @else
                                    <button class="mt-4 px-5 py-2 justify-content-center"><a href="mailto:info@lafaaz.org">Postuler</a></button>
                                    @endguest

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 px-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-3 bg-white py-2">
                            <div class="card-body py-2 text-center">
                                <p class="lead">
                                    Partager l'offre
                                </p>
                                <p class="lead">
                                    <a href="" title="Facebook" class="mx-1">
                                        <i class="bi bi-facebook " class="img-fluid rounded-end"></i>
                                    </a>
                                    <a href="" title="Instagram" class="mx-1">
                                        <i class="bi bi-instagram" class="img-fluid rounded-end"></i>

                                    </a>
                                    <a href="" title="Linkedin" class="mx-1">
                                        <i class="bi bi-linkedin" class="img-fluid rounded-end"></i>

                                    </a>
                                    <a href="" title="Twitter" class="mx-1">
                                        <i class="bi bi-x-lg" class="img-fluid rounded-end"></i>
                                    </a>
                                    <a href="" title="Tiktok" class="mx-1">
                                        <i class="bi bi-tiktok" class="img-fluid rounded-end"></i>
                                    </a>
                                    <a href="" title="Youtube" class="mx-1">
                                        <i class="bi bi-youtube" class="img-fluid rounded-end"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-lg-12">
                <h3 class="card-title text-body-secondary text-uppercase mt-5">Plus d'offres </h3>
                <p class="justify-content-center align-items-center text-center">
                    <button class="mt-4 px-5 py-2 justify-content-center"><a href="{{route('stage')}}">Voir plus d'offres</a></button>

                </p>
            </div>

        </div>
    </div>
</section>
@endsection