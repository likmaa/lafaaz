@extends('layouts.dash')
@section('title', 'Profil')
@section('content')

<h2 class="app-page-title">Parametres</h2>
<hr class="mb-5">

<div class="row g-4 settings-section">
	<div class="col-12 col-md-4">
		<h3 class="section-title">Sécurité</h3>
	</div>
	<div class="col-12 col-md-8 my-4">
		<div class="card w-100 h-100 app-card-settings shadow-sm p-4">
			<div class="card-body">

				<div class="item border-bottom py-3">
					<div class="row justify-content-between align-items-center">
						<div class="col-auto">
							<div class="item-label"><strong>Mot de passe</strong></div>
							<div class="item-data">••••••••</div>
						</div>
						<div class="col text-end">
							<a class="btn-sm app-btn-secondary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">Changer</a>
						</div>
					</div>
				</div>
				<div class="item border-bottom py-3">
					<div class="row justify-content-between align-items-center">
						<div class="col-auto">
							<div class="item-label"><strong>Authentification à deux facteurs</strong></div>
							<div class="item-data">Vous n'avez pas configuré l'authentification à deux facteurs. </div>
						</div>
						<div class="col text-end">
							<a class="btn-sm app-btn-secondary" href="#">Installer</a>
						</div>
					</div>
				</div>
			</div>

			<div class="card-footer p-4 mt-auto">
				<a class="btn app-btn-secondary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">Gérer la sécurité</a>
			</div>
		</div>
	</div>
</div>
<hr class="my-5">
<div class="row g-4 settings-section">
	<div class="col-12 col-md-4">
		<h3 class="section-title">Contact FAAZ</h3>
	</div>
	<div class="col-12 col-md-8">
		<div class="card w-100 h-100 app-card-settings shadow-sm p-4">
			<div class="card-body">
				<p>
					<i class="bi bi-geo-alt-fill"></i> <strong>
						LOT 410 A, PARCELLE 0 , BOITE POSTALE 04 BP
						597 COTONOU, République du Bénin
					</strong>
				</p>
				<p>
					10h à 17h : Du Lundi au Samedi

				</p>
				<p>
					<i class="bi bi-telephone-fill"></i> <strong>+229 97 60 38 05</strong>
				</p>
				<p>
					<i class="bi bi-envelope-fill"></i> <strong>info@lafaaz.org</strong>
				</p>



			</div>
		</div>
	</div>
</div>
<hr class="my-5">
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Gestion de la sécurité</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<div class="row my-4">
					<div class="col-lg-12">
						<label for="">Mot de passe</label>
						<input type="text" class="form-control" placeholder="Ex: mot de passe" aria-label="First name">
					</div>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Enregistrer la modification</button>
			</div>
		</div>
	</div>
</div>
@endsection