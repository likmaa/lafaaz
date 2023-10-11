@extends('layouts.dash')
@section('title', 'Gestion de mes dons')
@section('content')

<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h2 class="app-page-title mb-0">Mes dons à la fondation</h2>
    </div>
    <div class="col-auto">
        <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

                <div class="col-auto">
                    <div class="dropdown">
                        <button class="btn app-btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Faire un don
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('dons')}}" >Soutient</a></li>
                            <li><a class="dropdown-item" href="{{route('donpr')}}" >Projet</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Type de don</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Nom</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Date</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Montant</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">1</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">Par projet</h6>
                                    <span class="fw-normal">Web Designer</span>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">John doe</p>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class=" fw-semibold">08/08/2023</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">20.000 CFA</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">2</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">Par projet</h6>
                                    <span class="fw-normal">Web Designer</span>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">John doe</p>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class=" fw-semibold">08/08/2023</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">20.000 CFA</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">3</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">Par projet</h6>
                                    <span class="fw-normal">Web Designer</span>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">John doe</p>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class=" fw-semibold">08/08/2023</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">20.000 CFA</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">4</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">Par projet</h6>
                                    <span class="fw-normal">Web Designer</span>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">John doe</p>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class=" fw-semibold">08/08/2023</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">20.000 CFA</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection