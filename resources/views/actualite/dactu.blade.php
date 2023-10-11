@extends('layouts.header')
@section('title', 'Detail Actualité')
@section('content')
<!-- SECTION 1 -->
<section class="realisationSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h2>
                        Detail sur l'actualité <br>

                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

<section class="dactuSection1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="card-title text-body-secondary my-4 text-center">{{$actu->titre}}</h3>
                <div class="row my-4">
                    <img src="{{$actu->image}}" class="img-fluid" alt="{{$actu->titre}}">
                </div>
            </div>
            <div class="col-lg-9">

                <p class="card-text lead">
                    {{$actu->description}}
                </p>

                <p class="card-text lead mt-5">
                    Publié le: <small class="text-bold">{{$actu->created_at}}</small>
                </p>
            </div>
            <div class="col-lg-3 mt-4">
                <h5>Partage sur :</h5>
                <div class="card mt-5 mb-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-8 col-9">
                            <div class="card-body">
                                <p class="card-text"><small class="text-body-secondary lead">Facebook</small></p>
                            </div>
                        </div>
                        <div class="col-md-4 pt-3 col-3">
                            <a href="">
                                <i class="bi bi-facebook " class="img-fluid rounded-end"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-8 col-9">
                            <div class="card-body">
                                <p class="card-text"><small class="text-body-secondary lead">Instagram</small></p>
                            </div>
                        </div>
                        <div class="col-md-4 pt-3 col-3">
                            <a href="">
                                <i class="bi bi-instagram" class="img-fluid rounded-end"></i>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-8 col-9">
                            <div class="card-body">
                                <p class="card-text"><small class="text-body-secondary lead">Linkedin</small></p>
                            </div>
                        </div>
                        <div class="col-md-4 pt-3 col-3">
                            <a href="">
                                <i class="bi bi-linkedin" class="img-fluid rounded-end"></i>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-8 col-9">
                            <div class="card-body">
                                <p class="card-text"><small class="text-body-secondary lead">Twitter</small></p>
                            </div>
                        </div>
                        <div class="col-md-4 pt-3 col-3">
                            <a href="">
                                <i class="bi bi-x-lg" class="img-fluid rounded-end"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-8 col-9">
                            <div class="card-body">
                                <p class="card-text"><small class="text-body-secondary lead">Tiktok</small></p>
                            </div>
                        </div>
                        <div class="col-md-4 pt-3 col-3">
                            <a href="">
                                <i class="bi bi-tiktok" class="img-fluid rounded-end"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-md-8 col-9">
                            <div class="card-body">
                                <p class="card-text"><small class="text-body-secondary lead">Youtube</small></p>
                            </div>
                        </div>
                        <div class="col-md-4 pt-3 col-3">
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
        <h3 class="lead text-bolder">Autres actualités</h3>

        <div class="row">
            @foreach($actus as $actu)
            <div class="col-lg-4 mt-4">
                <div class="card">
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
            <div class="col-lg-4 offset-lg-4">
                <button class="py-2 w-100">
                    <a class="" href="{{route('actu1')}}">
                        Plus d'actualité
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>

@endsection