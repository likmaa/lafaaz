@extends('layouts.header')
@section('title', 'Education Jeunesse')
@section('content')

<!-- SECTION 1 -->
<section class="aboutSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h2>
                        Education & Jeunesse <br>
                        la Fondation les Amis de A à Z
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
                    <img class="img-fluid" src="/assets/img/edu.jpg">
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="content">
                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">
                        Notre Programme pour la Jeunesse et l'Éducation : Éclairer les
                        Chemins de l'Avenir
                    </h4>
                    <p class="card-text pt-2 lead">
                        <small class="text-body-secondary text-bold-500">
                            Depuis son lancement, le Programme pour la Jeunesse et l'Éducation de la
                            Fondation Les Amis de A à Z" a été un catalyseur d'espoir et de réussite pour les
                            jeunes. Guidé par notre engagement à investir dans l'éducation et le développement
                            des générations montantes, ce programme a eu un impact profond sur la vie des
                            jeunes et continue d'être une source d'inspiration.
                        </small>
                    </p>

                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">
                        Résultats Tangibles :
                    </h4>

                    <p class="card-text pt-2 lead">
                        <small class="text-body-secondary text-bold-500">
                            Depuis le début de ce programme, nous avons été témoins de changements
                            significatifs dans la vie des jeunes participants :
                        </small>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">

                <p class="card-text pt-2 lead">
                    Accès à l'Éducation : <small class="text-body-secondary text-bold-500">
                        Grâce à des bourses et un soutien académique, de nombreux
                        jeunes ont pu poursuivre leur éducation malgré les obstacles financiers.
                    </small>
                </p>

                <p class="card-text pt-2 lead">
                    Compétences Renforcées : <small class="text-body-secondary text-bold-500">
                        Notre gamme de services pratiques, allant de l'aide aux courses à
                        Les ateliers et les formations ont aidé les jeunes à
                        développer des compétences essentielles pour leur croissance personnelle et
                        professionnelle.
                    </small>
                </p>

                <p class="card-text pt-2 lead">
                    Orientation et Réalisation : <small class="text-body-secondary text-bold-500">
                        Les jeunes ont bénéficié de conseils éclairés pour
                        explorer des voies professionnelles, identifiant ainsi leurs passions et leurs
                        aspirations.
                    </small>
                </p>

                <p class="card-text pt-2 lead">

                    Bien-être Amélioré : <small class="text-body-secondary text-bold-500">
                        Grâce à un soutien émotionnel et à des ressources pour la
                        santé mentale, les jeunes ont appris à gérer le stress et à faire face aux défis avec
                        résilience.
                    </small>
                </p>

                <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">
                    Perspectives d'Avenir :
                </h4>
                <p class="card-text pt-2 lead">
                    <small class="text-body-secondary text-bold-500">
                        Alors que notre programme continue de prospérer, nous envisageons d'étendre nos
                        offres pour inclure davantage de bourses, de formations spécialisées et de
                        possibilités de mentorat.

                    </small>
                </p>

                <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">
                    Comment Vous Pouvez Continuer à Contribuer :
                </h4>
                <p class="card-text pt-2 lead">
                    Votre soutien continu est essentiel pour la poursuite du succès de ce programme : <br>
                    Promotion et Témoignage :
                    <small class="text-body-secondary text-bold-500">
                        En partageant vos histoires et expériences positives,
                        vous inspirez d'autres jeunes à rejoindre le programme.
                    </small>
                </p>
                <p class="card-text pt-2 lead">
                    Participation en tant que Mentor : <small class="text-body-secondary text-bold-500">
                        Si vous avez bénéficié de ce programme et
                        souhaitez guider d'autres jeunes, votre implication peut être inestimable.

                    </small>
                </p>
                <p class="card-text pt-2 lead">
                    Soutien Financier : <small class="text-body-secondary text-bold-500">
                        Vos dons continueront à aider les jeunes à poursuivre leurs rêves
                        éducatifs et professionnels.
                    </small>
                </p>
                <p class="card-text pt-2 lead">
                    Le Programme pour la Jeunesse et l'Éducation de la Fondation Les Amis de A à Z
                    continue d'illuminer les chemins de l'avenir pour nos jeunes. Nous croyons en un
                    avenir où chaque jeune peut réaliser ses aspirations, contribuer à la société et
                    construire des avenirs brillants. Joignez-vous à nous pour poursuivre cette mission
                    enrichissant
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