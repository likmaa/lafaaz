@extends('layouts.dash')
@section('title', 'Adhésions')
@section('content')


<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0">Gestion des utilisateurs</h1>
    </div>
    <div class="col-auto">
        <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                <div class="col-auto">
                    <button type="submit" class="btn app-btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Nommé un utilisateur</button>
                </div>
            </div>
        </div>
    </div>
</div>

<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Tout</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false"> Admin</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Contributeurs</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Abonnés</a>
</nav>

<div class="tab-content" id="orders-table-tab-content">
    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
        <div class="app-card app-card-orders-table bg-white shadow-sm mb-5">
            <div class="app-card-body">

                @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif

                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Nom - Prénoms</th>
                                <th class="cell">Email</th>
                                <th class="cell">Contact</th>
                                <th class="cell">Profession</th>
                                <th class="cell">Status</th>
                                <th class="cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($utilisateurs as $user)
                            <tr>
                                <td class="cell">#15{{$user->id}}</td>
                                <td class="cell">{{$user->name}}</td>
                                <td class="cell">{{$user->email}}</td>
                                <td class="cell">{{$user->contact}}</td>
                                <td class="cell">{{$user->profession}}</td>
                                @if(($user->rule== 'ADMIN'))
                                <td class="cell"><span class="badge bg-success">{{$user->rule}}</span></td>
                                @elseif(($user->rule== 'CONTRIBUTEUR'))
                                <td class="cell"><span class="badge bg-warning">{{$user->rule}}</span></td>
                                @else<td class="cell"><span class="badge bg-info">{{$user->rule}}</span></td>
                                @endif
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('dcompte', $user->id)}}">Voir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <nav class="app-pagination">
            <ul class="pagination justify-content-center">
                {!! $utilisateurs->links() !!}
            </ul>
        </nav>

    </div>
    <!-- Les administrateurs -->
    <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
        <div class="app-card app-card-orders-table bg-white mb-5">
            <div class="app-card-body">
                <div class="table-responsive">

                    <table class="table mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Nom - Prénoms</th>
                                <th class="cell">Email</th>
                                <th class="cell">Contact</th>
                                <th class="cell">Profession</th>
                                <th class="cell">Status</th>
                                <th class="cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admins as $admin)
                            <tr>
                                <td class="cell">#15{{$admin->id}}</td>
                                <td class="cell">{{$admin->name}}</td>
                                <td class="cell">{{$admin->email}}</td>
                                <td class="cell">{{$admin->contact}}</td>
                                <td class="cell">{{$admin->profession}}</td>
                                <td class="cell"><span class="badge bg-success">{{$admin->rule}}</span></td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('dcompte', $admin->id)}}">Voir</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
        <nav class="app-pagination">
            <ul class="pagination justify-content-center">
                {!! $admins->links() !!}
            </ul>
        </nav>
    </div>
    <!-- Les contributeurs -->
    <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
        <div class="app-card app-card-orders-table bg-white mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Nom - Prénoms</th>
                                <th class="cell">Email</th>
                                <th class="cell">Contact</th>
                                <th class="cell">Profession</th>
                                <th class="cell">Status</th>
                                <th class="cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contributeurs as $contributeur)
                            <tr>
                                <td class="cell">#15{{$contributeur->id}}</td>
                                <td class="cell">{{$contributeur->name}}</td>
                                <td class="cell">{{$contributeur->email}}</td>
                                <td class="cell">{{$contributeur->contact}}</td>
                                <td class="cell">{{$contributeur->profession}}</td>
                                <td class="cell"><span class="badge bg-warning">{{$contributeur->rule}}</span></td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('dcompte', $contributeur->id)}}">Voir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <nav class="app-pagination">
            <ul class="pagination justify-content-center">
                {!! $contributeurs->links() !!}
            </ul>
        </nav>
    </div>
    
    <!-- Les Abonnés -->
    <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
        <div class="app-card app-card-orders-table bg-white mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">ID</th>
                                <th class="cell">Nom - Prénoms</th>
                                <th class="cell">Email</th>
                                <th class="cell">Contact</th>
                                <th class="cell">Profession</th>
                                <th class="cell">Status</th>
                                <th class="cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($abonnes as $abonne)
                            <tr>
                                <td class="cell">#15{{$abonne->id}}</td>
                                <td class="cell">{{$abonne->name}}</td>
                                <td class="cell">{{$abonne->email}}</td>
                                <td class="cell">{{$abonne->contact}}</td>
                                <td class="cell">{{$abonne->profession}}</td>
                                <td class="cell"><span class="badge bg-info">{{$abonne->rule}}</span></td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('dcompte', $abonne->id)}}">Voir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <nav class="app-pagination">
            <ul class="pagination justify-content-center">
                {!! $abonnes->links() !!}
            </ul>
        </nav>
    </div>

</div>



<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Définir le droit d'utilisateur</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('contributeurs')}}" method="post">
                @csrf
                <div class="modal-body px-4">
                    <div class="row my-4">
                        <div class="col-lg-12 mb-3">
                            <label for="">Choisir un utilisateur</label>
                            <select class="form-control form-select" name="iduser">
                                @foreach($utilisateurs as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="">Choisir le droit</label>
                            <select class="form-control form-select" name="rule">
                                <option value="USER">Abonné</option>
                                <option value="ADMIN">Admin</option>
                                <option value="CONTRIBUTEUR">Contibuteur</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Mettre à jour le profil</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection