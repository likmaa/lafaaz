<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Tableau de bord')</title>
    <link rel="shortcut icon" type="image/png" href="/assets/img/logoFAAZ.png" />
    <link rel="stylesheet" href="/asset/css/styles.min.css" />
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                                    @if (is_null(Auth::user()->image))
                                        <img src="/asset/images/profile/user-1.jpg" alt="" width="35"
                                            height="35" class="rounded-circle">
                                    @else
                                        <img src="{{ config('app.url') . '/storage/' . Auth::user()->image }}"
                                            alt="" width="35" height="35" class="rounded-circle">
                                    @endif
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

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        CKEDITOR.replace('description');
        CKEDITOR.replace('descriptionTemoignage');
        CKEDITOR.replace('descriptionFaq');

        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        var pays = {
            "IM": "Île de Man",
            "HR": "Croatie",
            "GW": "Guinée-Bissau",
            "IN": "Inde",
            "KE": "Kenya",
            "LA": "Laos",
            "IO": "Territoire britannique de l'océan Indien",
            "HT": "Haïti",
            "LB": "Liban",
            "GY": "Guyana",
            "KG": "Kirghizistan",
            "HU": "Hongrie",
            "LC": "Sainte-Lucie",
            "IQ": "Irak",
            "KH": "Cambodge",
            "JM": "Jamaïque",
            "IR": "Iran",
            "KI": "Kiribati",
            "IS": "Islande",
            "MA": "Maroc",
            "JO": "Jordanie",
            "IT": "Italie",
            "JP": "Japon",
            "MC": "Monaco",
            "KM": "Comores",
            "MD": "Moldavie",
            "LI": "Liechtenstein",
            "KN": "Saint-Christophe-et-Niévès",
            "ME": "Monténégro",
            "NA": "Namibie",
            "MF": "Saint-Martin",
            "LK": "Sri Lanka",
            "KP": "Corée du Nord",
            "MG": "Madagascar",
            "NC": "Nouvelle-Calédonie",
            "MH": "Îles Marshall",
            "KR": "Corée du Sud",
            "NE": "Niger",
            "NF": "Île Norfolk",
            "MK": "Macédoine",
            "NG": "Nigéria",
            "ML": "Mali",
            "MM": "Myanmar (Birmanie)",
            "LR": "Libéria",
            "NI": "Nicaragua",
            "KW": "Koweït",
            "MN": "Mongolie",
            "LS": "Lesotho",
            "PA": "Panamá",
            "MO": "Macau",
            "LT": "Lituanie",
            "KY": "Îles Caïmans",
            "MP": "Îles Mariannes du Nord",
            "LU": "Luxembourg",
            "NL": "Pays-Bas",
            "KZ": "Kazakhstan",
            "MQ": "Martinique",
            "LV": "Lettonie",
            "MR": "Mauritanie",
            "PE": "Pérou",
            "MS": "Montserrat",
            "QA": "Qatar",
            "NO": "Norvège",
            "PF": "Tahïti (Polynésie française)",
            "MT": "Malte",
            "LY": "Libye",
            "NP": "Népal",
            "PG": "Papouasie-Nouvelle-Guinée",
            "MU": "Maurice",
            "PH": "Philippines",
            "MV": "Maldives",
            "OM": "Oman",
            "NR": "Nauru",
            "MW": "Malawi",
            "MX": "Mexico",
            "PK": "Pakistan",
            "MY": "Malaisie",
            "NU": "Niue",
            "PL": "Pologne",
            "MZ": "Mozambique",
            "PM": "Saint-Pierre-et-Miquelon",
            "PN": "Îles Pitcairn",
            "RE": "La Réunion",
            "SA": "Arabie saoudite",
            "SB": "Îles Salomon",
            "NZ": "Nouvelle-Zélande",
            "SC": "Seychelles",
            "SD": "Soudan",
            "PR": "Porto Rico",
            "SE": "Suède",
            "PS": "Territoires palestiniens occupés",
            "PT": "Portugal",
            "SG": "Singapour",
            "TC": "Îles Turques-et-Caïques",
            "SH": "Sainte-Hélène",
            "TD": "Tchad",
            "SI": "Slovénie",
            "PW": "Palaos",
            "SJ": "Svalbard et Jan Mayen",
            "UA": "Ukraine",
            "RO": "Roumanie",
            "TF": "Terres australes et antarctiques françaises",
            "SK": "Slovaquie",
            "PY": "Paraguay",
            "TG": "Togo",
            "SL": "Sierra Leone",
            "TH": "Thaïlande",
            "SM": "Saint-Marin",
            "SN": "Sénégal",
            "RS": "Serbie (Yougoslavie)",
            "TJ": "Tadjikistan",
            "VA": "Cité du Vatican",
            "SO": "Somalie",
            "TK": "Tokelau",
            "UG": "Ouganda",
            "RU": "Russie",
            "TL": "Timor oriental",
            "VC": "Saint-Vincent-et-les-Grenadines",
            "TM": "Turkménistan",
            "SR": "Suriname",
            "RW": "Rwanda",
            "TN": "Tunisie",
            "VE": "Venezuela",
            "TO": "Tonga",
            "ST": "Sao Tomé-et-Principe",
            "VG": "Îles Vierges britanniques",
            "SV": "Salvador",
            "UM": "Îles mineures éloignées des États-Unis",
            "TR": "Turquie",
            "VI": "Îles Vierges(US)",
            "WF": "Wallis-et-Futuna",
            "TT": "Trinité-et-Tobago",
            "SY": "Syrie",
            "SZ": "Swaziland",
            "TV": "Tuvalu",
            "TW": "Taïwan",
            "VN": "Viêt Nam",
            "US": "États-Unis(USA)",
            "TZ": "Tanzanie",
            "YE": "Yémen",
            "ZA": "Afrique du Sud",
            "XK": "République du Kosovo",
            "UY": "Uruguay",
            "VU": "Vanuatu",
            "UZ": "Ouzbékistan",
            "WS": "Samoa",
            "ZM": "Zambie",
            "AC": "Île de l'Ascension",
            "AD": "Andorre",
            "YT": "Mayotte",
            "AE": "Émirats arabes unis",
            "YU": "Serbia and Montenegro",
            "BA": "Serbie-et-Monténégro",
            "AF": "Afghanistan",
            "BB": "Barbade",
            "AG": "Antigua-et-Barbuda",
            "BD": "Bangladesh",
            "AI": "Anguilla",
            "BE": "Belgique",
            "CA": "Canada",
            "BF": "Burkina Faso",
            "BG": "Bulgarie",
            "ZW": "Zimbabwe",
            "AL": "Albanie",
            "CC": "Îles Cocos",
            "BH": "Bahreïn",
            "AM": "Arménie",
            "CD": "République démocratique du Congo",
            "BI": "Burundi",
            "AN": "Antilles néerlandaises",
            "BJ": "Bénin",
            "AO": "Angola",
            "CF": "République centrafricaine",
            "CG": "République du Congo",
            "AQ": "Antarctique",
            "CH": "Suisse",
            "BM": "Bermudes",
            "AR": "Argentine",
            "CI": "Côte d'Ivoire",
            "BN": "Brunei Darussalam",
            "DE": "Allemagne",
            "AS": "Samoa américaines",
            "BO": "Bolivie",
            "AT": "Autriche",
            "CK": "Îles Cook",
            "AU": "Australie",
            "CL": "Chili",
            "EC": "Équateur",
            "CM": "Cameroun",
            "BR": "Brésil",
            "AW": "Aruba",
            "CN": "Chine",
            "EE": "Estonie",
            "BS": "Bahamas",
            "DJ": "Djibouti",
            "AX": "Åland",
            "CO": "Colombie",
            "BT": "Bhoutan",
            "DK": "Danemark",
            "EG": "Égypte",
            "AZ": "Azerbaïdjan",
            "EH": "Sahara occidental",
            "BV": "Île Bouvet",
            "DM": "Dominique",
            "CR": "Costa Rica",
            "BW": "Botswana",
            "GA": "Gabon",
            "DO": "République dominicaine",
            "BY": "Biélorussie",
            "GB": "Royaume-Uni",
            "CU": "Cuba",
            "BZ": "Bélize",
            "CV": "Cap-Vert",
            "GD": "Grenade",
            "FI": "Finlande",
            "GE": "Géorgie",
            "FJ": "Fidji",
            "CX": "Île Christmas",
            "GF": "Guyane",
            "FK": "Îles Malouines",
            "CY": "Chypre",
            "GG": "Guernesey",
            "CZ": "République tchèque",
            "GH": "Ghana",
            "FM": "Micronésie",
            "ER": "Érythrée",
            "GI": "Gibraltar",
            "ES": "Espagne",
            "FO": "Îles Féroé",
            "ET": "Éthiopie",
            "GL": "Groenland",
            "DZ": "Algérie",
            "GM": "Gambie",
            "ID": "Indonésie",
            "FR": "France",
            "GN": "Guinée",
            "IE": "Irlande",
            "HK": "Hong Kong",
            "GP": "Guadeloupe",
            "GQ": "Guinée équatoriale",
            "HM": "Îles Heard-et-MacDonald",
            "GR": "Grèce",
            "HN": "Honduras",
            "JE": "Jersey",
            "GS": "Géorgie du Sud-et-les Îles Sandwich du Sud",
            "FX": "France métropolitaine",
            "GT": "Guatemala",
            "GU": "Guam",
            "IL": "Israël"
        };

        var paysSelector = document.querySelector("#pays");
        let element = '';

        for (const key in pays) {
           
            if(pays[key] == '<?= Auth::user()->pays ?>') {
                element +='<option value="' + pays[key] + '" selected>' + pays[key] + '</option>';
            }
            else {
                element +='<option value="' + pays[key] + '">' + pays[key] + '</option>';
            }

        }

        paysSelector.innerHTML = element;
    </script>
</body>

</html>
