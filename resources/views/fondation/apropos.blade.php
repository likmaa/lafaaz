@extends('layouts.header')
@section('title', 'A propos')
@section('content')
<!-- SECTION 1 -->
<section class="aboutSection1 m-0 p-0">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h2>
                        A propos de la Fondation les Amis de A à Z
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

<!-- SECTION 2 -->
<section class="aboutSection2">
    <div class="container mt-5">
        <div class="row">

            <div class="col-lg-8 col-12">
                <div class="py-4">
                    <h3 class="title1 d-flex">
                        <img src="../assets/img/about2.png" alt="" srcset="" width="50" height="50" class="aboutImage">
                        <p class="px-3">Qui sommes nous </p>
                    </h3>

                    <p class="mt-2 text-justify">
                        La <strong class="vertText">FONDATION Les Amis de A à Z</strong> est une
                        organisation
                        non gouvernementale, apolitique, laïque
                        et à but non lucratif. Elle a pour objet d’étudier, formuler, appuyer et mettre en
                        œuvre, au
                        Bénin et en Afrique, des actions de promotion de l’éducation, de la santé,
                        d’assistance
                        à la
                        personne humaine et à l’équilibre familial
                    </p>
                </div>

                <div class="py-4">
                    <h3 class="title2 d-flex">
                        <img src="../assets/img/about5.png" alt="" srcset="" width="50" height="50" class="aboutImage">
                        <p class="px-3">Notre vision </p>
                    </h3>
                    <p class="mt-2">
                        Notre vision consiste à créer des conditions de vie permettant l'épanouissement
                        durable de l'humanité
                    </p>

                </div>

                <div class="py-4">
                    <h3 class="title1 d-flex">
                        <img src="../assets/img/about6.png" alt="" srcset="" width="50" height="50" class="aboutImage">
                        <p class="px-3">Notre mission </p>
                    </h3>

                    <p class="mt-2">
                        Notre mission consiste à mettre en place des actions, programmes et politiques
                        visant à améliorer la qualité de vie des individus qui sont les plus
                    </p>
                </div>

            </div>

            <div class="col-lg-4 col-12 p-5 images1">
                <img src="../assets/img/about3.png" class="image1" alt="...">
                <img src="../assets/img/about4.png" class="image2" alt="...">

            </div>
        </div>

    </div>
</section>
<!-- END SECTION 2 -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Staff</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <span data-purecounter-start="0" data-purecounter-end="02" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Projets</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <span data-purecounter-start="0" data-purecounter-end="02" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Pays</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <span data-purecounter-start="0" data-purecounter-end="00" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Don</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Counts Section -->


<!-- SECTION 3 -->
<section class="aboutSection3 mt-5 pt-5">
    <div class="container mt-5">
        <h2 class="fw-500">
            <img src="../assets/img/about7.png" alt="" srcset="" width="40" height="49">
            <span>Nos bénévoles</span>
        </h2>
        
        <div class="row mt-5">
            @foreach($benevols as $benevol)
            <div class="col-lg-4 px-2 py-3">
                <div class="card align-items-center p-4">
                    <img src="{{$benevol->image}}">
                    <div class="card-body pt-5">
                        <h5 class="card-title text-center ">{{$benevol->titre}}</h5>
                        <div class="card-text pt-3 text-justify pb-5">
                            {{ $benevol->description }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>

<!-- END SECTION 2 -->
@endsection