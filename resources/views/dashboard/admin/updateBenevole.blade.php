@extends('dashboard.admin.layouts.update')
@section('page_name')
    Mise à jour des bénévoles
@endsection

@section('form')
    <form action="{{ route('modifierBenevole', $benevole->id) }}" method="post" enctype="multipart/form-data">
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
                <div class="col-lg-12 mb-3">
                    <label for="">Titre du benevole</label>
                    <input type="text" class="form-control" name="titre" value="{{ old('titre', $benevole->titre) }}"
                        aria-label="Titre">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="">Image du benevole</label>
                    <input type="file" accept="image/*" class="form-control" name="image"
                        value="{{ old('image', $benevole->image) }}" aria-label="Photo du benevole">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="">Témoignage</label>
                    <textarea name="description" id="description" cols="30" rows="10">
                    {{ old('description', $benevole->description) }}
                </textarea>
                </div>
            </div>
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary">Enregistrer la modification</button>
        </div>
    </form>
@endsection
