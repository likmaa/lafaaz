@extends('layouts.header')
@section('title', 'Assistance aux orphelins')
@section('content')

<!-- SECTION 1 -->
<section class="aboutSection1 d-none d-lg-block d-md-block d-sm-block">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h5 class="text-light">
                        <a class="text-light" href="{{ route('Accueil') }}">Accueil</a> / <a class="text-light" href="#">Nos programmes</a> / Assistance aux orphelins de la Fondation les Amis de A à Z
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->


<section class="ass3ageSection2">
    <div class="container text-uppercase py-5" style="text-align: center;">
        <h6 class="mb-4 fw-lighter">Nos programmes</h6>
        <h3>Programme d'Assistance aux orphelins</h3>
        
        <div class="my-5 underline_blue"></div>
    
        <div class="d-flex justify-content-center align-item-center" class="background: inherit !important;">
            <img class="img-fluid my-5" style="height: 75vh; width: 85%;" src="/assets/img/orp.jpg">
        </div>
    </div>

    <div class="container">

        <div class="row">           
            <div class="col-lg-12 col-md-12">
                <div class="content">
                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do" style="text-align: center">
                       Éclairer l'Avenir avec Compassion
                    </h4>

                    <div class="mt-4 mb-5 underline_blue"></div>

                    <div class="card-text py-2 lead col-md-7 col-lg-7 col-10 m-auto">
                        <small class="text-body-secondary text-bold-500">
                            La Fondation "Les Amis de A à Z" est honorée de présenter son Programme d'Assistance
                            aux Orphelins, un pilier essentiel de notre engagement continu envers les enfants
                            vulnérables qui ont perdu leurs parents. Guidés par notre conviction en un avenir meilleur
                            pour chaque enfant, ce programme sert de phare d'espoir et de soutien aux jeunes qui ont
                            besoin d'une main secourable pour se frayer un chemin dans la vie.
                        </small>
                    </div>

                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do" class="mt-4" style="text-align: center;">
                        Le Fondement du Programme
                    </h4>

                    <div class="mt-4 mb-5 underline_blue"></div>

                    <p class="card-text pt-2 lead col-md-7 col-lg-7 col-10 m-auto">
                        <small class="text-body-secondary text-bold-500">
                            Le cœur de ce programme repose sur notre désir ardent d'apporter un changement positif
                            dans la vie des orphelins. En créant un environnement de sécurité, de soins et
                            d'opportunités, nous aspirons à briser les cycles de vulnérabilité et à offrir à ces jeunes la
                            possibilité de réaliser leur plein potentiel.
                        </small>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-lg-7 col-10 m-auto">

                <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do" class="mt-4" style="text-align: center;">
                    Objectifs Clés
                </h4>

                <div class="mt-4 mb-5 underline_blue"></div>

                <ol>
                    <li class="mb-4">
                        <p>
                            Fournir un Toit Chaleureux : 
                        </p>
                        <p class="card-text pt-2 lead">
                            <small class="text-body-secondary text-bold-500">
                                Nous nous engageons à offrir aux orphelins un foyer
                                aimant et stable, où ils peuvent grandir dans un environnement sécurisé.
                            </small>
                        </p>
                    </li>
                    <li class="mb-4">
                        <p>
                            Éducation et Développement : 
                        </p>
                        <p class="card-text pt-2 lead">
                            <small class="text-body-secondary text-bold-500">
                                Notre programme vise à garantir que chaque enfant ait
                                accès à une éducation de qualité et à des opportunités de développement personnel, leur
                                permettant de façonner un avenir brillant.
                            </small>
                        </p>
                    </li>
                    <li class="mb-4">
                        <p>
                            Soutien émotionnel : 
                        </p>
                        <p class="card-text pt-2 lead">
                            <small class="text-body-secondary text-bold-500">
                                Nous créons des espaces où les orphelins peuvent partager leurs
                                émotions, recevoir du soutien et apprendre à surmonter les défis avec résilience.
        
                            </small>
                        </p>
                    </li>
                    <li class="mb-4">
                        <p>
                            Activités enrichissantes : 
                        </p>
                        <p class="card-text pt-2 lead">
                            <small class="text-body-secondary text-bold-500">
                                Des activités ludiques, artistiques et éducatives sont
                                organisées pour nourrir la créativité et l'épanouissement des enfants.
                            </small>
                        </p>
                    </li>
                </ol>
                
                <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do" class="mt-4" style="text-align: center;">
                    Comment vous pouvez contribuer
                </h4>

                <div class="mt-4 mb-5 underline_blue"></div>

                <p class="card-text pt-2 lead">
                    <small class="text-body-secondary text-bold-500">
                        Chacun de nous peut jouer un rôle crucial dans la réalisation de cette mission.
                    </small>
                </p>

                <ol>
                    <li>
                        Donner Généreusement : 
                        <p class="card-text pt-2 lead">
                            <small class="text-body-secondary text-bold-500">
                                Votre soutien financier contribue directement à la réalisation de
                                nos objectifs pour les orphelins.
        
                            </small>
                        </p>
                    </li>
                    <li>
                        Devenir Mentor : 
                        <p class="card-text pt-2 lead">
                            <small class="text-body-secondary text-bold-500">
                                En devenant bénévole, vous pouvez offrir mentorat, guidance et amitié à
                                ces jeunes esprits.
        
                            </small>
                        </p>
                    </li>
                    <li>
                        Partager Votre Expertise : 
                        <p class="card-text pt-2 lead">
                           <small class="text-body-secondary text-bold-500">
                                Vous vous avez des compétences spécifiques à partager, de
                                l'enseignement à l'art, vous pouvez enrichir la vie des orphelins.
        
                            </small>
                        </p>
                    </li>
                </ol>               

                <p class="card-text pt-2 lead">
                    <small class="text-body-secondary text-bold-500">
                        Ensemble, nous créons un avenir où chaque enfant, indépendamment de son passé, peut
                        rêver, grandir et réaliser ses aspirations.
                        Pour en savoir plus sur notre Programme d'Assistance aux Orphelins et comment vous
                        pouvez contribuer à éclairer l'avenir de ces jeunes vies, n'hésitez pas à nous contacter.
                        Rejoignez-nous dans notre quête pour transformer des vies et semer des graines d'espoir
                        qui fleuriront pour toujours.
                    </small>
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3 offset-lg-3 col-12 mt-4">
                <a class="text-white" href="{{route('benevol')}}">
                    <button class="w-100 py-2"> Devenir Bénévolat</button>
                </a>
            </div>
            <div class="col-lg-3 col-12 mt-4">
                <a class="offset-lg-2 text-white" href="{{route('dons')}}">
                    <button class="w-100 py-2"> Faire un don</button>
                </a>
            </div>
        </div>
</section>
@endsection