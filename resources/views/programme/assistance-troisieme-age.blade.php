@extends('layouts.header')
@section('title', 'Assistance troisième age')
@section('content')

<!-- SECTION 1 -->
<section class="aboutSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h2>
                        Assistance Personnes du troisième âge de la Fondation les Amis de A à Z
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
                    <img class="img-fluid" src="/assets/img/pag.jpg">
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="content">
                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">
                        Notre Programme d'Assistance aux Personnes Âgées de Troisième Âge : Un
                        Engagement Renouvelé envers nos Aînés
                    </h4>
                    <p class="card-text pt-2 lead">
                        <small class="text-body-secondary text-bold-500">
                            Depuis son lancement, le Programme d'Assistance aux Personnes Âgées de Troisième Âge
                            de la Fondation "Les Amis de A à Z" a apporté une nouvelle dimension de soutien et de
                            bienveillance à nos aînés. En reconnaissant l'importance cruciale de nos aînés dans notre
                            communauté, ce programme vise à enrichir leurs vies et à leur fournir un réseau de soutien
                            solide pour les années à venir.
                        </small>
                    </p>

                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">
                        Les Réalisations du Programme :

                    </h4>

                </div>

            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <p class="card-text  lead">
                    <small class="text-body-secondary text-bold-500">
                        Depuis le début de ce programme, nous avons pu atteindre des jalons significatifs dans
                        notre engagement envers les personnes âgées de troisième âge :
                    </small>
                </p>
                <p class="card-text  lead">
                    <strong> Réduction de l'isolement</strong> :<small class="text-body-secondary text-bold-500">
                        Nous avons réussi à créer un environnement où nos aînés
                        peuvent se réunir, partager des moments précieux et renforcer leurs liens sociaux. Les
                        activités régulières ont permis de réduire l'isolement et de favoriser des amitiés durables.

                    </small>
                </p>

                <p class="card-text  lead">
                    stron : <small class="text-body-secondary text-bold-500">
                        Notre gamme de services pratiques, allant de l'aide aux courses à
                        l'assistance médicale, a été accueillie avec gratitude par nos aînés. Ces services ont
                        renforcé leur indépendance tout en leur offrant un soutien fiable.
                    </small>
                </p>

                <p class="card-text  lead">
                    Épanouissement Continu : <small class="text-body-secondary text-bold-500">
                        Les activités stimulantes, artistiques et éducatives que nous
                        avons organisées ont permis à nos aînés de continuer à explorer de nouvelles passions, à
                        apprendre et à se développer à un âge avancé.
                    </small>
                </p>

                <p class="card-text  lead">
                    Soutien émotionnel : <small class="text-body-secondary text-bold-500">
                        Les groupes de discussion et les séances de soutien émotionnel ont
                        offert à nos aînés un espace sûr pour partager leurs préoccupations et leurs joies, favorisant
                        ainsi un bien-être mental et émotionnel.
                    </small>
                </p>
                <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">
                    Perspectives Futures :
                </h4>
                <p class="card-text  lead">
                    <small class="text-body-secondary text-bold-500">
                        Alors que notre programme continue de croître, nous sommes déterminés à élargir encore
                        davantage notre portée et notre impact. Nous envisageons d'introduire de nouvelles
                        initiatives, telles que des ateliers intergénérationnels pour promouvoir l'échange de
                        connaissances entre les générations.
                    </small>
                </p>

                <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">
                    Comment Vous Pouvez Contribuer :
                </h4>
                <p class="card-text  lead">
                    <small class="text-body-secondary text-bold-500">
                        Votre soutien continu est essentiel pour faire progresser notre mission. Voici comment vous
                        pouvez participer :
                    </small>
                </p>
                <p class="card-text  lead">
                    Partager votre Temps : <small class="text-body-secondary text-bold-500">
                        En devenant bénévole, vous pouvez offrir votre présence, votre
                        compassion et votre expertise pour améliorer la vie de nos aînés.
                    </small>
                </p>
                <p class="card-text  lead">
                    Soutenir financièrement : <small class="text-body-secondary text-bold-500">
                        Vos dons financiers contribueront directement à maintenir et à
                        développer les services et les activités du programme.
                    </small>
                </p>
                <p class="card-text  lead">
                    Partager votre expérience : <small class="text-body-secondary text-bold-500">
                        Si vous avez des compétences spécifiques ou des
                        expériences à partager, nous serions ravis de les intégrer dans notre programme.

                    </small>
                </p>
                <p class="card-text  lead">
                    Le Programme d'Assistance aux Personnes Âgées de Troisième Âge de la Fondation "Les
                    Amis de A à Z" a déjà commencé à laisser une empreinte positive dans la vie de nos aînés.
                    Nous croyons en un avenir où nos aînés sont honorés, soutenus et épanouis.
                    Rejoignez-nous dans cette quête continue pour créer un monde meilleur pour nos aînés
                    bien-aimés.
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
                <a class="text-white" href="{{route('dons')}}" >
                    <button class="w-100 py-2" > Faire un don</button>
                </a>
            </div>
        </div>
</section>
@endsection