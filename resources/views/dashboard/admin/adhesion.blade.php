@extends('layouts.dash')
@section('title', 'Adhésions')
@section('content')


<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h2 class="app-page-title mb-0">Gestion des adhésions</h2>
    </div>
    <div class="col-auto">
        <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                

            </div>
        </div>
    </div>
</div>

<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Toutes les adhésions à la fondation</a>
</nav>

<div class="tab-content " id="orders-table-tab-content">
    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5 bg-white">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Nom - Prénoms</th>
                                <th class="cell">Contact</th>
                                <th class="cell">Profession</th>
                                <th class="cell">Date</th>
                                <th class="cell">Total</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($adhesi as $adhes)
                            <tr>
                                <td class="cell">#153{{$adhes->id}}</td>
                                <td class="cell">{{$adhes->nom}}</td>
                                <td class="cell">{{$adhes->tel}}</td>
                                <td class="cell">{{$adhes->profession}}</td>
                                <td class="cell"><span>{{$adhes->created_at}}</span>
                                </td>
                                <td class="cell">10.000 FCFA</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $adhesi->links() !!}
                </div>

            </div>
        </div>

    </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Informations d'adhésions</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4">
                <div class="row py-2">
                    <div class="col-lg-6">
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Nom</strong></div>
                                <div class="item-data">James</div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Prenoms</strong></div>
                                <div class="item-data">Doe</div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Contact</strong></div>
                                <div class="item-data">111111</div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Email</strong></div>
                                <div class="item-data">james.doe@gmail.com</div>

                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Addresse</strong></div>
                                <div class="item-data">Doe</div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Code postale</strong></div>
                                <div class="item-data">Doe</div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Ville</strong></div>
                                <div class="item-data">Cotonou</div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Pays</strong></div>
                                <div class="item-data">Doe</div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Date de naissance</strong></div>
                                <div class="item-data">111111</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label"><strong>Profession</strong></div>
                                <div class="item-data">james.doe@gmail.com</div>

                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label mb-2"><strong>Photo CNI</strong></div>
                                <div class="item-data">
                                    <img src="/asset/images/profile/user-1.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label mb-2"><strong>Casier judiciaire</strong></div>
                                <div class="item-data">
                                    Cliquer
                                    <b><a href="http://" target="_blank" rel="noopener noreferrer">ici</a></b> pour voir la lettre de motivation
                                </div>
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="item-label mb-2"><strong>Lettre de motivation</strong></div>
                                <div class="item-data">
                                    Cliquer
                                    <b><a href="http://" target="_blank" rel="noopener noreferrer">ici</a></b> pour voir la lettre de motivation
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Approuver</button>
                <button type="button" class="btn btn-danger">Rejeter</button>
            </div>
        </div>
    </div>
</div>
@endsection