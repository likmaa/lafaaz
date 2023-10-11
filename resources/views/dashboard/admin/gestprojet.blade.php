@extends('layouts.dash')
@section('title', 'Gest des projets de dons')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h2 class="app-page-title mb-0">Donation pour le projet de : Fourniture aux orphelins</h2>
    </div>
</div>

<div class="row">
    <div class="tab-content">
        <div class="tab-pa">

            <div class="app-card app-card-orders-table bg-white shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">ID</th>
                                    <th class="cell">Nom - Prenoms</th>
                                    <th class="cell">Email</th>
                                    <th class="cell">Contact</th>
                                    <th class="cell">Adresse</th>
                                    <th class="cell">Montant</th>
                                    <th class="cell">Message</th>
                                    <th class="cell">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cell">#1</td>
                                    <td class="cell">John Doe</td>
                                    <td class="cell">doe@gmail.com</td>
                                    <td class="cell"><span>00229 60000000</span></td>
                                    <td class="cell">cotonou</td>
                                    <td class="cell"><span>965.236</span></td>
                                    <td class="cell">Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                                    <td class="cell">
                                        <a class="btn-sm app-btn-danger" href="#">Supprimer</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cell">#2</td>
                                    <td class="cell">John Doe</td>
                                    <td class="cell">doe@gmail.com</td>
                                    <td class="cell"><span>00229 60000000</span></td>
                                    <td class="cell">cotonou</td>
                                    <td class="cell"><span>965.236</span></td>
                                    <td class="cell">Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                                    <td class="cell">
                                        <a class="btn-sm app-btn-danger" href="#">Supprimer</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection