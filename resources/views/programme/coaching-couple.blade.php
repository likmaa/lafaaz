@extends('layouts.header')
@section('title', 'Coaching couple')
@section('content')

<!-- SECTION 1 -->
<section class="aboutSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h2>
                        Coaching aux couples de la Fondation les Amis de A à Z
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

<section class="ass3ageSection2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                <div class="image-wrapper">
                    <img class="img-fluid" src="/assets/img/cc.jpg">
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="content">
                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">
                        Notre Programme de Coaching pour les Couples : Nourrir l'Amour et
                        l'Épanouissement

                    </h4>
                    <p class="card-text pt-2 lead">
                        <small class="text-body-secondary text-bold-500">
                            Depuis son lancement, le Programme de Coaching pour les Couples de la Fondation
                            "Les Amis de A à Z" a été une source d'inspiration pour de nombreux couples
                            cherchant à renforcer leurs relations. Guidés par notre engagement envers des
                            relations épanouissantes, ce programme offre un soutien précieux pour surmonter
                            les défis et cultiver l'amour à long terme.
                        </small>
                    </p>
                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">
                        Résultats Concrets :
                    </h4>

                    <p class="card-text lead">
                        <small class="text-body-secondary text-bold-500">

                            Depuis le début de ce programme, nous avons assisté à des transformations
                            positives dans de nombreuses relations :

                        </small>
                    </p>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">


                <p class="card-text pt-2 lead">
                    Communication Réparée : <small class="text-body-secondary text-bold-500">
                        Les couples ont appris à écouter activement, à exprimer
                        leurs besoins et à résoudre les conflits de manière respectueuse.

                    </small>
                </p>

                <p class="card-text pt-2 lead">
                    Liens ravivés : <small class="text-body-secondary text-bold-500">
                        Grâce à des séances de coaching dédiées, de nombreux couples ont
                        renouvelé leur intimité émotionnelle et retrouvé leur connexion profonde.

                    </small>
                </p>

                <p class="card-text pt-2 lead">
                    Gestion Harmonieuse : <small class="text-body-secondary text-bold-500">
                        Les couples ont acquis des compétences pour gérer le
                        stress quotidien ensemble, préservant ainsi l'harmonie au sein de leur relation.
                    </small>
                </p>

                <p class="card-text pt-2 lead">
                    Objectifs partagés : <small class="text-body-secondary text-bold-500">
                        Nous avons aidé les couples à élaborer des plans à long terme,
                        à fixer des objectifs communs et à travailler ensemble pour les atteindre.
                    </small>
                </p>
                <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">
                    Perspectives Futures :

                </h4>
                <p class="card-text pt-2 lead">
                    À mesure que notre programme de coaching continue de se développer, nous
                    prévoyons d'ajouter de nouvelles ressources et des sessions spécifiques pour les
                    couples à différentes étapes de leur relation.

                </p>

                <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">
                    Comment Vous Pouvez Continuer à Contribuer :

                </h4>
                <p class="card-text pt-2 lead">
                    Votre implication continue est essentielle pour le succès continu de ce programme :

                </p>
                <p class="card-text pt-2 lead">
                    Promouvoir le Programme : <small class="text-body-secondary text-bold-500">
                        En partageant vos expériences positives, vous
                        encouragez d'autres couples à bénéficier de ce soutien.

                    </small>
                </p>
                <p class="card-text pt-2 lead">
                    Participer en tant que Mentor : <small class="text-body-secondary text-bold-500">
                        Si vous avez bénéficié de notre programme et que
                        vous souhaitez partager vos compétences en coaching, nous serions ravis de vous
                        avoir comme mentor.

                    </small>
                </p>
                <p class="card-text pt-2 lead">
                    Soutien Continu : <small class="text-body-secondary text-bold-500">
                        Votre soutien financier et vos encouragements contribuent
                        directement à maintenir et à développer ce programme vital.
                    </small>
                </p>

                <p class="card-text pt-2 lead">
                    Le Programme de Coaching pour les Couples de la Fondation "Les Amis de A à Z"
                    continue de façonner des relations épanouissantes et de renforcer l'amour entre les
                    partenaires. Nous croyons en un avenir où chaque couple peut traverser les défis
                    main dans la main, en cultivant un amour profond et durable. Joignez-vous à nous
                    pour créer cet avenir ensemble.
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-5 col-12 mt-4">
                <a class="text-white" href="{{route('benevol')}}">
                    <button class="w-100 py-2"> Devenir Bénévolat</button>
                </a>
            </div>
            <div class="offset-lg-2 col-lg-5 col-12 mt-4">
                <a class="text-white" href="{{route('dons')}}">
                    <button class="w-100 py-2"> Faire un don</button>
                </a>
            </div>
        </div>
</section>
@endsection