@extends('layouts.dash')
@section('title', 'Gestion des offres')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h2 class="app-page-title mb-0">Gestion des Actualités & Réalisations</h2>
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
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Actualité</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">Réalisation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
    <a class="flex-sm-fill text-sm-center nav-link active col-6" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="true"> Actualités</a>
    <a class="flex-sm-fill text-sm-center nav-link col-6" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Réalisations</a>
</nav>

<div class="tab-content " id="orders-table-tab-content">
    <div class="tab-pane fade show active" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
        <div class="row g-4">
            @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @foreach($actus as $actu)
            <div class="col-6 col-md-4 col-xl-3 col-xxl-3">
                <div class="app-card app-card-doc shadow-sm h-100">
                    <div class="app-card-thumb-">
                        <img src="{{ config('filesystems.disks.public.url') . $actu->image }}" class="card-img-top" height="175" alt="...">
                    </div>
                    <div class="app-card-body p-3 has-card-actions">
                        <h4 class="app-doc-title truncate mb-2">
                            {{$actu->titre}}
                        </h4>
                        <div class="app-doc-meta">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><span class="text-muted"><b>Id:</b></span> #153{{$actu->id}}</li>
                                <li><span class="text-muted"><b>Date:</b></span> {{$actu->created_at}}</li>
                            </ul>
                        </div>
                        <div class="float-end my-3">
                            <a href="{{route('actu2', $actu->id)}}"  class="badge bg-secondary" style="cursor: pointer;">Voir plus</a>
                            <a href="{{route('afficherModificationActu', $actu->id)}}"  class="badge bg-primary" style="cursor: pointer;">Modifier</a>
                            <a href="{{route('Destroyactu', $actu->id)}}"  class="badge bg-danger" style="cursor: pointer;">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {!! $actus->links() !!}
        </div>
    </div>

    <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
        <div class="row g-4">
            @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @foreach($realisations as $realisation)
            <div class="col-6 col-md-4 col-xl-3 col-xxl-3">
                <div class="app-card app-card-doc shadow-sm h-100">
                    <div class="app-card-thumb-">
                        <img src="{{ config('filesystems.disks.public.url') . $realisation->image}}" class="card-img-top" height="175" alt="...">
                    </div>
                    <div class="app-card-body p-3 has-card-actions">
                        <h4 class="app-doc-title truncate mb-2">
                            {{$realisation->titre}}
                        </h4>
                        <div class="app-doc-meta">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><span class="text-muted"><b>Id:</b></span> #153{{$realisation->id}}</li>
                                <li><span class="text-muted"><b>Date:</b></span> {{$realisation->created_at}}</li>
                            </ul>
                        </div>
                        <div class="float-end my-3">
                            <a href="{{$realisation->fichier}}"  class="badge bg-secondary" style="cursor: pointer;">Voir plus</a>
                            <a href="{{ route("afficherModificationReal", $realisation->id) }}"  class="badge bg-primary" style="cursor: pointer;">Modifier</a>
                            <a href="{{route('Destroyrealis', $realisation->id)}}"  class="badge bg-danger" style="cursor: pointer;">Supprimer</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {!! $realisations->links() !!}
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Informations de l'actualité</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('aactu')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-4">
                    <div class="row my-4">
                        <div class="col-lg-6 mb-3">
                            <label for="">Titre</label>
                            <input type="text" class="form-control" placeholder="Titre" name="titre" aria-label="">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Image</label>
                            <input accept="image/*" type="file" class="form-control" placeholder="Image" name="image" aria-label="">
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-lg-12 mb-3">
                            <label for="">Description</label>
                            <textarea name="description" id="description" cols="30" placeholder="Description" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ajouter une actualité</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Informations de la réalisation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('addrealisation')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-4">
                    <div class="row my-4">
                        <div class="col-lg-12 mb-3">
                            <label for="">Titre</label>
                            <input type="text" name="titre" class="form-control" placeholder="Titre" aria-label="">
                        </div>

                    </div>
                    <div class="row my-4">
                        <div class="col-lg-6 mb-3">
                            <label for="">Image</label>
                            <input accept="image/*" type="file" name="image" class="form-control" placeholder="Image" aria-label="">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Document de rapport</label>
                            <input accept="application/pdf/*" type="file" name="fichier" class="form-control" placeholder="Document" aria-label="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ajouter une réalisation</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection