@extends('layouts.header')
@section('title', 'Travaillez avec nous')
@section('content')

<!-- SECTION 1 -->
<section class="aboutSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h1 class="text-light mt-0 ms-4" style="font-size: small;">
                        <a class="text-light" href="{{ route('Accueil') }}">Accueil</a> / <a class="text-light" href="#">Nos offres</a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->


<!-- SECTION 1 -->
<section class="workSection2">
    <div class="container mt-5">

        <div class="row px-3 align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                <div class="image-wrapper">
                    <img class="img-fluid" src="/assets/img/works1.jpg">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="content">
                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">Nos offres d'emploi</h4>
                    <p>
                        Découvrez nos offres d'emploi exceptionnelles et trouvez l'opportunité parfaite pour faire partie de notre équipe talentueuse. Nous recherchons des individus passionnés et déterminés pour rejoindre notre entreprise. Consultez la liste complète des postes disponibles et postulez dès aujourd'hui pour donner un coup de pouce à votre carrière. 
                    </p>
                    <button class="float-end py-2 px-4"><a class="text-white" href="{{route('emplois')}}">Consulter</a></button>

                </div>
            </div>
        </div>

        <div class="row px-3 pt-5 align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6">
                <div class="content py-4">
                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">Bénévolat</h4>
                    <p>
                        Découvrez nos opportunités de bénévolat et engagez-vous dans des projets bénévoles impactants. Consultez la liste complète des offres et trouvez comment vous pouvez contribuer à des causes qui comptent.
                    </p>
                    <button class="float-end py-2 px-4"><a class="text-white" href="{{route('benevol')}}">Consulter</a></button>

                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                <div class="image-wrapper">
                    <img class="img-fluid" src="/assets/img/work2.png">
                </div>
            </div>
        </div>

        <div class="row px-3 pt-5 align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                <div class="image-wrapper">
                    <img class="img-fluid" src="/assets/img/work3.jpg">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="content p-4">
                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">Nos offres de Stage</h4>
                    <p>
                        Explorez nos opportunités de stage passionnantes pour acquérir une expérience précieuse dans votre domaine. Découvrez comment vous pouvez développer vos compétences et contribuer à notre équipe dynamique. Consultez la liste complète des offres de stage.
                    </p>
                    <button class="float-end py-2 px-4"><a class="text-white" href="{{route('stage')}}">Consulter</a></button>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

@endsection
