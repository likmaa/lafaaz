@extends('dashboard.admin.layouts.update')
@section('page_name')
    Mise à jour d'une réalisation
@endsection

@section('form')
<form action="{{route('modifierRealisation', $realisation->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method("put")
    <div class="">
        <div class="row my-4">
            <div class="col-lg-12 mb-3">
                <label for="">Titre de la réalisation</label>
                <input type="text" class="form-control" name="titre" value="{{old('titre', $realisation->titre)}}"  aria-label="Titre">
            </div>
            <div class="row my-4">
                <div class="col-lg-6 mb-3">
                    <label for="">Image</label>
                    <input accept="image/*" type="file" name="image" class="form-control" placeholder="Image" aria-label="" value="{{old('image', $realisation->image)}}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="">Document de rapport</label>
                    <input accept="application/pdf/*" type="file" name="fichier" class="form-control" placeholder="Document" aria-label="" value="{{old('fichier', $realisation->image)}}">
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <button type="submit" class="btn btn-primary">Enregistrer la modification</button>
    </div>
</form>
@endsection