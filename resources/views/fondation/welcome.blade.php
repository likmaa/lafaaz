@extends('layouts.header')
@section('title', 'Accueil')
@section('content')

<!-- SECTION 1 -->
<section class="homeSection1">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/accueil1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/about1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/projet2.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- END SECTION 1 -->

<!-- SECTION 2 -->
<section class="homeSection2 text-center p-4">
    <h2 class="text-uppercase fw-500 pb-2">Make a difference</h2>
    <h5 class="fw-500">Favoriser l’accès aux besoins quotidiens et à l’égalité des chances chez les personnes
        vulnérables</h5>
</section>
<!-- END SECTION 2 -->

<!-- SECTION 3 -->
<section id="services" class="services">
    <div class="container homeSection3" data-aos="fade-up">

        <div class="my-5 text-center">
            <h2 class="fw-500 text-center col-lg-4 offset-lg-4 col-12">
                <span>
                    {{-- <img src="../assets/img/accueil2.png" alt="" srcset="" width="40" height="49"> --}}
                    Nos causes
                </span>
            </h2>
            <div class="underline_blue my-3"></div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 " data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box justify-content-center align-items-center">
                    <div class="icon">
                        <img src="../assets/img/accueil3.png" width="87" height="87">
                    </div>
                    <h4>Aide à l’enfance indigente</h4>
                    <p style="text-align: justify;">
                        Nous fournissons une aide essentielle aux enfants indigents en leur offrant des
                        soins de
                        santé, une éducation, un soutien émotionnel et d'autres ressources nécessaires pour
                        les
                        aider à surmonter les défis liés à leur situation
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon">
                        <img src="../assets/img/accueil4.png" width="87" height="87">
                    </div>
                    <h4>Promotion de l'excellence
                        en milieu scolaire</h4>
                    <p style="text-align: justify;">
                        Nous nous engageons à promouvoir l'excellence chez les enfants en leur fournissant
                        des
                        opportunités d'apprentissage et de développement, des outils et des ressources pour
                        cultiver leur créativité, leur curiosité et leur passion, ainsi qu'un environnement
                        stimulant pour atteindre leur plein potentiel
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon">
                        <img src="../assets/img/accueil5.png" width="87" height="87">
                    </div>
                    <h4>Coaching de la jeunesse
                        et leadership transformationnel</h4>
                    <p style="text-align: justify;">
                        Nous offrons un coaching en leadership transformationnel pour les jeunes, en les
                        aidant
                        à développer les compétences de communication, de collaboration et de pensée
                        critique
                        nécessaires pour devenir des leaders efficaces et inspirants, capables de
                        transformer
                        leur environnement et de créer un impact positif dans le monde
                    </p>
                </div>
            </div>

            <div class="col-lg-4 offset-lg-1 col-md-6 mt-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon">
                        <img src="../assets/img/accueil6.png" width="87" height="87">
                    </div>
                    <h4>Coaching conjugal</h4>
                    <p style="text-align: justify;">
                        Nous offrons un coaching personnalisé pour aider les couples à améliorer leur
                        communication, à renforcer leur lien émotionnel et à résoudre les conflits de
                        manière
                        constructive, afin de construire des relations durables et épanouissantes
                    </p>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-2 col-md-6 mt-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon">
                        <img src="../assets/img/accueil7.png" width="87" height="87">
                    </div>
                    <h4>Assistance aux personnes
                        du troisième âge</h4>
                    <p style="text-align: justify;">
                        Nous offrons un coaching personnalisé pour aider les couples à améliorer leur
                        communication, à renforcer leur lien émotionnel et à résoudre les conflits de
                        manière
                        constructive, afin de construire des relations durables et épanouissantes
                    </p>
                </div>
            </div>


        </div>

    </div>
</section>
<!-- END SECTION 3 -->

<!-- SECTION 4 -->
<section class="projets">
    <div class="homeSection4 mb-5 mt-0">
        <div class="container" data-aos="fade-up">
            <div class="text-center ">
                <h2 class="fw-500 text-center justify-content-center col-lg-4 offset-lg-4 col-12">
                    <span>Projets récents</span>
                </h2>
                <div class="underline_green"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
            @foreach ($projets as $projet)
            <div class="gallery-cell">
                <img src="{{ $projet->image }}" alt="">
                <div class="content mt-3 py-3 px-3 mx-3">
                    <h3>Projet : {{ $projet->titre }}</h3>
                    @php
                    $extraitDescription = substr(trim($projet->description), 0, 100);
                    @endphp
                    <p>{!! $extraitDescription !!}...</p>
                    <div class="offset-lg-10 col-lg-1 me-4">
                        <a href="{{ route('detail', $projet->id) }}">
                            <button class="px-4 py-2">Détail</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- END SECTION 4 -->

<!-- SECTION 5 -->
<section class="homeSection5 d-flex justify-content-center allign-items-center ">
    <div class="container" data-aos="fade-up">

        <div class="text-center  ">
            <h2 class="fw-500 text-center justify-content-center col-lg-4 offset-lg-4 col-12">
                <span>Actualités</span>
            </h2>

            <div class="underline_blue"></div>
        </div>
        <div class="row mt-5">
            <!-- <div class="col-md-1"></div> -->
            @foreach ($actus as $actu)
            <div class="col-lg-4">
                <div class="card mb-5 m-3">
                    <div class="card-img-top" style="height: 250px; background: url('{{$actu->image}}'); background-size:cover; background-repeat: no-repeat"></div>

                    <!-- <img src="{{ $actu->image }}" class="card-img-top" height="200" alt="..."> -->
                    <div class="card-body">
                        <p class="card-text"><small class="text-body-secondary">
                                Publié le : {{ $actu->date }}</small></p>
                        <h5 class="card-title my-4">
                            {{ $actu->titre }}
                        </h5>
                        <p class="card-text">
                            <small class="text-body-secondary">
                                <a class="" href="{{ route('actu2', $actu->id) }}">
                                    Lire l'intégralité
                                </a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <div class="row align-items-center mt-5 pt-2">
            <div class="col-lg-4 mb-5 offset-lg-4"><button class="w-100"> <a href="{{ route('actu1') }}">Plus
                        d’actualités</a></button></div>
        </div>
    </div>
</section>
<!-- END SECTION 5 -->

<!-- SECTION 6 -->
<section id="featured-services" class="featured-services">
    <div class="container homeSection6" data-aos="fade-up">
        <h2 class="fw-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="49" viewBox="0 0 68 68" fill="none">
                <path d="M30.2222 28.3205C30.2222 31.4487 27.6852 33.9846 24.5556 33.9846C21.4259 33.9846 18.8889 31.4487 18.8889 28.3205C18.8889 25.1923 21.4259 22.6564 24.5556 22.6564C27.6852 22.6564 30.2222 25.1923 30.2222 28.3205Z" fill="url(#paint0_linear_1_886)" />
                <path d="M49.1111 28.3205C49.1111 31.4487 46.5741 33.9846 43.4444 33.9846C40.3148 33.9846 37.7778 31.4487 37.7778 28.3205C37.7778 25.1923 40.3148 22.6564 43.4444 22.6564C46.5741 22.6564 49.1111 25.1923 49.1111 28.3205Z" fill="url(#paint1_linear_1_886)" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 16.9923V50.9769C0 64.9793 15.993 72.9721 27.2 64.5707L37.7778 56.641H51C60.3888 56.641 68 49.0333 68 39.6487V16.9923C68 7.60771 60.3888 0 51 0H17C7.61116 0 0 7.60771 0 16.9923ZM11.3333 16.9923V50.9769C11.3333 55.6443 16.6643 58.3086 20.4 55.5081L32.4889 46.4456C33.4698 45.7103 34.6628 45.3128 35.8889 45.3128H51C54.1296 45.3128 56.6667 42.7769 56.6667 39.6487V16.9923C56.6667 13.8641 54.1296 11.3282 51 11.3282H17C13.8704 11.3282 11.3333 13.8641 11.3333 16.9923Z" fill="url(#paint2_linear_1_886)" />
                <defs>
                    <linearGradient id="paint0_linear_1_886" x1="34" y1="0" x2="34" y2="68" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0E7ABE" />
                        <stop offset="1" stop-color="#01B044" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_1_886" x1="34" y1="0" x2="34" y2="68" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0E7ABE" />
                        <stop offset="1" stop-color="#01B044" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_1_886" x1="34" y1="0" x2="34" y2="68" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0E7ABE" />
                        <stop offset="1" stop-color="#01B044" />
                    </linearGradient>
                </defs>
            </svg>
            Que disent nos donateurs ?
        </h2>

        <div class="d-flex justify-content-center pt-5" data-aos="fade-up">
            <div class="row">
                @foreach ($dons as $don)
                <div class="col-md-6 col-lg-4 mb-5 mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M7.50012 6C8.13484 5.9999 8.74583 6.24123 9.20916 6.67504C9.6725 7.10885 9.95348 7.70265 9.99512 8.336L10.0001 8.542C9.99012 12.097 8.76012 15.156 6.29512 17.765C6.2281 17.839 6.14699 17.8988 6.05654 17.9411C5.96609 17.9833 5.86812 18.0071 5.76838 18.0109C5.66863 18.0148 5.56911 17.9987 5.47566 17.9636C5.38221 17.9286 5.2967 17.8752 5.22414 17.8066C5.15159 17.7381 5.09345 17.6557 5.05314 17.5644C5.01283 17.4731 4.99115 17.3746 4.98938 17.2748C4.9876 17.175 5.00577 17.0758 5.04282 16.9832C5.07987 16.8905 5.13504 16.8061 5.20512 16.735C6.84512 14.998 7.86512 13.061 8.28212 10.876C7.93863 10.9884 7.57485 11.025 7.21585 10.9833C6.85685 10.9415 6.51117 10.8225 6.20263 10.6342C5.89409 10.446 5.63003 10.1932 5.42864 9.89305C5.22725 9.59294 5.09333 9.25274 5.0361 8.89588C4.97887 8.53903 4.99969 8.174 5.09713 7.82597C5.19457 7.47794 5.36631 7.15517 5.60052 6.87991C5.83473 6.60465 6.12584 6.38345 6.45378 6.23154C6.78172 6.07964 7.1387 6.00064 7.50012 6ZM16.5001 6C17.1348 5.9999 17.7458 6.24123 18.2092 6.67504C18.6725 7.10885 18.9535 7.70265 18.9951 8.336L19.0001 8.542C18.9901 12.102 17.7621 15.156 15.2951 17.765C15.2281 17.839 15.147 17.8988 15.0565 17.9411C14.9661 17.9833 14.8681 18.0071 14.7684 18.0109C14.6686 18.0148 14.5691 17.9987 14.4757 17.9636C14.3822 17.9286 14.2967 17.8752 14.2241 17.8066C14.1516 17.7381 14.0935 17.6557 14.0531 17.5644C14.0128 17.4731 13.9911 17.3746 13.9894 17.2748C13.9876 17.175 14.0058 17.0758 14.0428 16.9832C14.0799 16.8905 14.135 16.8061 14.2051 16.735C15.8481 14.997 16.8671 13.063 17.2831 10.876C16.9397 10.9884 16.5759 11.025 16.217 10.9833C15.858 10.9416 15.5124 10.8225 15.2038 10.6344C14.8953 10.4462 14.6313 10.1934 14.4299 9.89335C14.2284 9.59331 14.0945 9.25317 14.0372 8.89637C13.9799 8.53957 14.0006 8.17459 14.098 7.82657C14.1953 7.47856 14.3669 7.15578 14.601 6.88048C14.8351 6.60519 15.1261 6.38391 15.454 6.23191C15.7818 6.07991 16.1387 6.00079 16.5001 6Z" fill="#1C1B1F" />
                            </svg>
                        </div>
                        <p class="description">
                            {!! $don->description !!}
                        </p>
                        <h4 class="title pt-2 d-flex">
                            <a class="pt-1 ps-4">{{ $don->titre }} </a>
                        </h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

</section>
<!-- END SECTION 6 -->
@endsection