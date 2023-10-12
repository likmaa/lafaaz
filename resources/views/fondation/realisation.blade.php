@extends('layouts.header')
@section('title', 'Réalisations')
@section('content')
<!-- SECTION 1 -->
<section class="realisationSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h2>
                        Les réalisations de la Fondation les Amis de A à Z
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

<!-- SECTION 2 -->
<section class="realisationSection2 mt-5 pt-5">
    <div class="container">
        @foreach($realisations->chunk(3) as $sousrealisations)
        <div class="row">
            @foreach($sousrealisations as $realisation)
            <div class="col-lg-4 mb-5">
                <div class="card align-items-center text-center">
                    <img class="img-fluid w-100" src="{{$realisation->image}}">
                    <div class="card-body pt-5">
                        <h5 class="card-title">{{$realisation->titre}}</h5>
                        <div class="py-2">
                            <a href="{{$realisation->fichier}}">
                                <button class="downloadButton w-100 py-2 px-5" id="downloadButton1">
                                    Télécharger
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
        {!! $realisations->links() !!}

        <div class="row align-items-center mt-5 pt-2">
            <div class="col-lg-3 mb-5 offset-lg-4">
                <button class="w-100 py-2"><a href="{{route('travail')}}">Collaboration</a></button>
            </div>
        </div>
        
    </div>
</section>
<!-- END SECTION 2 -->



@endsection