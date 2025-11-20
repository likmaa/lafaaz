@extends('layouts.dash')
@section('title', 'Mise à jour')
@section('content')


<div class="profil" tabindex="-1" aria-hidden="true">
    <div class="">
        <div class="modal-content">
            <div class="">
                <h1 class="fs-5">
                    @yield('page_name')
                </h1>
            </div>
            
            @yield('form')
        </div>
    </div>
</div>

@endsection