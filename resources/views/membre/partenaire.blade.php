@extends('layouts.header')
@section('title', 'Partenaires')
@section('content')

<!-- SECTION 1 -->
<section class="realisationSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h1 class="text-light mt-5 ms-4" style="font-size: small;">
                        <a class="text-light" href="{{ route('Accueil') }}">Accueil</a> / <a class="text-light" href="#">Nos partenaires</a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

<!-- SECTION 2 -->
<section class="">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                <div class="image-wrapper">
                    <img class="img-fluid w-100" src="/assets/img/Logo-Partenaire.png">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="content p-4">
                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">WODLUS E-LEARNING SOLUTIONS</h4>
                    <p>
                        WODLUS est notre partenaire principale pour la réalisation de nos contenus digitaux.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- END SECTION 2 -->

@endsection