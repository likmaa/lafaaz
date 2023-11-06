@extends('layouts.dash')
@section('title', 'Voir le profil')
@section('content')

<div class=""  tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Informations de l'utilisateur #114{{$dcompte->id}}</h1>
                
            </div>
            <div class="modal-body px-4">
                <div class="row py-2">
                    <div class="col-lg-6">
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label mb-2"><strong>Photo</strong></div>
                                <div class="item-data">
                                    @if (is_null($dcompte->image) || $dcompte->image == '')
                                        <img src="/asset/images/profile/user-1.jpg" alt="" width="65"
                                            height="65" class="rounded-circle">
                                    @else
                                        <img src="{{ config('app.url') . '/storage/' . $dcompte->image }}"
                                            alt="" width="65" height="65" class="rounded-circle">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Nom et Prénoms</strong></div>
                                <div class="item-data">{{$dcompte->name}}</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Contact</strong></div>
                                <div class="item-data">{{$dcompte->contact}}</div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Droit</strong></div>
                                <div class="item-data">{{$dcompte->rule}}</div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Email</strong></div>
                                <div class="item-data">{{$dcompte->email}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{route('Destroycompte', $dcompte->id)}}" class="btn btn-danger">Suprimer le compte</a>
            </div>
        </div>
    </div>
</div>

@endsection