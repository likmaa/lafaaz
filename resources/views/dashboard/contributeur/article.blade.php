@extends('layouts.dash')
@section('title', 'Gestion des articles')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
  <div class="col-auto">
    <h2 class="app-page-title mb-0">Gestion des articles</h2>
  </div>
  <div class="col-auto">
    <div class="page-utilities">
      <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
        <div class="col-auto">
          <button type="submit" class="btn app-btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="tab-content">
    <div class="tab-pa">

      <div class="app-card app-card-orders-table bg-white shadow-sm mb-5">
        <div class="row g-4">
          @if(session()->has('success'))
          <div class="alert alert-success">{{session('success')}}</div>
          @endif
          @foreach($actus as $actu)
          <div class="col-6 col-md-4 col-xl-3 col-xxl-3">
            <div class="app-card app-card-doc shadow-sm h-100">
              <div class="app-card-thumb-">
                <img src="{{$actu->image}}" class="card-img-top" height="175" alt="...">
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
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter une actualité</h1>
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

@endsection