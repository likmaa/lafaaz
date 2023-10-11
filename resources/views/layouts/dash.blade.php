<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Tableau de bord')</title>
    <link rel="shortcut icon" type="image/png" href="/assets/img/logoFAAZ.png" />
    <link rel="stylesheet" href="/asset/css/styles.min.css" />
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

        <aside class="left-sidebar bg-white">
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{route('Accueil')}}" class="text-nowrap logo-img m-0">
                        <img src="/assets/img/logo.png" width="209" height="95">
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>

                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Accueil</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('home')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Tableau de bord</span>
                            </a>
                        </li>

                        @if(auth()->user()->rule == 'ADMIN')
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">ADMIN / Gestion</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('adhesion')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Adhésions</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('contributeurs')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">Utilisateurs</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('projets')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-cards"></i>
                                </span>
                                <span class="hide-menu">Projets de dons</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('recrutements')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-file-description"></i>
                                </span>
                                <span class="hide-menu">Recrutements</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('aactu')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-file-description"></i>
                                </span>
                                <span class="hide-menu">Actualités & Réalisations</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('aapropos')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-typography"></i>
                                </span>
                                <span class="hide-menu">A propos</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('logout') }}" aria-expanded="false" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span>
                                    <i class="ti ti-logout"></i>
                                </span>
                                <span class="hide-menu">Déconnexion</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @elseif(auth()->user()->rule == 'CONTRIBUTEUR')
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Promoteurs de services</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('carticle') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-news"></i>
                                </span>
                                <span class="hide-menu">Gestion des articles</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('coffres') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-chart-area-line"></i>
                                </span>
                                <span class="hide-menu">Gestions des offres</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('crealisation') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-archive"></i>
                                </span>
                                <span class="hide-menu">Réalisations</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('dons')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-gift"></i>
                                </span>
                                <span class="hide-menu">Faire un don de soutien</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('donpr')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-gift"></i>
                                </span>
                                <span class="hide-menu">Faire un don pour projet</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('logout') }}" aria-expanded="false" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span>
                                    <i class="ti ti-logout"></i>
                                </span>
                                <span class="hide-menu">Déconnexion</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Chercheurs d'offres</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('profil') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-mood-happy"></i>
                                </span>
                                <span class="hide-menu">Mon profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('documents', ['utilisateurId' => Auth::user()->id]) }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-aperture"></i>
                                </span>
                                <span class="hide-menu">Mes documents</span>
                            </a>
                        </li>

                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link" href="" aria-expanded="false">
                                <span>
                                    <i class="ti ti-aperture"></i>
                                </span>
                                <span class="hide-menu">Mes demandes</span>
                            </a>
                        </li> -->

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('logout') }}" aria-expanded="false" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                <span>
                                    <i class="ti ti-logout"></i>
                                </span>
                                <span class="hide-menu">Déconnexion</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="body-wrapper">
            <header class="app-header bg-white">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li> -->
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/asset/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="{{route('profil')}}" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">Mon Profil</p>
                                        </a>
                                        <a href="{{route('setting')}}" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-settings fs-6"></i>
                                            <p class="mb-0 fs-3">Paramètres</p>
                                        </a>
                                        <a href="{{ route('logout') }}" class="btn btn-outline-primary mx-3 mt-2 d-block" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Déconnexion</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid ">
                <!--  Row 1 -->

                @yield('content')

                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Propulser par <a href="https://expertitlab.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">ExpertItLab</a> </p>
                </div>
            </div>
        </div>
    </div>
    <script src="/asset/libs/jquery/dist/jquery.min.js"></script>
    <script src="/asset/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/js/sidebarmenu.js"></script>
    <script src="/asset/js/app.min.js"></script>
    <script src="/asset/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/asset/libs/simplebar/dist/simplebar.js"></script>
    <script src="/asset/js/dashboard.js"></script>
</body>

</html>