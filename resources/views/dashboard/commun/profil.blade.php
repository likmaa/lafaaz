@extends('layouts.dash')
@section('title', 'Profil')
@section('content')

<div class="row gy-4 profil mt-2 mb-5">
	<h2 class="app-page-title">Mon compte</h2>

	<div class="col-12 col-lg-8 offset-lg-2 my-4">
		<div class="card w-100 h-100 card-account shadow-sm d-flex flex-column align-items-start">
			<div class="card-header bg-white p-3 border-bottom-0">
				<div class="row align-items-center gx-3 bg-white">
					<div class="col-auto">
						<div class="app-icon-holder">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
							</svg>
						</div>
					</div>
					<div class="col-auto">
						<h4 class="card-title">Profil</h4>
					</div>
				</div>
			</div>
			<div class="card-body px-4 w-100">
				<div class="item border-bottom py-3">
					<div class="row justify-content-between align-items-center">
						<div class="col-auto">
							<div class="item-label mb-2"><strong>Photo</strong></div>
							<div class="item-data">
								<img src="{{ Auth::user()->image }}" alt="" width="65" height="65" class="rounded-circle">
							</div>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="item border-bottom col-lg-6 py-3">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<div class="item-label"><strong>Nom complet</strong></div>
								<div class="item-data">{{ Auth::user()->name }}</div>
							</div>

						</div>
					</div>
					<div class="item border-bottom col-lg-6 py-3">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<div class="item-label"><strong>Email</strong></div>
								<div class="item-data">{{ Auth::user()->email }}</div>
							</div>

						</div>
					</div>

					<div class="item border-bottom col-lg-6 py-3">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<div class="item-label"><strong>Contact</strong></div>
								<div class="item-data">{{ Auth::user()->contact }}</div>
							</div>

						</div>
					</div>
					<div class="item border-bottom col-lg-6 py-3">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<div class="item-label"><strong>Adresse</strong></div>
								<div class="item-data">{{ Auth::user()->adresse }}</div>
							</div>

						</div>
					</div>

					<div class="item border-bottom col-lg-6 py-3">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<div class="item-label"><strong>Date et lieu de naissance</strong></div>
								<div class="item-data">{{ Auth::user()->birth }} à {{ Auth::user()->lieu }}</div>
							</div>

						</div>
					</div>
					<div class="item border-bottom col-lg-6 py-3">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<div class="item-label"><strong>Profession</strong></div>
								<div class="item-data">{{ Auth::user()->profession }}</div>
							</div>

						</div>
					</div>

					<div class="item border-bottom col-lg-6 py-3">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<div class="item-label"><strong>Ville</strong></div>
								<div class="item-data">{{ Auth::user()->ville }}</div>
							</div>

						</div>
					</div>
					<div class="item border-bottom col-lg-6 py-3">
						<div class="row justify-content-between align-items-center">
							<div class="col-auto">
								<div class="item-label"><strong>Pays</strong></div>
								<div class="item-data">{{ Auth::user()->pays }}</div>
							</div>

						</div>
					</div>
				</div>

				<div class="item border-bottom py-3">
					<div class="row justify-content-between align-items-center">
						<div class="col-auto">
							<div class="item-label"><strong>Droit</strong></div>
							@if(auth()->user()->rule == 'ADMIN')
							<div class="item-data">
								ADMINISTRATEUR
							</div>
							@elseif(auth()->user()->rule == 'CONTRIBUTEUR')
							<div class="item-data">
								CONTRIBUTEUR
							</div>
							@else
							<div class="item-data">
								Abonné
							</div>
							@endif
						</div>
						<div class="col text-end">
							<!-- <a class="btn-sm app-btn-secondary" href="#">Changer</a> -->
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer p-4 mt-auto">
				<a class="btn app-btn-secondary" href="{{route('majprofil', Auth::user()->id)}}">Gérer le profil</a>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="editprofilModal{{ Auth::user()->id }}" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="editModal{{ Auth::user()->id }}Label">Gestion du profil</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="" method="post" enctype="multipart/form-data">
				@csrf
				<div class="modal-body">
					<div class="row my-4">
						<div class="col-lg-6 mb-3">
							<label for="">Nom complet</label>
							<input type="text" class="form-control" name="name" placeholder="Ex: John Doe" aria-label="First name">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Ex: johndoe@gmail.com" aria-label="Email">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Contact</label>
							<input type="text" class="form-control" name="contact" placeholder="Ex: 00229 60000000" aria-label="Contact">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Adresse</label>
							<input type="text" class="form-control" name="adresse" placeholder="Ex: Maison YAYIVI" aria-label="Adresse">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Ville</label>
							<input type="text" class="form-control" name="ville" placeholder="Ex: Abomey-Calavi" aria-label="Ville">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Pays</label>
							<input type="text" class="form-control" name="pays" placeholder="Ex: Bénin" aria-label="Pays">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Profession</label>
							<input type="text" class="form-control" name="profession" placeholder="Ex: Designer" aria-label="Profession">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Date de naissance</label>
							<input type="date" class="form-control" name="birth" aria-label="Date de naissance">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Lieu de naissance</label>
							<input type="text" class="form-control" name="lieu" placeholder="Ex: Sekandji" aria-label="Lieu de naissance">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="">Photo de profil</label>
							<input type="file" accept="image/*" class="form-control" name="image" aria-label="Photo de profil">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Enregistrer la modification</button>
				</div>
			</form>
		</div>
	</div>
</div>


@endsection