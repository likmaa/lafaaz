@extends('layouts.dash')
@section('title', 'Mise à jour de projets')
@section('content')


<div class="profil" tabindex="-1" aria-hidden="true">
    <div class="">
        <div class="modal-content">
            <div class="">
                <h1 class=" fs-5">Mettre à jour un projet</h1>
            </div>
            <form action="{{route('modifier', $projet->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("put")
                <div class="">
                    <div class="row my-4">
                        <div class="col-lg-6 mb-3">
                            <label for="">Titre du projet</label>
                            <input type="text" class="form-control" name="titre" value="{{old('titre', $projet->titre)}}"  aria-label="Titre">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Date de réalisation</label>
                            <input type="date" class="form-control" name="date" value="{{old('date', $projet->date)}}" aria-label="Date de réalisation">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="">Image du projet</label>
                            <input type="file" accept="image/*" class="form-control" name="image"  value="{{old('image', $projet->image)}}" aria-label="Photo du projet">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10">
                                {{old('description', $projet->description)}}
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Enregistrer la modification</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection