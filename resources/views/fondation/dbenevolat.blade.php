@extends('layouts.header')
@section('title', 'Detail du bénévolat')
@section('content')

<!-- SECTION 1 -->
<section class="aboutSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h2>
                        Détail sur l'offre de Bénevolat
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

<section class="dbenevolatSection1">
    <div class="container">

        <div class="row">
            <h3 class="card-title text-body-secondary my-5"> {{$benev->titre}}</h3>

            <div class="col-lg-9 px-3">
                <div class="row">
                    <div class="col-lg-12">

                        <h5 class="card-title text-body-secondary my-4"> Description de la mission</h5>

                        <p class="card-text pt-2 lead">
                        {{$benev->description}}

                        </p>
                    </div>
                    <div class="col-lg-12 my-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-title text-body-secondary">Référence</h5>

                                <p class="card-text pt-2 lead">
                                {{$benev->reference}}
                                </p>

                            </div>
                            <div class="col-lg-6">

                                <h5 class="card-title text-body-secondary">Expérience</h5>

                                <p class="card-text pt-2 lead">
                                {{$benev->experience}} an
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-3">

                </div>
            </div>

            <div class="col-lg-3 px-3">
                <div class="row">
                    <div class="col-lg-12 my-4">
                        <div class="card mb-3 bg-white p-2">
                            <div class="card-body py-2">
                                <p class="card-text">
                                    <i class="bi bi-calendar-check-fill"></i>
                                    <small class="text-body-secondary">Dès que possible</small>
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <small class="text-body-secondary">Bénin</small>
                                </p>
                                <a href="mailto:info@lafaaz.org" class="w-100 py-3" >Me porter volontaire
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 text-center">
                        <p class="lead">
                            Partager la mission
                        </p>
                        <p class="lead">
                            <a href="" title="Facebook" class="mx-1">
                                <i class="bi bi-facebook " class="img-fluid rounded-end"></i>
                            </a>
                            <a href="" title="Instagram" class="mx-1">
                                <i class="bi bi-instagram" class="img-fluid rounded-end"></i>

                            </a>
                            <a href="" title="Linkedin" class="mx-1">
                                <i class="bi bi-linkedin" class="img-fluid rounded-end"></i>

                            </a>
                            <a href="" title="Twitter" class="mx-1">
                                <i class="bi bi-x-lg" class="img-fluid rounded-end"></i>
                            </a>
                            <a href="" title="Tiktok" class="mx-1">
                                <i class="bi bi-tiktok" class="img-fluid rounded-end"></i>
                            </a>
                            <a href="" title="Youtube" class="mx-1">
                            <i class="bi bi-youtube" class="img-fluid rounded-end"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content benevolats">

            <div class="modal-body">
                <button type="button" class="float-end">
                    <i class="bi bi-x" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></i>
                </button>
                <h6 class="card-subtitle m-3 text-body-secondary">Resumé de l'annonce</h6>

                <div class="card m-3">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-body-secondary">Mission de secours</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <form class="row g-3 p-4">
                    <div class="col-md-6">
                        <label for="inputTexte" class="form-label">Prenoms</label>
                        <input placeholder="Ex: John" type="text" class="form-control" id="inputTexte">
                    </div>
                    <div class="col-md-6">
                        <label for="inputTexte" class="form-label">Nom</label>
                        <input placeholder="Ex: Doe" type="text" class="form-control" id="inputTexte">
                    </div>

                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input placeholder="Ex: john@gmail.com" type="number" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Téléphone</label>
                        <input placeholder="Ex: " type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Ville</label>
                        <input placeholder="Ex: Cotonou" type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Message</label>

                        <textarea placeholder="Ex: Message" id="" class="form-control" cols="30" rows="4"></textarea>
                    </div>
                    <div class="col-md-12">
                        <p>
                            La <b>Fondation des Amis A à Z</b> collecte et traite vos données personnelles afin de pouvoir traiter votre demande d'inscription à une mission de bénévolat et de pouvoir vous recontacter.
                            Pour en savoir plus sur la gestion de vos données personnelles et pour exercer vos droits, référez-vous à la politique de protection des données.
                        </p>
                    </div>
                    <div class="col-md-12 col-6">
                        <button type="submit" class="btn btn-primary pb-2 col-6">Envoyer mon message</button>
                    </div>
                    <div class="col-md-12">
                        <p class="mt-5">
                            En cliquant sur « Envoyer votre message », <b>je reconnais avoir plus de 18 ans,</b>
                            avoir pris connaissance des <b>Conditions Générales d’Utilisation et de la Politique
                                de confidentialité du site et les accepter</b>.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection