@extends('layouts.header')
@section('title', 'Actualité 2020')
@section('content')
<!-- SECTION 1 -->
<section class="realisationSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h2>
                        Actualités<br>
                        <!-- la Fondation les Amis de A à Z -->
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

            @foreach($actus->chunk(3) as $sousactus)
            <div class="row">
                @foreach($sousactus as $actu)
                <div class="col mb-5 m-3">
                    <div class="card">
                        <img src="{{$actu->image}}" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                            <p class="card-text"><small class="text-body-secondary">
                                    Publié le : {{$actu->created_at}}</small></p>
                            <h5 class="card-title my-4">
                                {{$actu->titre}}
                            </h5>
                            <p class="card-text"><small class="text-body-secondary">
                                    <a class="" href="{{route('actu2', $actu->id)}}">
                                        Lire l'intégralité </a></small></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
            {!! $actus->links() !!}
        </div>

    </div>
</section>

@endsection