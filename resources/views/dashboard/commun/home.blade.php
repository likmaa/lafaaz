@extends('layouts.dash')
@section('title', 'Tableau de bord')
@section('content')

@if(auth()->user()->rule == 'ADMIN')
<div class="row">
	<div class="col-lg-12 d-flex align-items-stretch">
		<div class="card w-100">
			<div class="card-body p-4">
				<h5 class="card-title fw-semibold mb-4">Transactions des adhésions</h5>
				<div class="table-responsive">
					<table class="table text-nowrap mb-0 align-middle">
						<thead class="text-dark fs-4">
							<tr>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Id</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Nom et prenoms</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Profession</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Date</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Montnant</h6>
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($rejoindre as $rejoin)
							<tr>
								<td class="border-bottom-0">
									<h6 class="fw-semibold mb-0">{{$rejoin->id}}</h6>
								</td>
								<td class="border-bottom-0">
									<h6 class="fw-semibold mb-1">{{$rejoin->nom}}</h6>

								</td>
								<td class="border-bottom-0">
									<p class="mb-0 fw-normal">{{$rejoin->profession}}</p>
								</td>
								<td class="border-bottom-0">
									<div class="d-flex align-items-center gap-2">
										<p class="mb-0 fw-normal">{{$rejoin->created_at}}</p>
									</div>
								</td>
								<td class="border-bottom-0">
									<h6 class="fw-semibold mb-0 fs-4">10.000CFA</h6>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 d-flex align-items-stretch">
		<div class="card w-100">
			<div class="card-body p-4">
				<h5 class="card-title fw-semibold mb-4">Transactions des dons pour soutient</h5>
				<div class="table-responsive">
					<table class="table text-nowrap mb-0 align-middle">
						<thead class="text-dark fs-4">
							<tr>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Id</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Nom et prenoms</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Téléphone</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Date</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Montant</h6>
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($soutien as $sout)
							<tr>
								<td class="border-bottom-0">
									<h6 class="fw-semibold mb-0">{{$sout->id}}</h6>
								</td>
								<td class="border-bottom-0">
									<h6 class="fw-semibold mb-1">{{$sout->nom}} {{$sout->prenom}}</h6>

								</td>
								<td class="border-bottom-0">
									<p class="mb-0 fw-normal">{{$sout->tel}}</p>
								</td>
								<td class="border-bottom-0">
									<div class="d-flex align-items-center gap-2">
										<p class="mb-0 fw-normal">{{$sout->created_at}}</p>
									</div>
								</td>
								<td class="border-bottom-0">
									<h6 class="fw-semibold mb-0 fs-4">{{$sout->montant}}CFA</h6>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 d-flex align-items-stretch">
		<div class="card w-100">
			<div class="card-body p-4">
				<h5 class="card-title fw-semibold mb-4">Transactions des dons pour projets</h5>
				<div class="table-responsive">
					<table class="table text-nowrap mb-0 align-middle">
						<thead class="text-dark fs-4">
							<tr>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Id</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Nom et prenoms</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Téléphone</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Projet</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Date</h6>
								</th>
								<th class="border-bottom-0">
									<h6 class="fw-semibold mb-0">Montant</h6>
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($projets as $projet)
							<tr>
								<td class="border-bottom-0">
									<h6 class="fw-semibold mb-0">{{$projet->id}}</h6>
								</td>
								<td class="border-bottom-0">
									<h6 class="fw-semibold mb-1">{{$projet->nom}} {{$projet->prenom}}</h6>

								</td>
								<td class="border-bottom-0">
									<p class="mb-0 fw-normal">{{$projet->tel}}</p>
								</td>
								<td class="border-bottom-0">
									<p class="mb-0 fw-normal">{{$projet->projet}}</p>
								</td>
								<td class="border-bottom-0">
									<div class="d-flex align-items-center gap-2">
										<p class="mb-0 fw-normal">{{$projet->created_at}}</p>
									</div>
								</td>
								<td class="border-bottom-0">
									<h6 class="fw-semibold mb-0 fs-4">{{$projet->montant}} FCFA</h6>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@elseif(auth()->user()->rule == 'CONTRIBUTEUR')
<div class="row">
	<div class="col-lg-12 d-flex align-items-stretch">
		<div class="card w-100">
			<div class="card-body p-4">
				<div class="mb-4">
					<h5 class="card-title fw-semibold text-center">Les dernières réalisation de la fondation</h5>
				</div>
				<div class="row">
					@foreach($realisations as $realisation)
					<div class="col-md-3">
						<div class="card">
							<img src="{{$realisation->image}}" height="175" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">{{$realisation->titre}}</h5>
							</div>
						</div>
					</div>
					@endforeach
				</div>

			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 d-flex align-items-stretch">
		<div class="card w-100">
			<div class="card-body p-4">
				<div class="mb-4">
					<h5 class="card-title fw-semibold text-center">Les actualités récents</h5>
				</div>
				<div class="row">
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
									<a href="{{route('actu2', $actu->id)}}" class="badge bg-secondary" style="cursor: pointer;">Voir plus</a>
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

@else
<div class="card">
	<div class="card-body">
		<h5 class="card-title fw-semibold mb-4">Les offres de bénévolat récents</h5>

		<div class="row">
			@foreach($benevolats as $benevolat)
			<div class="col-md-3">
				<h5 class="card-title fw-semibold">{{$benevolat->titre}}</h5>
				<div class="card">
					<div class="card-body px-2">
						<h5 class="card-title">Contrat : {{$benevolat->contrat}}</h5>
						<h6 class="card-subtitle mb-2 text-muted">Expire le : </h6>
						<p class="card-text">
							{{$benevolat->expire}}
						</p>
						<div class="row">
							<div class="col-lg-6 col-7">
								<a href="#" class="card-link btn btn-success">Postuler</a>
							</div>
							<div class="col-lg-6 col-5">
								<a href="#" class="card-link btn btn-info">Voir</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</div>

<div class="card">
	<div class="card-body px-2">
		<h5 class="card-title fw-semibold mb-4">Les offres de stage récents</h5>
		<div class="row">
			@foreach($stages as $stage)
			<div class="col-md-3">
				<h5 class="card-title fw-semibold">{{$stage->titre}}</h5>
				<div class="card">
					<div class="card-body px-2">
						<h5 class="card-title">Contrat : {{$stage->contrat}}</h5>
						<h6 class="card-subtitle mb-2 text-muted">Expire le : </h6>
						<p class="card-text">{{$stage->expire}}</p>
						<div class="row">
							<div class="col-lg-6 col-7">
								<a href="#" class="card-link btn btn-success">Postuler</a>
							</div>
							<div class="col-lg-6 col-5">
								<a href="{{route('dstage', $stage->id)}}" class="card-link btn btn-info">Voir</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

<div class="card">
	<div class="card-body px-2">
		<h5 class="card-title fw-semibold mb-4">Les offres d'emplois récents</h5>
		<div class="row">
			@foreach($emploies as $emploie)
			<div class="col-md-3">
				<h5 class="card-title fw-semibold ">{{$emploie->titre}}</h5>
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Contrat : {{$emploie->contrat}}</h5>
						<h6 class="card-subtitle mb-2 text-muted">Expire le : </h6>
						<p class="card-text">{{$emploie->expire}}</p>
						<div class="row">
							<div class="col-lg-6 col-7">
								<a href="#" class="card-link btn btn-success">Postuler</a>
							</div>
							<div class="col-lg-6 col-5">
								<a href="{{route('demplois', $emploie->id)}}" class="card-link btn btn-info">Voir</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</div>
@endif
@endsection