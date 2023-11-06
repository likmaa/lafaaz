@extends('layouts.header')
@section('title', 'Assistance troisième age')
@section('content')

    <section class="ass3ageSection2">
        <div class="container text-uppercase py-5" style="text-align: center;">
            <h6 class="mb-4 fw-lighter">Nos programmes</h6>
            <h3>Programme d'Assistance aux Personnes du Troisième Âge</h3>

            <div class="my-5 underline_blue"></div>

            <div class="d-flex justify-content-center align-item-center" class="background: inherit !important;">
                <img class="img-fluid my-5" onclick="console.log(this.width, this.height)" style="height: 75vh; width: 85%;" src="/assets/img/pag.jpg">
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-10 m-auto">
                    <div class="content">
                        <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do" style="text-align: center"
                            class="mt-4">
                            Un Engagement Renouvelé envers nos Aînés
                        </h4>

                        <div class="mt-4 mb-5 underline_blue"></div>

                        <p class="card-text py-2 lead">
                            <small class="text-body-secondary text-bold-500">
                                Depuis son lancement, le Programme d'Assistance aux Personnes Âgées de Troisième Âge
                                de la Fondation "Les Amis de A à Z" a apporté une nouvelle dimension de soutien et de
                                bienveillance à nos aînés. En reconnaissant l'importance cruciale de nos aînés dans notre
                                communauté, ce programme vise à enrichir leurs vies et à leur fournir un réseau de soutien
                                solide pour les années à venir.
                            </small>
                        </p>

                        <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do" style="text-align: center"
                            class="mt-4">
                            Les Réalisations du Programme
                        </h4>

                        <div class="mt-4 mb-5 underline_blue"></div>

                        <p class="card-text  lead">
                            <small class="text-body-secondary text-bold-500">
                                Depuis le début de ce programme, nous avons pu atteindre des jalons significatifs dans
                                notre engagement envers les personnes âgées de troisième âge :
                            </small>
                        </p>

                        <ol>
                            <li class="mb-4">
                                Réduction de l'isolement :
                                <p class="card-text pt-2 lead">
                                    <small class="text-body-secondary text-bold-500">
                                        Nous avons réussi à créer un environnement où nos aînés
                                        peuvent se réunir, partager des moments précieux et renforcer leurs liens sociaux.
                                        Les
                                        activités régulières ont permis de réduire l'isolement et de favoriser des amitiés
                                        durables.

                                    </small>
                                </p>
                            </li>
                            <li class="mb-4">
                                Amélioration de la Qualité de Vie des Aînés:
                                <p class="card-text pt-2 lead">
                                    <small class="text-body-secondary text-bold-500">
                                        Notre gamme de services pratiques, allant de l'aide aux courses à
                                        l'assistance médicale, a été accueillie avec gratitude par nos aînés. Ces services
                                        ont
                                        renforcé leur indépendance tout en leur offrant un soutien fiable.
                                    </small>
                                </p>
                            </li>
                            <li class="mb-4">
                                Épanouissement Continu :
                                <p class="card-text pt-2 lead">
                                    <small class="text-body-secondary text-bold-500">
                                        Les activités stimulantes, artistiques et éducatives que nous
                                        avons organisées ont permis à nos aînés de continuer à explorer de nouvelles
                                        passions, à
                                        apprendre et à se développer à un âge avancé.
                                    </small>
                                </p>
                            </li>
                            <li class="mb-4">
                                Soutien émotionnel :
                                <p class="card-text pt-2 lead">
                                    <small class="text-body-secondary text-bold-500">
                                        Les groupes de discussion et les séances de soutien émotionnel ont
                                        offert à nos aînés un espace sûr pour partager leurs préoccupations et leurs joies,
                                        favorisant
                                        ainsi un bien-être mental et émotionnel.
                                    </small>
                                </p>
                            </li>
                        </ol>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-7 col-lg-7 col-10 m-auto">

                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do" style="text-align: center" class="mt-4">
                        Perspectives Futures
                    </h4>

                    <div class="mt-4 mb-5 underline_blue"></div>

                    <p class="card-text  lead">
                        <small class="text-body-secondary text-bold-500">
                            Alors que notre programme continue de croître, nous sommes déterminés à élargir encore
                            davantage notre portée et notre impact. Nous envisageons d'introduire de nouvelles
                            initiatives, telles que des ateliers intergénérationnels pour promouvoir l'échange de
                            connaissances entre les générations.
                        </small>
                    </p>

                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do" style="text-align: center" class="mt-4">
                        Comment vous pouvez contribuer
                    </h4>

                    <div class="mt-4 mb-5 underline_blue"></div>

                    <p class="card-text  lead">
                        <small class="text-body-secondary text-bold-500">
                            Votre soutien continu est essentiel pour faire progresser notre mission. Voici comment vous
                            pouvez participer :
                        </small>
                    </p>

                    <ol>
                        <li class="mb-4">
                            Partager votre Temps :
                            <p class="card-text pt-2 lead">
                                <small class="text-body-secondary text-bold-500">
                                    En devenant bénévole, vous pouvez offrir votre présence, votre
                                    compassion et votre expertise pour améliorer la vie de nos aînés.
                                </small>
                            </p>
                        </li>
                        <li class="mb-4">
                            Soutenir financièrement :
                            <p class="card-text pt-2 lead">
                                <small class="text-body-secondary text-bold-500">
                                    Vos dons financiers contribueront directement à maintenir et à
                                    développer les services et les activités du programme.
                                </small>
                            </p>
                        </li>
                        <li class="mb-4">
                            Partager votre expérience :
                            <p class="card-text pt-2 lead">
                                <small class="text-body-secondary text-bold-500">
                                    Si vous avez des compétences spécifiques ou des
                                    expériences à partager, nous serions ravis de les intégrer dans notre programme.

                                </small>
                            </p>
                        </li>
                    </ol>

                    <p class="card-text  lead">
                        <small class="text-body-secondary text-bold-500">

                            Le Programme d'Assistance aux Personnes Âgées de Troisième Âge de la Fondation "Les
                            Amis de A à Z" a déjà commencé à laisser une empreinte positive dans la vie de nos aînés.
                            Nous croyons en un avenir où nos aînés sont honorés, soutenus et épanouis.
                            Rejoignez-nous dans cette quête continue pour créer un monde meilleur pour nos aînés
                            bien-aimés.

                        </small>
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-3 offset-lg-3 col-12 mt-4">
                    <a class="text-white" href="{{ route('benevol') }}">
                        <button class="w-100 py-2"> Devenir Bénévolat</button>
                    </a>
                </div>
                <div class="col-lg-3 col-12 mt-4">
                    <a class="offset-lg-2 text-white" href="{{ route('dons') }}">
                        <button class="w-100 py-2"> Faire un don</button>
                    </a>
                </div>
            </div>
    </section>
@endsection
