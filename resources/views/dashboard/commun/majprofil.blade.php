@extends('layouts.dash')
@section('title', 'Mise à jour du profil')
@section('content')


<div class="profil" tabindex="-1" aria-hidden="true">
    <div class="">
        <div class="modal-content">
            <div class="">
                <h1 class=" fs-5">Mettre à jour mon profil</h1>
                @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
            </div>
            <form action="{{route('majprofil', Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <div class="row my-4">
                        <div class="col-lg-6 mb-3">
                            <label for="">Nom complet</label>
                            <input type="text" class="form-control" name="name" value="{{old('name', Auth::user()->name)}}"  aria-label="First name">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{old('email', Auth::user()->email)}}"  aria-label="Email">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Contact</label>
                            <input type="text" class="form-control" name="contact" value="{{old('contact', Auth::user()->contact)}}"  aria-label="Contact">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Adresse</label>
                            <input type="text" class="form-control" name="adresse" value="{{old('adresse', Auth::user()->adresse)}}"  aria-label="Adresse">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Ville</label>
                            <input type="text" class="form-control" name="ville" value="{{old('ville', Auth::user()->ville)}}"  aria-label="Ville">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Pays</label>
                            <select name="pays" class="form-control js-example-basic-single" id="pays" aria-label="Pays">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                            {{-- <input type="text" class="form-control" name="pays" value="{{old('pays', Auth::user()->pays)}}"  aria-label="Pays"> --}}
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Profession</label>
                            <input type="text" class="form-control" name="profession" value="{{old('profession', Auth::user()->profession)}}"  aria-label="Profession">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Date de naissance</label>
                            <input type="date" class="form-control" name="birth" value="{{old('birth', Auth::user()->birth)}}" aria-label="Date de naissance">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Lieu de naissance</label>
                            <input type="text" class="form-control" name="lieu" value="{{old('lieu', Auth::user()->lieu)}}"  aria-label="Lieu de naissance">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="">Photo de profil</label>
                            <input type="file" accept="image/*" class="form-control" name="image"  value="{{old('image', Auth::user()->image)}}" aria-label="Photo de profil">
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