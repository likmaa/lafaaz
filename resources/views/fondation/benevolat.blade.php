@extends('layouts.header')
@section('title', 'Bénévolat')
@section('content')

<!-- SECTION 1 -->
<section class="aboutSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h2>
                        Nos offres de Bénevolat
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

<section class="benevolatSection2">
    <div class="container">
        <div class="row">
            @foreach($benevol as $benev)
            <div class="col-lg-6">
                <div class="card mb-3 p-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{$benev->image}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body px-3">
                                <h5 class="card-title text-body-secondary">{{$benev->titre}}</h5>
                                <p class="card-text">
                               Référence : {{$benev->reference}}  <br>
                               Expérience : {{$benev->experience}} an
                                <hr>
                                </p>
                                <p class="card-text"><small class="text-body-secondary">
                                        <a class="" href="{{route('dbenevol', $benev->experience)}}">
                                            Lire l'intégralité </a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {!! $benevol->links() !!}
        </div>
    </div>
</section>

@endsection