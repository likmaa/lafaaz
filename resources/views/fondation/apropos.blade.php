@extends('layouts.header')
@section('title', 'A propos')
@section('content')

<!-- SECTION 1 -->
{{-- <section class="aboutSection1 m-0 p-0">
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
</section> --}}
<!-- END SECTION 1 --> 

<!-- SECTION 2 -->
<section class="aboutSection2">
    <div class="container mt-5">
        {{-- <div class="row">

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

            <div class="col-lg-3 col-12 images1">
                <img src="../assets/img/about3.png" class="image1" alt="...">
                <img src="../assets/img/about4.png" class="image2" alt="...">
            </div>
        </div> --}}

        <div class="row">
            <div class="col-md-7 col-lg-7 col-10 m-auto">
                <div class="py-4">

                    <h3 class="title1 d-flex justify-content-center">
                        
                        <p class="px-3">Qui sommes nous ?</p>
                    </h3>
                    <div class="mt-4 mb-5 underline_blue"></div>

                    <div class="d-flex justify-content-center align-item-center" class="background: inherit !important;">
                        <div class="card-img-top mb-5" style="height: 50vh; width: 100%; background: url('/assets/img/IMG_0826.jpg'); background-size:cover; background-repeat: no-repeat; border-radius:10px"></div>
                    
                    </div>

                    <p class="mt-2 text-justify px-3">
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
                    <h3 class="title2 d-flex justify-content-center">
                        
                        <p class="px-3">De la vision à la création </p>
                    </h3>
                    <div class="mt-4 mb-5 underline_blue"></div>

                    <div class="d-flex justify-content-center align-item-center" class="background: inherit !important;">
                        <div class="card-img-top mb-5" style="height: 50vh; width: 100%; background: url('/assets/img/pag.jpg'); background-size:cover; background-repeat: no-repeat; border-radius:10px"></div>
                    </div>

                    <p class="mt-2 text-justify px-3">
                        S’investir dans sa vie sociale aux côtés des autres hommes, parents, collègues etc… n’est pas à ignorer, 
                        et s’impose parfois à soi, lorsque, observateur sensible de notre propre milieu, nous réalisons l’existence 
                        d’indigences multiples auxquelles chacun de nous peut contribuer et porter assistance. <br><br>
                        <span style="color:#0e7bbe">C’est dans cet élan, 
                        qu’une dizaine d’amis dans la vie courante, et membres fondateurs avons voulu structurer nos diverses 
                        interventions à but social, celles qui s’opèrent déjà et celles qui n’ont point encore démarré.</span> 
                        <br><br>Ainsi, guidés
                        par <b>la vision d’un épanouissement durable de l’humanité, et se donnant la mission de promouvoir le bien-être 
                        des personnes les plus vulnérables</b>, l’idée de créer une Fondation est née et s’est concrétisée 
                        le Dimanche 11 Octobre 2020. La <strong>« Fondation les Amis de A à Z » (FAAZ)</strong> est une organisation non gouvernementale, apolitique, laïque et à but non lucratif.
                    </p>

                </div>

                <div class="py-4">
                    <h3 class="title1 d-flex justify-content-center">
                        
                        <p class="px-3">Nos objectifs </p>
                    </h3>
                    <div class="mt-4 mb-5 underline_blue"></div>

                    <div class="d-flex justify-content-center align-item-center" class="background: inherit !important;">
                        <div class="card-img-top mb-5" style="height: 50vh; width: 100%; background: url('/assets/img/close-up-team-hand-shake.jpg'); background-size:cover; background-repeat: no-repeat; border-radius:10px"></div>
                    </div>

                    <p class="mt-2 text-justify px-3">
                        La « Fondation les Amis de A à Z » s’est assignée pour objectif d’étudier, formuler, 
                        appuyer et mettre en œuvre, au Bénin et en Afrique, des actions de promotion de l’éducation, 
                        de la santé, d’assistance à la personne humaine et à l’équilibre familial. Les actions envisagées 
                        portent spécifiquement sur :
                        <ul>
                            <li>	Aide à l’enfance indigente</li>
                              <li>	Aide aux Personnes de Troisième Age</li>
                                <li>	Coaching conjugal</li>
                                  <li>	Coaching de la jeunesse et leadership transformationnel</li>
                                    <li>	Excellence en milieu scolaire et qualité de l’éducation</li>
                        </ul>
                    </p>
                </div>
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
                    <span data-purecounter-start="0" data-purecounter-end="17" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Membre</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <span data-purecounter-start="0" data-purecounter-end="{{ $nbre_projet }}" data-purecounter-duration="1" class="purecounter"></span>
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
                    <span data-purecounter-start="0" data-purecounter-end="{{ $nbre_don }}" data-purecounter-duration="1" class="purecounter"></span>
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

                    <img src="{{ config('filesystems.disks.public.url') . $benevol->image }}">
                    <div class="card-body pt-5">
                        <h5 class="card-title text-center ">{{$benevol->titre}}</h5>
                        <div class="card-text pt-3 text-justify pb-5">
                            {!! $benevol->description !!}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="row align-items-center mt-5 pt-2">
        <div class="col-lg-3 mb-5 offset-lg-4">
            <button class="w-100 py-2"> <a class="nous-rejoindre" href="{{route('travail')}}">Nous rejoindre</a></button>
        </div>
    </div>
    
    <style>
        .nous-rejoindre {
            color: white !important;
        }
        
        .nous-rejoindre:hover {
            color: black !important;
        }
    </style>
</section>


<!-- END SECTION 2 -->
@endsection