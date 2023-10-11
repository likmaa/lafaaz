@extends('layouts.dash')
@section('title', 'Mes documents')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0">Mes documents</h1>
    </div>
    <div class="col-auto">
        <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                <div class="col-auto">
                    <a class="btn app-btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-upload me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                        </svg>Téléverser un document
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    @if(session()->has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
    @if ($files !== null)
    @foreach($files as $document)
    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
        <div class="app-card app-card-doc shadow-sm h-100">
            <div class="app-card-thumb-holder p-3">
                <span class="icon-holder">
                    <i class="bi bi-file-earmark-pdf-fill" style="color:red"></i>
                </span>
                <a class="app-card-link-mask" href="#file-link"></a>
            </div>
            <div class="app-card-body p-3 has-card-actions">

                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">{{$document->titre}}</a>
                </h4>
                <div class="app-doc-meta">
                    <ul class="list-unstyled mb-0">
                        <li><span class="text-muted">Type:</span> Pdf</li>
                        <li><span class="text-muted">Date:</span> {{$document->created_at}}</li>
                    </ul>
                </div>

                <div class="app-card-actions">
                    <div class="dropdown">
                        <div class="dropdown-toggle no-toggle-arrow float-end" data-bs-toggle="dropdown" aria-expanded="true">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            </svg>
                        </div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{$document->fichier}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                                        <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg>Voir</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('Destroyfile', $document->id)}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>Supprimer</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    @else
    <p>Vous n'avez pas encore publié de document.</p>
    @endif

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Informations sur le fichier à uploader</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('documents', ['utilisateurId' => Auth::user()->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body px-4">

                    <div class="row my-4">
                        <div class="col-lg-12 mb-3">
                            <select required name="user_id" id="nom" class="form-select">
                                <option value="{{Auth::user()->id}}" selected>{{Auth::user()->name}}</option>

                            </select>
                        </div>

                    </div>
                    <div class="row my-4">
                        <div class="col-lg-6 mb-3">
                            <label for="">Nom du fichier</label>
                            <input type="text" class="form-control" placeholder="Nom du fichier" name="titre" aria-label="">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Image</label>
                            <input accept="application/pdf/*" type="file" class="form-control" placeholder="fichier" name="fichier" aria-label="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ajouter le document</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection