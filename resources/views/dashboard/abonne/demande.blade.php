@extends('layouts.dash')
@section('title', 'Mes demandes d\'offres')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h2 class="app-page-title mb-0">Mes demandes d'offres</h2>
    </div>
    <div class="col-auto">
        <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

            </div>
        </div>
    </div>
</div>

<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Tout</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">En attente</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Accepter</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Rejeter</a>
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
                                <th class="cell">Type de l'offre</th>
                                <th class="cell">Titre</th>
                                <th class="cell">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cell">#15346</td>
                                <td class="cell">Bénevolats</td>
                                <td class="cell">Développeur Python</td>
                                <td class="cell"><span class="badge bg-primary">En attente</span></td>
                            </tr>
                            <tr>
                                <td class="cell">#15346</td>
                                <td class="cell">Bénevolats</td>
                                <td class="cell">Développeur Python</td>
                                <td class="cell"><span class="badge bg-success">Accepter</span></td>
                            </tr>
                            <tr>
                                <td class="cell">#15346</td>
                                <td class="cell">Bénevolats</td>
                                <td class="cell">Développeur Python</td>
                                <td class="cell"><span class="badge bg-danger">Rejeter</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <nav class="app-pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

    </div>

    <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
        <div class="app-card app-card-orders-table mb-5 bg-white">
            <div class="app-card-body">
                <div class="table-responsive">

                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Type de l'offre</th>
                                <th class="cell">Titre</th>
                                <th class="cell">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cell">#15346</td>
                                <td class="cell">Bénevolats</td>
                                <td class="cell">Développeur Python</td>
                                <td class="cell"><span class="badge bg-primary">En attente</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
        <div class="app-card app-card-orders-table mb-5 bg-white">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Type de l'offre</th>
                                <th class="cell">Titre</th>
                                <th class="cell">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="cell">#15346</td>
                                <td class="cell">Bénevolats</td>
                                <td class="cell">Développeur Python</td>
                                <td class="cell"><span class="badge bg-success">Accepter</span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
        <div class="app-card app-card-orders-table mb-5 bg-white">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Type de l'offre</th>
                                <th class="cell">Titre</th>
                                <th class="cell">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cell">#15346</td>
                                <td class="cell">Bénevolats</td>
                                <td class="cell">Développeur Python</td>
                                <td class="cell"><span class="badge bg-danger">Rejeter</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection