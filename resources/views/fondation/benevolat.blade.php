@extends('layouts.header')
@section('title', 'Bénévolat')
@section('content')

<!-- SECTION 1 -->
<section class="aboutSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h5 style="color: white">
                        Nos offres de Bénevolat
                    </h5>
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
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="{{config('filesystems.disks.public.url') . $benev->image}}" class="img-fluid rounded-start w-100" style="height: 300px" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body px-3">
                                <h5 class="card-title text-body-secondary px-2">{{$benev->titre}}</h5>
                                <p class="card-text px-2">
                                    Référence : {{$benev->reference}} <br>
                                    Expérience : {{$benev->experience}}
                                    @if ((int)$benev->experience >1)
                                    ans
                                    @else
                                    an
                                    @endif
                                    <hr>
                                </p>
                                <p class="card-text"><small class="text-body-secondary">
                                        <a class="px-2" href="{{route('dbenevol', $benev->id)}}">
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