<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="/assets/img/logoFAAZ.png" />

    <title>FAAZ Authentification</title>
    <link rel="stylesheet" href="/asset/css/styles.min.css" />
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{route('Accueil')}}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="../assets/img/logo.png" width="280" alt="">
                                </a>
                                
                                @yield('content')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/asset/libs/jquery/dist/jquery.min.js"></script>
    <script src="/asset/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>