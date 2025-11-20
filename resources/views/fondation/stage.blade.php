@extends('layouts.header')
@section('title', 'Offres de stage')
@section('content')

<!-- SECTION 1 -->
<section class="aboutSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h1 class="text-light mt-5 ms-4" style="font-size: small;">
                        h2
                        Nos offres de Stage
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

<section class="stageSection2">
    <div class="container">
        <div class="row">
            @foreach($stages as $stage)
            <div class="col-lg-3 my-4">
                <div class="card">
                    <div class="card-img-top" style="height: 250px; background: url('{{config('filesystems.disks.public.url') . $stage->image}}'); background-size:cover; background-repeat: no-repeat"></div>

                    <div class="card-body">
                        <hr class="py-1">
                        <h6 class="card-title text-body-secondary">{{$stage->titre}}</h6>
                        <h6 class="card-title text-body-secondary">Référence : {{$stage->reference}}</h6>
                        <h6 class="card-title text-body-secondary">Expire le : {{$stage->expire}}</h6>
                        <p class="card-text pt-5 text-center">
                            <button class="py-2 w-100">
                                <a class="" href="{{route('dstage', $stage->id)}}">
                                    Voir l'offre </a>
                            </button>
                        </p>
                    </div>

                </div>
            </div>
            @endforeach
            {!! $stages->links() !!}

        </div>
    </div>
</section>

@endsection