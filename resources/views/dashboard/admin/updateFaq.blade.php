@extends('dashboard.admin.layouts.update')
@section('page_name')
    Mise à jour des FAQ
@endsection

@section('form')
    <form action="{{ route('modifierFaq', $faq->id) }}" method="post" enctype="multipart/form-data">
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
                    <label for="">Titre du faq</label>
                    <input type="text" class="form-control" name="titre" value="{{ old('titre', $faq->titre) }}"
                        aria-label="Titre">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10">
                    {{ old('description', $faq->description) }}
                </textarea>
                </div>
            </div>
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary">Enregistrer la modification</button>
        </div>
    </form>
@endsection
