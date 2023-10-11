@extends('layouts.dash')
@section('title', 'Projets de dons')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
	<div class="col-auto">
		<h1 class="app-page-title mb-0">Gestion des dons</h1>
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
				<div class="app-card-body">
					@if(session()->has('success'))
					<div class="alert alert-success">{{session('success')}}</div>
					@endif
					<div class="table-responsive">
						<table class="table app-table-hover mb-0 text-left">
							<thead>
								<tr>
									<th class="cell">ID</th>
									<th class="cell">Projets</th>
									<th class="cell">Date de lancement</th>
									<th class="cell">Total de participant</th>
									<th class="cell">Actions</th>
								</tr>
							</thead>
							<tbody>

								@foreach($projets as $projet)
								<tr>
									<td class="cell">#158{{$projet->id}}</td>
									<td class="cell">{{$projet->titre}}</td>
									<td class="cell"><span>{{$projet->date}}</span>
									</td>
									<td class="cell"></td>
									<td class="cell">
										<a class="btn-sm app-btn-secondary" href="{{route('detail', $projet->id)}}">Plus</a>
									</td>

								</tr>
								@endforeach
							</tbody>
						</table>

						{!! $projets->links() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Informations du projet</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<form action="{{route('addprojet')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="modal-body px-4">
					<div class="row my-4">
						<div class="col-lg-6 mb-3">
							<label for="">Titre du projet</label>
							<input name="titre" type="text" class="form-control" placeholder="Titre du projet" aria-label="Titre">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Date de lancement du projet</label>
							<input name="date" type="date" class="form-control" placeholder="Date de lancement" aria-label="Date">
						</div>
					</div>
					<div class="row my-4">
						<div class="col-lg-12 mb-3">
							<label for="">Image d'apercu du projet</label>
							<input name="image" type="file" class="form-control" placeholder="Image d'apercu projet" aria-label="Image">
						</div>
					</div>
					<div class="row my-4">
						<div class="col-lg-12 mb-3">
							<label for="">Description du projet</label>
							<textarea name="description" id="" cols="30" placeholder="Description du projet" class="form-control" rows="5"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Ajouter un projet</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection