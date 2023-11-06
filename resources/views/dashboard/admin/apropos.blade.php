@extends('layouts.dash')
@section('title', 'Apropos')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h2 class="app-page-title mb-0">Gestion des Apropos</h2>
    </div>
    <div class="col-auto">
        <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

                <div class="col-auto">
                    <div class="dropdown">
                        <button class="btn app-btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ajouter
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Donateur</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">Faq</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">Bénevole</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Témoignages Donateurs</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Faqs</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Témoignages Bénevoles</a>
</nav>

<div class="tab-content " id="orders-table-tab-content">
    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5 bg-white">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Nom - Prénoms</th>
                                <th class="cell">Status</th>
                                <th class="cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dons as $don)
                            <tr>
                                <td class="cell">#15{{$don->id}}</td>
                                <td class="cell">{{$don->titre}}</td>
                                <td class="cell"><span class="badge bg-success">Donateur</span></td>
                                <td class="cell">
                                    <a class="btn-sm app-btn-secondary" href="#">Voir</a>
                                    <a class="btn-sm app-btn-secondary" href="{{route('Destroydona', $don->id)}}">Supprimer</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $dons->links() !!}
                </div>

            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
        <div class="app-card app-card-orders-table mb-5 bg-white">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Titre</th>
                                <th class="cell">Status</th>
                                <th class="cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faqs as $faq)
                            <tr>
                                <td class="cell">#15{{$faq->id}}</td>
                                <td class="cell">{{$faq->titre}}</td>
                                <td class="cell"><span class="badge bg-warning">Faq</span></td>
                                <td class="cell">
                                    <a class="btn-sm app-btn-secondary" href="#">Voir</a>
                                    <a class="btn-sm app-btn-secondary" href="{{route('Destroyfaq', $faq->id)}}">Supprimer</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $faqs->links() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
        <div class="row g-4">
            @foreach($benevols as $benevol)
            <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                <div class="app-card app-card-doc shadow-sm h-100">
                    <div class="app-card-thumb-holder p-3">
                        <img src="{{$benevol->image}}" alt="" width="75" height="75" class="rounded-circle">
                    </div>
                    <div class="app-card-body p-3 has-card-actions">

                        <h4 class="app-doc-title truncate mb-0">
                            {{$benevol->titre}}
                        </h4>
                        <div class="float-end my-3">
                            <a href="#file-link" data-bs-toggle="modal" data-bs-target="#exampleModal4" class="badge bg-secondary" style="cursor: pointer;">Voir</a>
                            <a href="{{route('Destroybenev', $benevol->id)}}" class="badge bg-danger" style="cursor: pointer;">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {!! $benevols->links() !!}
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Témoignage Donateur</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('addona')}}" method="post">
                @csrf
                <div class="modal-body px-4">
                    <div class="row my-4">
                        <div class="col-lg-12 mb-3">
                            <label for="">Nom - Prénoms</label>
                            <input type="text" name="titre" class="form-control" placeholder="Titre" aria-label="">
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-lg-12 mb-3">
                            <label for="">Temoignage</label>
                            <textarea class="form-control" placeholder="Temoignage" name="description" id="description" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
 
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajout Faq</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('addfaq')}}" method="post">
                @csrf
                <div class="modal-body px-4">
                    <div class="row my-4">
                        <div class="col-lg-12 mb-3">
                            <label for="">Titre</label>
                            <input type="text" name="titre" required class="form-control" placeholder="Titre" aria-label="">
                        </div>

                    </div>
                    <div class="row my-4">
                        <div class="col-lg-12 mb-3">
                            <label for="">Détails</label>
                            <textarea class="form-control" required placeholder="Détails" name="description" id="descriptionFaq" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Témoignage Bénevole</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('addtbenevol')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-4">
                    <div class="row my-4">
                        <div class="col-lg-6 mb-3">
                            <label for="">Nom - Prénoms</label>
                            <input type="text" name="titre" class="form-control" placeholder="Titre" aria-label="">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Image</label>
                            <input accept="image/*" type="file" name="image" class="form-control" placeholder="Titre" aria-label="">
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-lg-12 mb-3">
                            <label for="">Temoignage</label>
                            <textarea class="form-control" placeholder="Temoignage" name="description" id="descriptionTemoignage" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ajouter un témoignage</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Informations de Faq</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4">
                <div class="row py-2">
                    <div class="col-lg-12">
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Nom Prenoms</strong></div>
                                <div class="item-data">James</div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Temoignage</strong></div>
                                <div class="item-data">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis cupiditate impedit iure minus nam repellendus magnam blanditiis? Esse quaerat voluptatum commodi corrupti vero laborum aliquid incidunt asperiores! Laboriosam, nesciunt repellendus?</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Informations de bénevole</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4">
                <div class="row py-2">
                    <div class="col-lg-6">
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Nom Prenoms</strong></div>
                                <div class="item-data">James</div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Temoignage</strong></div>
                                <div class="item-data"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ut quas, soluta possimus omnis nostrum totam ab mollitia repellendus aspernatur incidunt iure asperiores modi reprehenderit harum vel qui fugiat similique.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis cupiditate impedit iure minus nam repellendus magnam blanditiis? Esse quaerat voluptatum commodi corrupti vero laborum aliquid incidunt asperiores! Laboriosam, nesciunt repellendus?</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <img src="/asset/images/profile/user-1.jpg" alt="" width="" height="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection