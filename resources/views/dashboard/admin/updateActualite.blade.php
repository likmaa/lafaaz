@extends('dashboard.admin.layouts.update')
@section('page_name')
    Mise à jour d'actualité
@endsection

@section('form')
<form action="{{route('modifierActu', $actu->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method("put")
    <div class="">
        <div class="row my-4">
            <div class="col-lg-6 mb-3">
                <label for="">Titre de l'actualité</label>
                <input type="text" class="form-control" name="titre" value="{{old('titre', $actu->titre)}}"  aria-label="Titre">
            </div>
            <div class="col-lg-6 mb-3">
                <label for="">Image de l'actualité</label>
                <input type="file" accept="image/*" class="form-control" name="image"  value="{{old('image', $actu->image)}}" aria-label="Photo de l'actualité">
            </div>
            <div class="col-lg-12 mb-3">
                <label for="">Description</label>
                <textarea name="description" id="description" cols="30" rows="10">
                    {{old('description', $actu->description)}}
                </textarea>
            </div>
        </div>
    </div>
    <div class="">
        <button type="submit" class="btn btn-primary">Enregistrer la modification</button>
    </div>
</form>
@endsection