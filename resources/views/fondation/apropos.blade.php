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
                        <img src="../assets/img/about2.png" alt="" srcset="" width="50" height="50" class="aboutImage">
                        <p class="px-3">Qui sommes nous ?</p>
                    </h3>
                    <div class="mt-4 mb-5 underline_blue"></div>
    
                    <div class="d-flex justify-content-center align-item-center" class="background: inherit !important;">
                        <img class="img-fluid my-5" style="height: 60vh; width: 100%;" src="/assets/img/pag.jpg">
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
                        personne humaine et à l’équilibre familial. Elle est née et s’est concrétisée le Dimanche 11 Octobre 2020. 
                    </p>
                </div>
    
                <div class="py-4">
                    <h3 class="title2 d-flex justify-content-center">
                        <img src="../assets/img/about5.png" alt="" srcset="" width="50" height="50" class="aboutImage">
                        <p class="px-3">Notre vision et Nos objectifs </p>
                    </h3>
                    <div class="mt-4 mb-5 underline_blue"></div>
                    
                    <div class="d-flex justify-content-center align-item-center" class="background: inherit !important;">
                        <img class="img-fluid my-5" style="height: 60vh; width: 100%;" src="/assets/img/pag.jpg">
                    </div>

                    <p class="mt-2 text-justify px-3">
                        Notre vision consiste à créer des conditions de vie permettant l'épanouissement
                        durable de l'humanité. <br>
                        Nous avons pour mission d'étudier, de formuler, d'appuyer et de mettre en œuvre des initiatives visant à promouvoir l'éducation, la santé, l'assistance à la personne humaine et l'équilibre familial au Bénin et en Afrique. Nos actions sont spécifiquement axées sur les domaines suivants :
                    </p>
                    <ol>
                        <li class="mb-4">
                            Aide à l'enfance indigente :
                            <p class="card-text pt-2 lead"> 
                                <small class="text-body-secondary text-bold-500">
                                    Nous nous engageons à soutenir les enfants défavorisés en leur offrant des opportunités éducatives et en répondant à leurs besoins essentiels.
                                </small>
                            </p>
                        </li>
                        <li class="mb-4">
                            Aide aux Personnes de Troisième Age : 
                            <p class="card-text pt-2 lead">
                                <small class="text-body-secondary text-bold-500">
                                    Nous apportons notre soutien aux personnes âgées en veillant à leur bien-être, à leur dignité et à leur qualité de vie.
                                </small>
                            </p>
                        </li>
                        <li class="mb-4">
                            Coaching conjugal : 
                            <p class="card-text pt-2 lead">
                                <small class="text-body-secondary text-bold-500">
                                    Nous offrons un accompagnement aux couples pour renforcer leurs relations et promouvoir des foyers harmonieux.
                                </small>
                            </p>
                        </li>
                        <li class="mb-4">
                            Coaching de la jeunesse et leadership transformationnel :
                            <p class="card-text pt-2 lead">
                                <small class="text-body-secondary text-bold-500">
                                    Coaching de la jeunesse et leadership transformationnel : Nous travaillons avec la jeunesse pour les aider à développer leurs compétences en leadership et à réaliser leur plein potentiel.
                                </small>
                            </p>
                        </li>
                        <li class="mb-4">
                            Excellence en milieu scolaire et qualité de l'éducation :
                            <p class="card-text pt-2 lead">
                                <small class="text-body-secondary text-bold-500">
                                    Nous visons à améliorer la qualité de l'éducation en soutenant les établissements scolaires et les enseignants pour un meilleur avenir éducatif.
                                </small>
                            </p>
                        </li>
                    </ol>
                    <p class="mt-2 text-justify px-3">
                           
                        La « Fondation Les Amis de A à Z » s'engage à contribuer positivement au bien-être et au développement de nos communautés, en mettant en œuvre des projets et des initiatives qui améliorent la vie des individus et des familles.

                    </p>
                </div>
    
                <div class="py-4">
                    <h3 class="title1 d-flex justify-content-center">
                        <img src="../assets/img/about6.png" alt="" srcset="" width="50" height="50" class="aboutImage">
                        <p class="px-3"> Nos Membres </p>
                    </h3>
                    <div class="mt-4 mb-5 underline_blue"></div>
                    
                    <div class="d-flex justify-content-center align-item-center" class="background: inherit !important;">
                        <img class="img-fluid my-5" style="height: 60vh; width: 100%;" src="/assets/img/pag.jpg">
                    </div>

                    <p class="mt-2 text-justify px-3">
                        La qualité de membre est constatée par l’inscription au registre des membres, tenu au siège social de la Fondation Les Amis de A à Z. Pour être membre, il faut :
                    </p>
                    <ul>
                        <li class="mb-4">
                            <p class="card-text pt-2 lead"> 
                                <small class="text-body-secondary text-bold-500">
                                    Être de bonne moralité et jouir de ses droits civiques
                                </small>
                            </p>
                        </li>
                        <li class="mb-4">
                            <p class="card-text pt-2 lead"> 
                                <small class="text-body-secondary text-bold-500">
                                    Manifester expressément sa volonté et accepter les statuts et règlement intérieur
                                </small>
                            </p>
                        </li>
                        <li class="mb-4">
                            <p class="card-text pt-2 lead"> 
                                <small class="text-body-secondary text-bold-500">
                                    S’approprier la vision de la « FONDATION Les Amis de A à Z »
                                </small>
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="py-4">
                    <h3 class="title1 d-flex justify-content-center">
                        <img src="../assets/img/about6.png" alt="" srcset="" width="50" height="50" class="aboutImage">
                        <p class="px-3">Notre mission </p>
                    </h3>
                    <div class="mt-4 mb-5 underline_blue"></div>
                    
                    <div class="d-flex justify-content-center align-item-center" class="background: inherit !important;">
                        <img class="img-fluid my-5" style="height: 60vh; width: 100%;" src="/assets/img/pag.jpg">
                    </div>

                    <p class="mt-2 text-justify px-3">
                        Notre mission consiste à mettre en place des actions, programmes et politiques
                        visant à améliorer la qualité de vie des individus qui sont les plus
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
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Staff</p>
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