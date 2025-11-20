@extends('dashboard.admin.layouts.update')
@section('page_name')
    Mise à jour d'une offre
@endsection

@section('form')
    <form action="{{ route('modifierOffre', $offre->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            <li class="list-item">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row my-4">
                <div class="col-lg-6 mb-3">
                    <label for="">Titre du recrutement</label>
                    <input type="text" name="titre" value="{{ old('titre', $offre->titre) }}" class="form-control"
                        placeholder="Titre du recutement">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="">Type de l'offre</label>
                    <select id="inputState" name="typeoff" class="form-select">
                        <option value="0">Choose...</option>
                        <option value="Stage">Stage</option>
                        <option value="Emploi">Emploi</option>
                        <option value="Benevolat">Bénévolat</option>
                    </select>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-6 mb-3">
                    <label for="">Référence</label>
                    <input type="text" name="reference" value="{{ old('reference', $offre->reference) }}"
                        class="form-control" placeholder="Référence">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="">Niveau d'études</label>
                    <select name="niveaue" id="inputState" class="form-select">
                        <option value="0">Choose...</option>
                        <option value="CEP">CEP</option>
                        <option value="BEPC">BEPC</option>
                        <option value="BAC">BAC</option>
                        <option value="BAC+1">BAC+1</option>
                        <option value="BAC+2">BAC+2</option>
                        <option value="BAC+3">BAC+3</option>
                        <option value="BAC+4">BAC+4</option>
                        <option value="BAC+5">BAC+5</option>
                        <option value="BAC+6">BAC+6</option>
                        <option value="BAC+7">BAC+7</option>
                    </select>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-6 mb-3">
                    <label for="">Expérience</label>
                    <input type="number" name="experience" value="{{ old('experience', $offre->experience) }}"
                        class="form-control" placeholder="Expérience">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="">Type de contrat</label>
                    <select name="contrat" id="inputState" class="form-select">
                        <option value="0">Choose...</option>
                        <option value="CDD">CDD</option>
                        <option value="CDI">CDI</option>
                        <option value="Benevolat">Bénevole</option>
                    </select>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-6 mb-3">
                    <label for="">Image d'apercu</label>
                    <input accept="image/*" value="{{ old('image', $offre->image) }}" type="file" name="image"
                        class="form-control" placeholder="Expérience">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="">Expire le</label>
                    <input name="expire" value="{{ old('expire', $offre->expire) }}" type="date" class="form-control"
                        placeholder="Expérience">
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-12 mb-3">
                    <label for="">Description du l'offre</label>
                    <textarea name="description" id="description" cols="30" placeholder="Descriptio de l'offre" class="form-control"
                        rows="5">
                    {{ old('description', $offre->description) }}
                </textarea>
                </div>
            </div>
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary">Enregistrer la modification</button>
        </div>
    </form>
@endsection
