@extends('layouts.dash')
@section('title', 'Nos réalisations')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
	<div class="col-auto">
		<h2 class="app-page-title mb-0">Gestion des réalisations de la fondation</h2>
	</div>
	<div class="col-auto">
		<div class="page-utilities">
			<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
				<div class="col-auto">
					<button type="submit" class="btn app-btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter une réalisation</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row g-4">
	@if(session()->has('success'))
	<div class="alert alert-success">{{session('success')}}</div>
	@endif
	@foreach($realisations as $realisation)
	<div class="col-6 col-md-4 col-xl-3 col-xxl-3">
		<div class="app-card app-card-doc shadow-sm h-100">
			<div class="app-card-thumb-">
				<img src="{{$realisation->image}}" class="card-img-top" height="175" alt="...">
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
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter une réalisation</h1>
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
							<label for="">Document</label>
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

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Détails sur la réalisation #153</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body px-4">
				<div class="row py-2">
					<div class="col-lg-6">
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Titre</strong></div>
								<div class="item-data">Lorem ipsum dolor sit amet</div>
							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Document de rapport : </strong></div>
								<div class="item-data">
								</div>
							</div>
						</div>
						<div class="item py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Créer le:</strong> {{$realisation->created_at}}</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="item py-3">
							<div class="row justify-content-between align-items-center">
								<img src="{{$realisation->image}}" alt="" width="" height="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection