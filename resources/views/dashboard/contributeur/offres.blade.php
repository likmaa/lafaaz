@extends('layouts.dash')
@section('title', 'Gestion des offres')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
	<div class="col-auto">
		<h2 class="app-page-title mb-0">Gestion des recrutements</h2>
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

<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
	<!-- <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Tout</a> -->
	<a class="flex-sm-fill text-sm-center nav-link active" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="true"> Offres de stage</a>
	<a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Offres d'emplois</a>
	<a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Bénévolats</a>
</nav>

<div class="tab-content " id="orders-table-tab-content">

	<div class="tab-pane fade show active" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
		<div class="app-card app-card-orders-table mb-5 bg-white">
			@if(session()->has('success'))
			<div class="alert alert-success">{{session('success')}}</div>
			@endif
			<div class="app-card-body">
				<div class="table-responsive">

					<table class="table mb-0 text-left">
						<thead>
							<tr>
								<th class="cell">ID</th>
								<th class="cell">Titre</th>
								<th class="cell">Référence</th>
								<th class="cell">Type de contrat</th>
								<th class="cell">Expire le</th>
								<th class="cell">Type d'offre</th>
								<th class="cell">Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($stages as $stage)
							<tr>
								<td class="cell">#153{{$stage->id}}</td>
								<td class="cell">{{$stage->titre}}</td>
								<td class="cell">{{$stage->reference}}</td>
								<td class="cell">{{$stage->contrat}}</td>
								<td class="cell">{{$stage->expire}}</span>
								</td>
								<td class="cell"><span class="badge bg-primary">stage</span></td>
								<td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('dstage', $stage->id)}}">Voir</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{!! $stages->links() !!}
				</div>
			</div>
		</div>
	</div>

	<div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
		<div class="app-card app-card-orders-table mb-5 bg-white">
			@if(session()->has('success'))
			<div class="alert alert-success">{{session('success')}}</div>
			@endif
			<div class="app-card-body">
				<div class="table-responsive">
					<table class="table mb-0 text-left">
						<thead>
							<tr>
								<th class="cell">ID</th>
								<th class="cell">Titre</th>
								<th class="cell">Référence</th>
								<th class="cell">Type de contrat</th>
								<th class="cell">Expire le</th>
								<th class="cell">Type d'offre</th>
								<th class="cell">Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($emploies as $emploie)
							<tr>
								<td class="cell">#153{{$emploie->id}}</td>
								<td class="cell">{{$emploie->titre}}</td>
								<td class="cell">{{$emploie->reference}}</td>
								<td class="cell">{{$emploie->contrat}}</td>
								<td class="cell">{{$emploie->expire}}</span>
								</td>
								<td class="cell"><span class="badge bg-warning">Emplois</span></td>
								<td class="cell">
									<a class="btn-sm app-btn-secondary" href="{{route('demplois', $emploie->id)}}">Voir</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{!! $emploies->links() !!}
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
		<div class="app-card app-card-orders-table mb-5 bg-white">
			@if(session()->has('success'))
			<div class="alert alert-success">{{session('success')}}</div>
			@endif
			<div class="app-card-body">
				<div class="table-responsive">
					<table class="table mb-0 text-left">
						<thead>
							<tr>
								<th class="cell">ID</th>
								<th class="cell">Titre</th>
								<th class="cell">Référence</th>
								<th class="cell">Type de contrat</th>
								<th class="cell">Expire le</th>
								<th class="cell">Type d'offre</th>
								<th class="cell">Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($benevolats as $benevolat)
							<tr>
								<td class="cell">#15{{$benevolat->id}}</td>
								<td class="cell">{{$benevolat->titre}}</td>
								<td class="cell">{{$benevolat->reference}}</td>
								<td class="cell">{{$benevolat->contrat}}</td>
								<td class="cell">{{$benevolat->expire}}</span>
								</td>
								<td class="cell"><span class="badge bg-success">Bénévolats</span></td>
								<td class="cell"><a class="btn-sm app-btn-secondary" href="#">Voir</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{!! $benevolats->links() !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Informations du recrutement</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="{{route('addrecrutement')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="modal-body px-4">
					<div class="row my-4">
						<div class="col-lg-6 mb-3">
							<label for="">Titre du recrutement</label>
							<input type="text" name="titre" class="form-control" placeholder="Titre du recutement">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Type de l'offre</label>
							<select id="inputState" name="typeoff" class="form-select">
								<option selected>Choose...</option>
								<option value="stage">Stages</option>
								<option value="emploie">Emploie</option>
								<option value="benevolat">Bénévolats</option>
							</select>
						</div>
					</div>
					<div class="row my-4">
						<div class="col-lg-6 mb-3">
							<label for="">Référence</label>
							<input type="text" name="reference" class="form-control" placeholder="Référence">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Niveau d'études</label>
							<select name="niveaue" id="inputState" class="form-select">
								<option selected>Choose...</option>
								<option value="cep">CEP</option>
								<option value="bepc">BEPC</option>
								<option value="bac">BAC</option>
								<option value="bac1">BAC+1</option>
								<option value="bac2">BAC+2</option>
								<option value="bac3">BAC+3</option>
								<option value="bac4">BAC+4</option>
								<option value="bac5">BAC+5</option>
								<option value="bac6">BAC+6</option>
								<option value="bac7">BAC+7</option>
							</select>
						</div>
					</div>
					<div class="row my-4">
						<div class="col-lg-6 mb-3">
							<label for="">Expérience</label>
							<input type="number" name="experience" class="form-control" placeholder="Expérience">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Type de contrat</label>
							<select name="contrat" id="inputState" class="form-select">
								<option selected>Choose...</option>
								<option value="cdd">CDD</option>
								<option value="cdi">CDI</option>
							</select>
						</div>
					</div>
					<div class="row my-4">
						<div class="col-lg-6 mb-3">
							<label for="">Image d'apercu</label>
							<input accept="image/*" type="file" name="image" class="form-control" placeholder="Expérience">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Expire le</label>
							<input name="expire" type="date" class="form-control" placeholder="Expérience">
						</div>
					</div>
					<div class="row my-4">
						<div class="col-lg-12 mb-3">
							<label for="">Description du l'offre</label>
							<textarea name="description" id="" cols="30" placeholder="Descriptio de l'offre" class="form-control" rows="5"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Ajouter l'offre de recrutement</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Informations du postulant</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body px-4">
				<div class="row py-2">
					<div class="col-lg-6">
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Nom</strong></div>
								<div class="item-data">James</div>
							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Prenoms</strong></div>
								<div class="item-data">Doe</div>
							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Contact</strong></div>
								<div class="item-data">111111</div>
							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Email</strong></div>
								<div class="item-data">james.doe@gmail.com</div>

							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Addresse</strong></div>
								<div class="item-data">Doe</div>
							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Code postale</strong></div>
								<div class="item-data">Doe</div>
							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Ville</strong></div>
								<div class="item-data">Cotonou</div>
							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Pays</strong></div>
								<div class="item-data">Doe</div>
							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Date de naissance</strong></div>
								<div class="item-data">111111</div>
							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label"><strong>Email</strong></div>
								<div class="item-data">james.doe@gmail.com</div>

							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label mb-2"><strong>Photo CNI</strong></div>
								<div class="item-data">
									<img src="/asset/images/profile/user-1.jpg" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label mb-2"><strong>Casier judiciaire</strong></div>
								<div class="item-data">
									Cliquer
									<b><a href="http://" target="_blank" rel="noopener noreferrer">ici</a></b> pour voir la lettre de motivation
								</div>
							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label mb-2"><strong>Curicculum Vitae</strong></div>
								<div class="item-data">
									Cliquer
									<b><a href="http://" target="_blank" rel="noopener noreferrer">ici</a></b> pour voir curicculum vitae
								</div>
							</div>
						</div>
						<div class="item border-bottom py-3">
							<div class="row justify-content-between align-items-center">
								<div class="item-label mb-2"><strong>Lettre de motivation</strong></div>
								<div class="item-data">
									Cliquer
									<b><a href="http://" target="_blank" rel="noopener noreferrer">ici</a></b> pour voir la lettre de motivation
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Approuver</button>
				<button type="button" class="btn btn-danger">Rejeter</button>
			</div>
		</div>
	</div>
</div>
@endsection