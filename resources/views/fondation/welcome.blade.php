@extends('layouts.header')
@section('title', 'Accueil')
@section('content')

<!-- SECTION 1 -->
<section class="homeSection1">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner ">
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


<section id="services" class=" services">

    <div class="container homeSection3" data-aos="fade-up">

        <div class="mt-5 text-center">
            <h2 class="fw-500 text-center col-lg-4 offset-lg-4 col-12">
                <span>
                    <img src="../assets/img/accueil2.png" alt="" srcset="" width="40" height="49">
                    Nos causes
                </span>
            </h2>
            <div class="underline_blue"></div>
        </div>
        <div id="carouselExampleControls2" class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div  class="card ">
                        <div    class="col-md-12 content-card" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box justify-content-center align-items-center">
                                <div class="icon">
                                    <img src="../assets/img/accueil3.png" width="87" height="87">
                                </div>
                                <h4>Aide à l’enfance indigente</h4>
                                <p>
                                    Nous fournissons une aide essentielle aux enfants indigents en leur offrant des
                                    soins de
                                    santé, une éducation, un soutien émotionnel et d'autres ressources nécessaires pour
                                    x& les
                                    aider à surmonter les défis liés à leur situation
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">

                        <div class="col-md-12 content-card" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon">
                                    <img src="../assets/img/accueil4.png" width="87" height="87">
                                </div>
                                <h4>Promotion de l'excellence
                                    en milieu scolaire</h4>
                                <p>
                                    Nous nous engageons à promouvoir l'excellence chez les enfants en leur fournissant
                                    des
                                    opportunités d'apprentissage et de développement, des outils et des ressources pour
                                    cultiver leur créativité, leur curiosité et leur passion, ainsi qu'un environnement
                                    stimulant pour atteindre leur plein potentiel
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="col-md-12 content-card " data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon">
                                    <img src="../assets/img/accueil5.png" width="87" height="87">
                                </div>
                                <h4>Coaching de la jeunesse
                                    et leadership transformationnel</h4>
                                <p>
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
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="col-md-12 content-card offset-lg-1  mt-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon">
                                    <img src="../assets/img/accueil6.png" width="87" height="87">
                                </div>
                                <h4>Coaching conjugal</h4>
                                <p>
                                    Nous offrons un coaching personnalisé pour aider les couples à améliorer leur
                                    communication, à renforcer leur lien émotionnel et à résoudre les conflits de
                                    manière
                                    constructive, afin de construire des relations durables et épanouissantes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="col-md-12 content-card offset-lg-1  mt-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon">
                                    <img src="../assets/img/accueil7.png" width="87" height="87">
                                </div>
                                <h4>Assistance aux personnes
                                    du troisième âge</h4>
                                <p>
                                    Nous offrons un coaching personnalisé pour aider les couples à améliorer leur
                                    communication, à renforcer leur lien émotionnel et à résoudre les conflits de
                                    manière
                                    constructive, afin de construire des relations durables et épanouissantes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- END SECTION 3 -->


<!-- SECTION 4 -->
<section class="homeSection4 mb-0 d-flex justify-content-center allign-items-center">
    <div class="container" data-aos="fade-up">
        <div class=" text-center ">
            <h2 class="fw-500 text-center justify-content-center col-lg-4 offset-lg-4 col-12">
                <img src="/assets/img/accueil8.png" alt="" srcset="" width="40" height="49">
                <span>Projet récents</span>
            </h2>
            <div class="underline_green"></div>
        </div>
        <div class="row mt-5 m-3  ">
            @foreach($projets as $projet)
            <div class="col  mb-5 m-3">
                <div class="card ">
                    <img src="{{$projet->image}}" class="card-img-top" height="200" alt="...">
                    <div class="card-body">
                        <p class="card-text"><small class="text-body-secondary">
                                Publié le : {{$projet->date}}</small></p>
                        <h5 class="card-title my-4">
                            {{$projet->titre}}
                        </h5>
                        <p class="card-text">
                            <small class="text-body-secondary">
                                <a class="" href="{{route('detail', $projet->id)}}">
                                    Voir details
                                </a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row align-items-center mt-5 pt-2">
            <div class="col-lg-3 mb-5 offset-lg-4">
                <button class="w-100"> <a href="{{route('projet')}}">Plus de projets</a></button>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 4 -->

<!-- SECTION 5 -->
<section class="homeSection5 d-flex justify-content-center allign-items-center ">
    <div class="container" data-aos="fade-up">

        <div class="text-center  ">
            <h2 class="fw-500 text-center justify-content-center col-lg-4 offset-lg-4 col-12">
                <img src="../assets/img/accueil9.png" alt="" srcset="" width="40" height="45">
                <span>Actualités</span>
            </h2>

            <div class="underline_blue"></div>
        </div>
        <div class="row mt-5       ">
            <!-- <div class="col-md-1"></div> -->
            @foreach($actus as $actu)

            <div class="col mb-5 m-3">
                <div class="card m-4 ">
                    <img src="{{$actu->image}}" class="card-img-top" height="200" alt="...">
                    <div class="card-body">
                        <p class="card-text"><small class="text-body-secondary">
                                Publié le : {{$actu->date}}</small></p>
                        <h5 class="card-title my-4">
                            {{$actu->titre}}
                        </h5>
                        <p class="card-text">
                            <small class="text-body-secondary">
                                <a class="" href="{{route('actu2' , $actu->id)}}">
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
            <div class="col-lg-4 mb-5 offset-lg-4"><button class="w-100"> <a href="{{route('actu1')}}">Plus d’actualité</a></button></div>
        </div>
    </div>
</section>
<!-- END SECTION 5 -->

<!-- SECTION 6 -->
<section id="featured-services" class="featured-services">





</section>

<div class="testimonial-slider new">
    <div id="carouselExampleControls" class="carousel carousel-dark">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center ">
                <div class="contente col-md-4 m-5 p-3">
                    <h2 class="fw-500 text-center">
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
                    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                </div>
                </button>

                <div class="col-md-4  p-5">
                    <div class="carousel-inner ">
                        @foreach($dons as $don)
                        <div class="carousel-item active">
                            <div class="card">
                                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-1-scaled.jpg" class="d-block w-100" alt="..."> </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$don->titre}}</h5>
                                    <i class="bi bi-star-fill text-warning pe-1"></i>
                                    <i class="bi bi-star-fill text-warning pe-1"></i>
                                    <i class="bi bi-star-fill text-warning pe-1"></i>
                                    <i class="bi bi-star-fill text-warning pe-1"></i>
                                    <i class="bi bi-star-fill text-warning pe-1"></i>
                                    <p class="card-text"> {{$don->description}}</p>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection