@extends('layouts.header')
@section('title', 'Nos projets')
@section('content')

<section class="dactuSection1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="card-title text-body-secondary my-4 text-center">{{$projet->titre}}</h3>
                <div class="row my-4">
                    <img src="{{$projet->image}}" class="img-fluid" alt="...">
                </div>
            </div>

            <div class="col-lg-9">

                <p class="card-text lead">
                    {{$projet->description}}
                </p>

                <p class="card-text lead mt-5">
                    Débute le: <small class="text-bold">{{$projet->date}}</small>
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
                        <div class="col-md-4 pt-2 col-3">
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
                        <div class="col-md-4 pt-2 col-3">
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
                        <div class="col-md-4 pt-2 col-3">
                            <a href="">
                                <i class="bi bi-linkedin" class="img-fluid rounded-end"></i>

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
        <h3 class="lead text-bolder">Autres projets</h3>

        <div class="row">
            @foreach($projets as $projet)
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="{{$projet->image}}" class="card-img-top" height="200" alt="...">
                    <div class="card-body">
                        <p class="card-text"><small class="text-body-secondary">
                                Débute le : {{$projet->date}}</small></p>
                        <h5 class="card-title my-4">
                            {{$projet->date}}
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

        <div class="row mt-5">
            <div class="col-lg-3 offset-lg-9">
                <button class="py-2 w-100">
                    <a class="" href="{{route('projet')}}">
                        Plus de projet
                    </a>
                </button>
            </div>
        </div>

    </div>
</section>

@endsection