<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> @yield('title', 'header')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link rel="shortcut icon" type="image/png" href="/assets/img/logoFAAZ.png" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <style>
        /* Styles pour le menu */

        .nav-info {
            display: block;
            width: 100%;
            z-index: 15;
            background: white;
        }

        .nav-info .my-5 {
            display: none;
        }

        .custom-border {
            border-bottom: 0.2px solid #008d367c;
        }

        .gallery {
            /* background: #EEE; */
            margin: 0 10%;
        }

        .gallery-cell {
            width: 70%;
            height: 75vh;
            margin: 0 4vw;
            border-radius: 20px;
            overflow: hidden;
        }

        .gallery-cell img {
            width: 100%;
            height: 60%;
            border-radius: 20px;
            background: #008d367c;
        }

        .gallery-cell .content {
            height: 40%;
        }

        .gallery-cell .content button {
            border-radius: 0px 10px 10px 10px;
            background: linear-gradient(40deg, #01B044 0%, #0E7ABE 100%);
        }

        .gallery .flickity-prev-next-button {
            background: white;
        }

        .gallery .flickity-prev-next-button:hover {
            background: linear-gradient(40deg, #01B044 0%, #0E7ABE 100%);
        }

        .projets {
            background: whitesmoke;
            height: 120vh;
        }

        .nav-button {
            border: 2px solid #fff;
            transition: all ease-in-out 0.5s;
        }

        .nav-button:hover {
            background: whitesmoke;
            color: black !important;
        }

        @media screen and (max-width: 768px) {
            .gallery {
                margin: 0 10%;
            }

            .gallery-cell {
                width: 98%;
                height: 80vh;
                margin: 0 1vw;
            }

            .gallery-cell img {
                width: 100%;
                height: 50%;
                border-radius: 20px;
            }

            .gallery-cell .content {
                height: 60%;
            }

            .projets {
                height: 150vh;
            }
        }

    </style>

</head>

<body>
    <section id="topbar" class="d-flex align-items-center">
        <div class="container deskt d-flex  ">
            <div class="col-lg-2 align-items-center justify-content-center col-12 ">
                <h1 class=""><a href="{{ route('Accueil') }}">
                        <img src="../assets/img/logo.png" width="239" height="105">
                    </a>
                </h1>
            </div>
            <div class="contact-info col-lg-5 offset-lg-5 col-12 d-flex align-items-center justify-content-center">
                <i class="bi bi-telephone d-flex align-items-center px-5 text-500">
                    <a href="tel:+22997603805" class="a1"> +229 97 60 38 05</a>
                    <svg data-bs-toggle="modal" data-bs-target="#exampleModal" class="a2" type="button"
                        xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 24 20"
                        fill="none">
                        <path
                            d="M10 2C10 0.89543 10.8954 0 12 0H22C23.1046 0 24 0.895432 24 2C24 3.10457 23.1046 4 22 4L12 4C10.8954 4 10 3.10457 10 2Z"
                            fill="#0E7ABE" />
                        <path
                            d="M0 10C0 8.89543 0.895431 8 2 8L22 8C23.1046 8 24 8.89543 24 10C24 11.1046 23.1046 12 22 12L2 12C0.89543 12 0 11.1046 0 10Z"
                            fill="#0E7ABE" />
                        <path
                            d="M2 16C0.895431 16 0 16.8954 0 18C0 19.1046 0.895431 20 2 20H12C13.1046 20 14 19.1046 14 18C14 16.8954 13.1046 16 12 16H2Z"
                            fill="#0E7ABE" />
                    </svg>
                </i>

                <button class="button2 dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Faire un don
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{ route('donpr') }}">Pour projet</a></li>
                    <li><a class="dropdown-item" href="{{ route('dons') }}">Pour soutient</a></li>
                </ul>
            </div>
        </div>

        <div class="container mobil align-items-center">
            <div class="contact-info col-lg-12 d-flex justify-content-between px-2">
                <i class="bi bi-telephone d-flex align-items-center text-500">
                    <a href="tel:+22997603805" class="a1"> +229 97 60 38 05</a>
                    <svg data-bs-toggle="modal" data-bs-target="#exampleModal" class="a2" type="button"
                        xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 24 20"
                        fill="none">
                        <path
                            d="M10 2C10 0.89543 10.8954 0 12 0H22C23.1046 0 24 0.895432 24 2C24 3.10457 23.1046 4 22 4L12 4C10.8954 4 10 3.10457 10 2Z"
                            fill="#0E7ABE" />
                        <path
                            d="M0 10C0 8.89543 0.895431 8 2 8L22 8C23.1046 8 24 8.89543 24 10C24 11.1046 23.1046 12 22 12L2 12C0.89543 12 0 11.1046 0 10Z"
                            fill="#0E7ABE" />
                        <path
                            d="M2 16C0.895431 16 0 16.8954 0 18C0 19.1046 0.895431 20 2 20H12C13.1046 20 14 19.1046 14 18C14 16.8954 13.1046 16 12 16H2Z"
                            fill="#0E7ABE" />
                    </svg>
                </i>
                <div class="d-flex">
                    <button class="button2 dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Faire un don</button>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('donpr') }}">Pour projet</a></li>
                        <li><a class="dropdown-item" href="{{ route('dons') }}">Pour soutient</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade contact" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content  p-3">

                <div class="modal-body">
                    <div class="container-fluid">

                        <div class="justify-content-between d-flex head">
                            <h5 class="modal-title" id="exampleModalLabel">Contactez-nous</h5>
                            <svg data-bs-dismiss="modal" aria-label="Close" style="cursor: pointer;"
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M2.84518 0.488155C2.1943 -0.162718 1.13903 -0.162718 0.488155 0.488155C-0.162718 1.13903 -0.162718 2.1943 0.488155 2.84518L7.64298 10L0.488155 17.1548C-0.162718 17.8057 -0.162718 18.861 0.488155 19.5118C1.13903 20.1627 2.1943 20.1627 2.84518 19.5118L10 12.357L17.1548 19.5118C17.8057 20.1627 18.861 20.1627 19.5118 19.5118C20.1627 18.861 20.1627 17.8057 19.5118 17.1548L12.357 10L19.5118 2.84518C20.1627 2.1943 20.1627 1.13903 19.5118 0.488155C18.861 -0.162718 17.8057 -0.162718 17.1548 0.488155L10 7.64298L2.84518 0.488155Z"
                                    fill="#0E7ABE" />
                            </svg>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 justify-content-center pt-4">
                                <ul class="social-icon d-flex p-0 m-0">
                                    <li class="social-icon__item" style="padding-right: 1rem;">
                                        <a class="social-icon__link"
                                            href="https://www.facebook.com/people/Fondation-les-Amis-de-A-%C3%A0-Z/100063459586864/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 36 36" fill="none">
                                                <path
                                                    d="M36 18.11C36 8.10812 27.9411 0 18 0C8.05887 0 0 8.10812 0 18.11C0 27.1491 6.5823 34.6414 15.1875 36V23.3449H10.6172V18.11H15.1875V14.1201C15.1875 9.58132 17.8748 7.07422 21.9864 7.07422C23.9551 7.07422 26.0156 7.42793 26.0156 7.42793V11.8847H23.7459C21.51 11.8847 20.8125 13.2808 20.8125 14.7144V18.11H25.8047L25.0066 23.3449H20.8125V36C29.4177 34.6414 36 27.1491 36 18.11Z"
                                                    fill="url(#paint0_linear_1_786)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1_786" x1="18"
                                                        y1="0" x2="18" y2="36"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#01B044" />
                                                        <stop offset="1" stop-color="#0E7ABE" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="social-icon__item px-3">
                                        <a class="social-icon__link"
                                            href="https://www.instagram.com/fondationslesamisdeaaz/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 36 36" fill="none">
                                                <path
                                                    d="M10.5453 0.125888C8.63004 0.216248 7.32214 0.52189 6.17877 0.971171C4.99544 1.43233 3.99247 2.05117 2.99454 3.0527C1.99661 4.05422 1.38208 5.05791 0.924159 6.24303C0.480994 7.38891 0.180751 8.69788 0.0961502 10.6142C0.0115493 12.5305 -0.00717089 13.1464 0.00218921 18.0345C0.0115493 22.9226 0.0331495 23.5353 0.12603 25.4556C0.217471 27.3704 0.522034 28.6779 0.971319 29.8217C1.4332 31.005 2.05133 32.0076 3.05322 33.0059C4.05511 34.0042 5.05808 34.6172 6.24609 35.0759C7.3909 35.5183 8.70024 35.82 10.6162 35.9039C12.5321 35.9878 13.1488 36.0072 18.0355 35.9979C22.9222 35.9885 23.5374 35.9669 25.4573 35.8758C27.3772 35.7847 28.6779 35.478 29.822 35.0309C31.0053 34.5679 32.0087 33.9509 33.0062 32.9486C34.0038 31.9464 34.618 30.942 35.0755 29.7561C35.5191 28.6113 35.8204 27.302 35.9036 25.3875C35.9874 23.4662 36.0072 22.8528 35.9979 17.9654C35.9885 13.078 35.9666 12.4653 35.8755 10.5458C35.7844 8.62624 35.4795 7.32267 35.0305 6.17823C34.5679 4.9949 33.9505 3.99302 32.949 2.99402C31.9475 1.99501 30.9423 1.38121 29.7568 0.924731C28.6113 0.481569 27.3027 0.179528 25.3868 0.096728C23.4708 0.0139277 22.8541 -0.00731232 17.9657 0.00204771C13.0772 0.0114077 12.4652 0.0322878 10.5453 0.125888ZM10.7555 32.6657C9.00048 32.5894 8.04755 32.2978 7.4125 32.0537C6.57154 31.7297 5.97249 31.338 5.3396 30.7112C4.70672 30.0845 4.31791 29.4833 3.98959 28.6441C3.74299 28.0091 3.44598 27.0572 3.3639 25.3022C3.27462 23.4054 3.2559 22.8358 3.24546 18.0302C3.23502 13.2245 3.25338 12.6557 3.33654 10.7582C3.41142 9.0046 3.70483 8.0506 3.94855 7.41591C4.27255 6.57387 4.6628 5.97591 5.291 5.34339C5.91921 4.71086 6.51862 4.32134 7.3585 3.99302C7.99283 3.74534 8.94468 3.45086 10.699 3.36734C12.5973 3.27734 13.1661 3.25934 17.9711 3.2489C22.776 3.23846 23.3463 3.25646 25.2453 3.33998C26.9989 3.4163 27.9532 3.70682 28.5872 3.95198C29.4285 4.27598 30.0272 4.66514 30.6597 5.29443C31.2923 5.92371 31.6821 6.52095 32.0105 7.36263C32.2585 7.99515 32.553 8.94664 32.6358 10.702C32.7262 12.6003 32.7467 13.1695 32.7553 17.974C32.764 22.7786 32.747 23.3492 32.6639 25.2461C32.5872 27.0011 32.2963 27.9543 32.0519 28.5901C31.7279 29.4307 31.3373 30.0301 30.7087 30.6623C30.0801 31.2944 29.4814 31.684 28.6412 32.0123C28.0076 32.2596 27.0547 32.5548 25.3018 32.6383C23.4035 32.7276 22.8347 32.7463 18.0279 32.7568C13.2212 32.7672 12.6538 32.7478 10.7555 32.6657ZM25.4296 8.37964C25.4303 8.80688 25.5577 9.22431 25.7957 9.57914C26.0337 9.93397 26.3715 10.2103 26.7665 10.3731C27.1615 10.5359 27.5959 10.5779 28.0148 10.4938C28.4337 10.4097 28.8182 10.2032 29.1198 9.90059C29.4213 9.59793 29.6264 9.21264 29.7089 8.79346C29.7915 8.37427 29.7479 7.94001 29.5836 7.54561C29.4194 7.15121 29.1419 6.81437 28.7862 6.57771C28.4304 6.34104 28.0126 6.21518 27.5853 6.21603C27.0126 6.21717 26.4637 6.44574 26.0595 6.85148C25.6552 7.25721 25.4287 7.80689 25.4296 8.37964ZM8.75784 18.018C8.76792 23.1228 12.9137 27.2516 18.0175 27.2419C23.1213 27.2322 27.253 23.0868 27.2433 17.9819C27.2336 12.8771 23.0867 8.7472 17.9822 8.75728C12.8777 8.76736 8.74812 12.9139 8.75784 18.018ZM12 18.0115C11.9977 16.8248 12.3473 15.664 13.0046 14.676C13.662 13.688 14.5976 12.9171 15.6931 12.4607C16.7886 12.0044 17.9947 11.8832 19.1591 12.1124C20.3235 12.3417 21.3938 12.911 22.2346 13.7485C23.0754 14.5859 23.6489 15.6539 23.8828 16.8174C24.1166 17.9808 24.0001 19.1875 23.5482 20.2848C23.0962 21.382 22.329 22.3207 21.3436 22.9819C20.3582 23.6432 19.1988 23.9974 18.0121 23.9997C17.2241 24.0014 16.4435 23.8478 15.7149 23.5477C14.9863 23.2477 14.3239 22.807 13.7656 22.2509C13.2073 21.6949 12.7641 21.0343 12.4611 20.3068C12.1582 19.5794 12.0015 18.7994 12 18.0115Z"
                                                    fill="url(#paint0_linear_1_783)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1_783" x1="18"
                                                        y1="0" x2="18" y2="36"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#01B044" />
                                                        <stop offset="1" stop-color="#0E7ABE" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="social-icon__item px-3">
                                        <a class="social-icon__link"
                                            href="https://www.instagram.com/fondationslesamisdeaaz/">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 36 36" fill="none">
                                                <path
                                                    d="M36 2.64706V33.3529C36 34.055 35.7211 34.7283 35.2247 35.2247C34.7283 35.7211 34.055 36 33.3529 36H2.64706C1.94502 36 1.27173 35.7211 0.775306 35.2247C0.278886 34.7283 0 34.055 0 33.3529V2.64706C0 1.94502 0.278886 1.27173 0.775306 0.775306C1.27173 0.278886 1.94502 0 2.64706 0H33.3529C34.055 0 34.7283 0.278886 35.2247 0.775306C35.7211 1.27173 36 1.94502 36 2.64706ZM10.5882 13.7647H5.29412V30.7059H10.5882V13.7647ZM11.0647 7.94118C11.0675 7.54072 10.9914 7.14363 10.8407 6.77259C10.69 6.40155 10.4677 6.06383 10.1866 5.77869C9.90535 5.49356 9.57074 5.26661 9.20183 5.1108C8.83292 4.95498 8.43693 4.87336 8.03647 4.87059H7.94118C7.12681 4.87059 6.34579 5.1941 5.76994 5.76994C5.1941 6.34579 4.87059 7.12681 4.87059 7.94118C4.87059 8.75555 5.1941 9.53656 5.76994 10.1124C6.34579 10.6883 7.12681 11.0118 7.94118 11.0118C8.34166 11.0216 8.74016 10.9525 9.11391 10.8083C9.48766 10.664 9.82933 10.4476 10.1194 10.1713C10.4095 9.89499 10.6423 9.56423 10.8045 9.19793C10.9667 8.83163 11.0551 8.43696 11.0647 8.03647V7.94118ZM30.7059 20.4141C30.7059 15.3212 27.4659 13.3412 24.2471 13.3412C23.1932 13.2884 22.1438 13.5129 21.2037 13.9922C20.2637 14.4715 19.4657 15.189 18.8894 16.0729H18.7412V13.7647H13.7647V30.7059H19.0588V21.6953C18.9823 20.7725 19.273 19.8567 19.8678 19.1469C20.4625 18.4372 21.3133 17.9908 22.2353 17.9047H22.4365C24.12 17.9047 25.3694 18.9635 25.3694 21.6318V30.7059H30.6635L30.7059 20.4141Z"
                                                    fill="url(#paint0_linear_1_784)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1_784" x1="18"
                                                        y1="0" x2="18" y2="36"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#01B044" />
                                                        <stop offset="1" stop-color="#0E7ABE" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="social-icon__item px-3">
                                        <a class="social-icon__link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="26"
                                                viewBox="0 0 36 26" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M34.0819 1.9408C34.6406 2.50607 35.0424 3.21006 35.2473 3.98213C36 6.8248 36 12.75 36 12.75C36 12.75 36 18.6782 35.2473 21.5179C35.043 22.2902 34.6413 22.9945 34.0826 23.5599C33.5239 24.1252 32.8278 24.5317 32.0645 24.7384C29.2611 25.5 18 25.5 18 25.5C18 25.5 6.73889 25.5 3.93547 24.7384C3.17218 24.5317 2.4761 24.1252 1.91742 23.5599C1.35866 22.9945 0.956972 22.2902 0.752728 21.5179C0 18.6782 0 12.75 0 12.75C0 12.75 0 6.8248 0.752728 3.98213C0.957551 3.21006 1.35938 2.50607 1.91807 1.9408C2.47668 1.37554 3.17247 0.968877 3.93547 0.761644C6.73889 4.64916e-06 18 0 18 0C18 0 29.2611 4.64916e-06 32.0645 0.761644C32.8276 0.968877 33.5233 1.37554 34.0819 1.9408ZM23.7551 12.75L14.3994 7.28657V18.2134L23.7551 12.75Z"
                                                    fill="url(#paint0_linear_1_785)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1_785" x1="18"
                                                        y1="0" x2="18" y2="25.5"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#01B044" />
                                                        <stop offset="1" stop-color="#0E7ABE" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="social-icon__item px-3">
                                        <a class="social-icon__link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="22"
                                                viewBox="0 0 36 30" fill="none">
                                                <path
                                                    d="M32.3144 7.28171C32.3364 7.59905 32.3364 7.9164 32.3364 8.23666C32.3364 17.9953 24.9068 29.25 11.3214 29.25V29.2442C7.30823 29.25 3.37843 28.1005 0 25.9333C0.583547 26.0035 1.17002 26.0386 1.75795 26.04C5.08373 26.0429 8.31444 24.9271 10.9309 22.8724C7.77038 22.8125 4.9989 20.752 4.03071 17.7438C5.13784 17.9573 6.27861 17.9134 7.36526 17.6165C3.91956 16.9204 1.44059 13.8933 1.44059 10.3776C1.44059 10.3455 1.44059 10.3147 1.44059 10.284C2.46728 10.8558 3.61682 11.1732 4.79269 11.2083C1.54735 9.03953 0.546984 4.7225 2.50676 1.34726C6.25667 5.96116 11.7894 8.76606 17.7287 9.06292C17.1335 6.49786 17.9466 3.80996 19.8654 2.00681C22.8402 -0.789316 27.5188 -0.646001 30.3152 2.32707C31.9693 2.00096 33.5547 1.39406 35.0055 0.534163C34.4541 2.24372 33.3002 3.69589 31.7587 4.61867C33.2227 4.4461 34.653 4.05418 36 3.45605C35.0084 4.94186 33.7594 6.23609 32.3144 7.28171Z"
                                                    fill="url(#paint0_linear_1_787)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1_787" x1="18"
                                                        y1="0" x2="18" y2="29.25"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#01B044" />
                                                        <stop offset="1" stop-color="#0E7ABE" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>

                                </ul>

                                <p class="py-4">
                                    10h à 17h : Du Lundi au Samedi
                                </p>

                                <ul class="aide-icon p-0 m-0">
                                    <li class="aide-icon__item py-1 d-flex px-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 36 36" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M22.8558 20.9313C21.0736 22.7034 19.1597 24.5972 17.9445 25.8225C14.8288 23.7743 12.165 21.1105 10.1168 17.9948L15.0078 13.0834C15.8778 12.2049 16.5227 11.1293 16.8877 9.94802C17.2526 8.76676 17.3269 7.51457 17.104 6.29846V6.21787C16.7819 4.47119 15.8579 2.89237 14.4925 1.75641C13.1272 0.620456 11.4069 -0.000915838 9.63073 0.000111256H7.60545C6.4989 -0.00588842 5.40449 0.230838 4.39944 0.69383C3.39439 1.15682 2.50317 1.83463 1.7886 2.67956C1.07404 3.52448 0.553552 4.516 0.263847 5.58398C-0.0258576 6.65195 -0.0777333 7.77052 0.111896 8.86072C1.38562 15.5572 4.64428 21.7154 9.4643 26.5355C14.2843 31.3555 20.4428 34.6143 27.1393 35.8881C28.2295 36.0777 29.348 36.026 30.416 35.7363C31.4839 35.4465 32.4754 34.9259 33.3203 34.2114C34.1652 33.4968 34.8431 32.6057 35.306 31.6006C35.769 30.5956 36.0059 29.5012 35.9999 28.3946V26.3693C35.999 24.5937 35.3768 22.8743 34.2411 21.5093C33.1055 20.1444 31.5281 19.2201 29.7823 18.8962H29.6911C28.4722 18.6517 27.212 18.709 26.0205 19.0638C24.829 19.4186 23.7425 20.0599 22.8558 20.9313ZM7.25102 12.2833C6.52743 10.2715 6.04475 8.1811 5.81307 6.05569H10.8763C10.9775 6.79491 11.1193 7.51379 11.2813 8.23276L7.25102 12.2833ZM29.8734 30.1262C27.7509 29.8911 25.6638 29.4048 23.6558 28.6779L27.7064 24.6274C28.4205 24.8032 29.144 24.9384 29.8734 25.0323V30.1262Z"
                                                fill="#01B044" />
                                        </svg>
                                        <p class="aide-icon__link1 ">
                                            <a class="aide-icon__link px-4 text-black" href="tel:+22997603805">+229 97
                                                60 38
                                                05</a>

                                        </p>
                                    </li>
                                    <li class="aide-icon__item py-2 d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="47"
                                            viewBox="0 0 36 45" fill="none">
                                            <path
                                                d="M18.0001 21.7456C20.4845 21.7456 22.4986 19.7488 22.4986 17.2855C22.4986 14.8223 20.4845 12.8255 18.0001 12.8255C15.5156 12.8255 13.5015 14.8223 13.5015 17.2855C13.5015 19.7488 15.5156 21.7456 18.0001 21.7456Z"
                                                fill="#0E7ABE" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M24.6782 40.6326C21.7062 45.531 14.3117 45.5331 11.3366 40.6365L2.17575 25.5591L2.13345 25.4812C1.53022 24.3698 1.04917 23.2 0.697679 21.9917C0.232606 20.4117 -0.00205375 18.776 1.35405e-05 17.1332L8.98685e-05 17.0727L0.00224085 17.0122C0.163427 12.48 2.10489 8.16514 5.45073 4.98364C8.80004 1.79885 13.2972 0 17.9999 0C22.7026 0 27.1997 1.79885 30.549 4.98364C33.8949 8.16514 35.8363 12.48 35.9975 17.0122L35.9993 17.0639L35.9997 17.1157C36.0101 18.7897 35.7747 20.4574 35.2999 22.0673L35.2964 22.0793L35.2927 22.0913C34.9353 23.2727 34.4537 24.4158 33.8549 25.502L33.8184 25.5683L24.6782 40.6326ZM8.12848 20.0096C8.32987 20.703 8.60239 21.3728 8.9411 22.0087L18.0062 36.9285L27.0648 21.9987C27.4007 21.3796 27.6736 20.7275 27.8789 20.0521C28.1496 19.1299 28.2867 18.1734 28.2857 17.2113C28.1773 14.5442 27.0287 12.041 25.1105 10.217C23.1833 8.38447 20.632 7.37916 17.9999 7.37916C15.3677 7.37916 12.8165 8.38447 10.8893 10.217C8.97315 12.039 7.82496 14.5387 7.7144 17.2025C7.7189 18.1488 7.85714 19.0891 8.12449 19.9959L8.12848 20.0096Z"
                                                fill="#0E7ABE" />
                                        </svg>
                                        <p class="aide-icon__link px-4 text-black">
                                            LOT 410 A, PARCELLE 0 , BOITE POSTALE 04 BP 597 <br>
                                            COTONOU, République du Bénin</p>
                                    </li>
                                    <li class="aide-icon__item py-1 d-flex ">
                                        <img src="/assets/img/mail.jpg" alt="" srcset="" width="20"
                                            height="20">
                                        <a class="aide-icon__link px-4 aide-icon__link1 text-black "
                                            href="mailto:info@lafaaz.org">info@lafaaz.org</a>
                                    </li>

                                </ul>
                            </div>

                            <div class="col-lg-4 float-end mt-5 pt-5">

                                <h5>
                                    Souscrire au newsletter
                                </h5>
                                <p>
                                    Abonnez-vous pour être le premier informé des mises à jour. Entrer votre Email
                                </p>
                                <div class="row">
                                    <form action="" method="post" class="d-flex justify-content-between">
                                        <input type="email" name="email" placeholder="Email Address"
                                            class="form-control">
                                        <input type="submit" value="Souscrire">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="header-container">
        <header id="header" class="d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">

                <h1 class="logo deskt"></h1>
                <h1 class="mobil">
                    <a href="{{ route('Accueil') }}">
                        <img src="../assets/img/logo1.png" width="150" height="50" class="img-fluid">
                    </a>
                </h1>

                <!-- navbar -->
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto" href="{{ route('Accueil') }}">Accueil</a></li>
                        <li class="dropdown">
                            <a class="nav-link" href="#"><span>Fondation</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul class="d-lg-none d-md-none">
                                <li><a href="{{ route('apropos') }}">A propos</a></li>
                                <li><a href="{{ route('projet') }}">Nos projets</a></li>
                                <li><a href="{{ route('realisation') }}">Nos réalisations</a></li>
                                <li><a href="{{ route('travail') }}">Nos offres</a></li>
                                <li><a class="nav-link scrollto" href="{{ route('membre') }}">Adhésion</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="nav-link" href="#"><span>Programmes</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul class="d-lg-none d-md-none">
                                <li><a href="{{ route('progas2') }}">Enfance indigente</a></li>
                                <li><a href="{{ route('proged') }}">Coaching de la jeunesse</a></li>
                                <li><a href="{{ route('progco') }}">Coaching pour les couples</a></li>
                                <li><a href="{{ route('progas1') }}">Assistance aux personnes du troisième âge</a>
                                </li>
                            </ul>

                        </li>

                        <li><a class="nav-link scrollto" href="{{ route('actu1') }}">Actualités</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('faq') }}">FAQ</a></li>
                        
                        @guest
                        <li><a class="nav-link scrollto" href="{{ route('login') }}">Connexion</a></li>
                            <li><a class="nav-link scrollto px-3 py-2 rounded-pill nav-button" href="{{ route('register') }}">Inscription</a></li>
                        @else
                            <li><a class="nav-link scrollto"  href="{{ route('home') }}">Tableau de bord</a></li>
                        @endguest
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- navbar -->
            </div>

        </header>

        <div class="px-5 nav-info fixed-top border-bottom">

            <div class="my-5">
                <h3 class="text-success custom-border pb-3 fw-lighter" style="font-size: large;">
                    <i class="bi bi-chevron-right fst-italic mb-4"></i>
                    Fondation
                </h3>
                <div>
                    <ul class="list-unstyled row ms-2">
                        <li class="col-lg-3 custom-border ms-4 mt-4 my-2 me-0 pb-2" style="font-size: small;"><a
                                class="text-dark" href="{{ route('apropos') }}">A propos</a></li>
                        <li class="col-lg-3 custom-border ms-4 mt-4 my-2 me-0 pb-2" style="font-size: small;"><a
                                class="text-dark" href="{{ route('projet') }}">Nos projets</a></li>
                        <li class="col-lg-3 custom-border ms-4 mt-4 my-2 me-0 pb-2" style="font-size: small;"><a
                                class="text-dark" href="{{ route('realisation') }}">Nos réalisations et activités</a>
                        </li>
                    </ul>

                    <ul class="list-unstyled row ms-2">
                        <li class="col-lg-3 custom-border ms-4 mt-4 my-2 me-0 pb-2" style="font-size: small;"><a
                                class="text-dark" href="{{ route('travail') }}">Nos offres</a></li>
                        <li class="col-lg-3 custom-border ms-4 mt-4 my-2 me-0 pb-2" style="font-size: small;"><a
                                class="text-dark" href="{{ route('membre') }}">Adhésion</a></li>
                    </ul>
                </div>
            </div>

            <div class="my-5">
                <h3 class="text-success custom-border pb-3 fw-lighter" style="font-size: large;"><i
                        class="bi bi-chevron-right fst-italic mb-4"></i> Programmes</h3>
                <div>
                    <ul class="list-unstyled row ms-2">
                        <li class="col-lg-3 custom-border ms-4 mt-4 my-2 me-0 pb-2" style="font-size: small;"><a
                                class="text-dark" href="{{ route('progas2') }}">Enfance indigente</a></li>
                        <li class="col-lg-3 custom-border ms-4 mt-4 my-2 me-0 pb-2" style="font-size: small;"><a
                                class="text-dark" href="{{ route('progas1') }}">Assistance aux personnes du troisième
                                âge</a></li>
                        <li class="col-lg-3 custom-border ms-4 mt-4 my-2 me-0 pb-2" style="font-size: small;"><a
                                class="text-dark" href="{{ route('proged') }}">Coaching de la jeunesse</a></li>
                        <li class="col-lg-3 custom-border ms-4 mt-4 my-2 me-0 pb-2" style="font-size: small;"><a class="text-dark" href="{{ route('progco') }}">Coaching pour les couples</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <main id="main" data-aos="fade-up">
        @yield('content')
    </main>

    <footer id="footer" class="footer ">
        <svg viewBox="0 0 120 28">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="1" result="blur" />
                    <feColorMatrix in="blur" mode="matrix"
                        values="
                   1 0 0 0 0  
                   0 1 0 0 0  
                   0 0 1 0 0  
                   0 0 0 13 - 9"
                        result="goo" />
                    <xfeBlend in="SourceGraphic" in2="goo" />
                </filter>
                <path id="wave"
                    d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
            </defs>

            <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2"></use>
            <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0"></use>


            <g class="gooeff" filter="url(#goo)">

                <circle class="drop drop1" cx="1.2" cy="5.4" r="8.8" />
                <circle class="drop drop2" cx="5.2" cy="5.1" r="7.5" />
                <circle class="drop drop3" cx="10.2" cy="5.3" r="9.2" />
                <circle class="drop drop4" cx="3.2" cy="5.4" r="8.8" />
                <circle class="drop drop5" cx="14.2" cy="5.1" r="7.5" />
                <circle class="drop drop6" cx="17.2" cy="4.8" r="9.2" />
                <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />
            </g>
        </svg>

        <div>
            <div class="container p-0">
                <div class="row p-0 m-0">
                    <div class="col-lg-4 p-2">
                        <div class="footer-newsletter deskt">
                            <img src="../assets/img/logo1.png" class="img-fluid" width="250" height="130">
                            <ul class="social-icon d-flex mt-4">
                                <li class="social-icon__item" style="padding-right: 1rem;">
                                    <a class="social-icon__link"
                                        href="https://www.facebook.com/people/Fondation-les-Amis-de-A-%C3%A0-Z/100063459586864/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 36 36" fill="none">
                                            <path
                                                d="M36 18.11C36 8.10812 27.9411 0 18 0C8.05887 0 0 8.10812 0 18.11C0 27.1491 6.5823 34.6414 15.1875 36V23.3449H10.6172V18.11H15.1875V14.1201C15.1875 9.58132 17.8748 7.07422 21.9864 7.07422C23.9551 7.07422 26.0156 7.42793 26.0156 7.42793V11.8847H23.7459C21.51 11.8847 20.8125 13.2808 20.8125 14.7144V18.11H25.8047L25.0066 23.3449H20.8125V36C29.4177 34.6414 36 27.1491 36 18.11Z"
                                                fill="url(#paint0_linear_1_1826)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_1_1826" x1="18"
                                                    y1="0" x2="18" y2="36"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FEFEFE" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon__item px-3">
                                    <a class="social-icon__link"
                                        href="https://www.instagram.com/fondationslesamisdeaaz/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 36 36" fill="none">
                                            <path
                                                d="M10.5453 0.125888C8.63004 0.216248 7.32214 0.52189 6.17877 0.971171C4.99544 1.43233 3.99247 2.05117 2.99454 3.0527C1.99661 4.05422 1.38208 5.05791 0.924159 6.24303C0.480994 7.38891 0.180751 8.69788 0.0961502 10.6142C0.0115493 12.5305 -0.00717089 13.1464 0.00218921 18.0345C0.0115493 22.9226 0.0331495 23.5353 0.12603 25.4556C0.217471 27.3704 0.522034 28.6779 0.971319 29.8217C1.4332 31.005 2.05133 32.0076 3.05322 33.0059C4.05511 34.0042 5.05808 34.6172 6.24609 35.0759C7.3909 35.5183 8.70024 35.82 10.6162 35.9039C12.5321 35.9878 13.1488 36.0072 18.0355 35.9979C22.9222 35.9885 23.5374 35.9669 25.4573 35.8758C27.3772 35.7847 28.6779 35.478 29.822 35.0309C31.0053 34.5679 32.0087 33.9509 33.0062 32.9486C34.0038 31.9464 34.618 30.942 35.0755 29.7561C35.5191 28.6113 35.8204 27.302 35.9036 25.3875C35.9874 23.4662 36.0072 22.8528 35.9979 17.9654C35.9885 13.078 35.9666 12.4653 35.8755 10.5458C35.7844 8.62624 35.4795 7.32267 35.0305 6.17823C34.5679 4.9949 33.9505 3.99302 32.949 2.99402C31.9475 1.99501 30.9423 1.38121 29.7568 0.924731C28.6113 0.481569 27.3027 0.179528 25.3868 0.096728C23.4708 0.0139277 22.8541 -0.00731232 17.9657 0.00204771C13.0772 0.0114077 12.4652 0.0322878 10.5453 0.125888ZM10.7555 32.6657C9.00048 32.5894 8.04755 32.2978 7.4125 32.0537C6.57154 31.7297 5.97249 31.338 5.3396 30.7112C4.70672 30.0845 4.31791 29.4833 3.98959 28.6441C3.74299 28.0091 3.44598 27.0572 3.3639 25.3022C3.27462 23.4054 3.2559 22.8358 3.24546 18.0302C3.23502 13.2245 3.25338 12.6557 3.33654 10.7582C3.41142 9.0046 3.70483 8.0506 3.94855 7.41591C4.27255 6.57387 4.6628 5.97591 5.291 5.34339C5.91921 4.71086 6.51862 4.32134 7.3585 3.99302C7.99283 3.74534 8.94468 3.45086 10.699 3.36734C12.5973 3.27734 13.1661 3.25934 17.9711 3.2489C22.776 3.23846 23.3463 3.25646 25.2453 3.33998C26.9989 3.4163 27.9532 3.70682 28.5872 3.95198C29.4285 4.27598 30.0272 4.66514 30.6597 5.29443C31.2923 5.92371 31.6821 6.52095 32.0105 7.36263C32.2585 7.99515 32.553 8.94664 32.6358 10.702C32.7262 12.6003 32.7467 13.1695 32.7553 17.974C32.764 22.7786 32.747 23.3492 32.6639 25.2461C32.5872 27.0011 32.2963 27.9543 32.0519 28.5901C31.7279 29.4307 31.3373 30.0301 30.7087 30.6623C30.0801 31.2944 29.4814 31.684 28.6412 32.0123C28.0076 32.2596 27.0547 32.5548 25.3018 32.6383C23.4035 32.7276 22.8347 32.7463 18.0279 32.7568C13.2212 32.7672 12.6538 32.7478 10.7555 32.6657ZM25.4296 8.37964C25.4303 8.80688 25.5577 9.22431 25.7957 9.57914C26.0337 9.93397 26.3715 10.2103 26.7665 10.3731C27.1615 10.5359 27.5959 10.5779 28.0148 10.4938C28.4337 10.4097 28.8182 10.2032 29.1198 9.90059C29.4213 9.59793 29.6264 9.21264 29.7089 8.79346C29.7915 8.37427 29.7479 7.94001 29.5836 7.54561C29.4194 7.15121 29.1419 6.81437 28.7862 6.57771C28.4304 6.34104 28.0126 6.21518 27.5853 6.21603C27.0126 6.21717 26.4637 6.44574 26.0595 6.85148C25.6552 7.25721 25.4287 7.80689 25.4296 8.37964ZM8.75784 18.018C8.76792 23.1228 12.9137 27.2516 18.0175 27.2419C23.1213 27.2322 27.253 23.0868 27.2433 17.9819C27.2336 12.8771 23.0867 8.7472 17.9822 8.75728C12.8777 8.76736 8.74812 12.9139 8.75784 18.018ZM12 18.0115C11.9977 16.8248 12.3473 15.664 13.0046 14.676C13.662 13.688 14.5976 12.9171 15.6931 12.4607C16.7886 12.0044 17.9947 11.8832 19.1591 12.1124C20.3235 12.3417 21.3938 12.911 22.2346 13.7485C23.0754 14.5859 23.6489 15.6539 23.8828 16.8174C24.1166 17.9808 24.0001 19.1875 23.5482 20.2848C23.0962 21.382 22.329 22.3207 21.3436 22.9819C20.3582 23.6432 19.1988 23.9974 18.0121 23.9997C17.2241 24.0014 16.4435 23.8478 15.7149 23.5477C14.9863 23.2477 14.3239 22.807 13.7656 22.2509C13.2073 21.6949 12.7641 21.0343 12.4611 20.3068C12.1582 19.5794 12.0015 18.7994 12 18.0115Z"
                                                fill="url(#paint0_linear_1_1823)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_1_1823" x1="18"
                                                    y1="0" x2="18" y2="36"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FEFEFE" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon__item px-3">
                                    <a class="social-icon__link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 36 36" fill="none">
                                            <path
                                                d="M36 2.64706V33.3529C36 34.055 35.7211 34.7283 35.2247 35.2247C34.7283 35.7211 34.055 36 33.3529 36H2.64706C1.94502 36 1.27173 35.7211 0.775306 35.2247C0.278886 34.7283 0 34.055 0 33.3529V2.64706C0 1.94502 0.278886 1.27173 0.775306 0.775306C1.27173 0.278886 1.94502 0 2.64706 0H33.3529C34.055 0 34.7283 0.278886 35.2247 0.775306C35.7211 1.27173 36 1.94502 36 2.64706ZM10.5882 13.7647H5.29412V30.7059H10.5882V13.7647ZM11.0647 7.94118C11.0675 7.54072 10.9914 7.14363 10.8407 6.77259C10.69 6.40155 10.4677 6.06383 10.1866 5.77869C9.90535 5.49356 9.57074 5.26661 9.20183 5.1108C8.83292 4.95498 8.43693 4.87336 8.03647 4.87059H7.94118C7.12681 4.87059 6.34579 5.1941 5.76994 5.76994C5.1941 6.34579 4.87059 7.12681 4.87059 7.94118C4.87059 8.75555 5.1941 9.53656 5.76994 10.1124C6.34579 10.6883 7.12681 11.0118 7.94118 11.0118C8.34166 11.0216 8.74016 10.9525 9.11391 10.8083C9.48766 10.664 9.82933 10.4476 10.1194 10.1713C10.4095 9.89499 10.6423 9.56423 10.8045 9.19793C10.9667 8.83163 11.0551 8.43696 11.0647 8.03647V7.94118ZM30.7059 20.4141C30.7059 15.3212 27.4659 13.3412 24.2471 13.3412C23.1932 13.2884 22.1438 13.5129 21.2037 13.9922C20.2637 14.4715 19.4657 15.189 18.8894 16.0729H18.7412V13.7647H13.7647V30.7059H19.0588V21.6953C18.9823 20.7725 19.273 19.8567 19.8678 19.1469C20.4625 18.4372 21.3133 17.9908 22.2353 17.9047H22.4365C24.12 17.9047 25.3694 18.9635 25.3694 21.6318V30.7059H30.6635L30.7059 20.4141Z"
                                                fill="url(#paint0_linear_1_1824)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_1_1824" x1="18"
                                                    y1="0" x2="18" y2="36"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FEFEFE" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon__item px-3">
                                    <a class="social-icon__link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 36 26" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M34.0819 1.9408C34.6406 2.50607 35.0424 3.21006 35.2473 3.98213C36 6.8248 36 12.75 36 12.75C36 12.75 36 18.6782 35.2473 21.5179C35.043 22.2902 34.6413 22.9945 34.0826 23.5599C33.5239 24.1252 32.8278 24.5317 32.0645 24.7384C29.2611 25.5 18 25.5 18 25.5C18 25.5 6.73889 25.5 3.93547 24.7384C3.17218 24.5317 2.4761 24.1252 1.91742 23.5599C1.35866 22.9945 0.956972 22.2902 0.752728 21.5179C0 18.6782 0 12.75 0 12.75C0 12.75 0 6.8248 0.752728 3.98213C0.957551 3.21006 1.35938 2.50607 1.91807 1.9408C2.47668 1.37554 3.17247 0.968877 3.93547 0.761644C6.73889 4.64916e-06 18 0 18 0C18 0 29.2611 4.64916e-06 32.0645 0.761644C32.8276 0.968877 33.5233 1.37554 34.0819 1.9408ZM23.7551 12.75L14.3994 7.28657V18.2134L23.7551 12.75Z"
                                                fill="url(#paint0_linear_1_1825)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_1_1825" x1="18"
                                                    y1="0" x2="18" y2="25.5"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FEFEFE" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon__item px-3">
                                    <a class="social-icon__link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="30"
                                            viewBox="0 0 36 30" fill="none">
                                            <path
                                                d="M32.3144 7.28171C32.3364 7.59905 32.3364 7.9164 32.3364 8.23666C32.3364 17.9953 24.9068 29.25 11.3214 29.25V29.2442C7.30823 29.25 3.37843 28.1005 0 25.9333C0.583547 26.0035 1.17002 26.0386 1.75795 26.04C5.08373 26.0429 8.31444 24.9271 10.9309 22.8724C7.77038 22.8125 4.9989 20.752 4.03071 17.7438C5.13784 17.9573 6.27861 17.9134 7.36526 17.6165C3.91956 16.9204 1.44059 13.8933 1.44059 10.3776C1.44059 10.3455 1.44059 10.3147 1.44059 10.284C2.46728 10.8558 3.61682 11.1732 4.79269 11.2083C1.54735 9.03953 0.546984 4.7225 2.50676 1.34726C6.25667 5.96116 11.7894 8.76606 17.7287 9.06292C17.1335 6.49786 17.9466 3.80996 19.8654 2.00681C22.8402 -0.789316 27.5188 -0.646001 30.3152 2.32707C31.9693 2.00096 33.5547 1.39406 35.0055 0.534163C34.4541 2.24372 33.3002 3.69589 31.7587 4.61867C33.2227 4.4461 34.653 4.05418 36 3.45605C35.0084 4.94186 33.7594 6.23609 32.3144 7.28171Z"
                                                fill="url(#paint0_linear_1_1827)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_1_1827" x1="18"
                                                    y1="0" x2="18" y2="29.25"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#FEFEFE" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-2  p-2 justify-content-center">
                        <h6 class="py-2">Menu</h6>
                        <ul class="menu">
                            <li class="menu__item py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                                    viewBox="0 0 6 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.357251 9.66205C-0.119084 9.21144 -0.119084 8.48087 0.357251 8.03026L3.56054 5L0.357252 1.96974C-0.119083 1.51913 -0.119083 0.788558 0.357252 0.337954C0.833586 -0.112651 1.60588 -0.112651 2.08221 0.337954L5.2855 3.36822C6.23817 4.26942 6.23817 5.73057 5.2855 6.63178L2.08221 9.66205C1.60588 10.1127 0.833585 10.1127 0.357251 9.66205Z"
                                        fill="#F5F5F5" />
                                </svg>
                                <a class="menu__link" href="{{ route('Accueil') }}">Fondation</a>
                            </li>
                            <li class="menu__item py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                                    viewBox="0 0 6 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.357251 9.66205C-0.119084 9.21144 -0.119084 8.48087 0.357251 8.03026L3.56054 5L0.357252 1.96974C-0.119083 1.51913 -0.119083 0.788558 0.357252 0.337954C0.833586 -0.112651 1.60588 -0.112651 2.08221 0.337954L5.2855 3.36822C6.23817 4.26942 6.23817 5.73057 5.2855 6.63178L2.08221 9.66205C1.60588 10.1127 0.833585 10.1127 0.357251 9.66205Z"
                                        fill="#F5F5F5" />
                                </svg>
                                <a class="menu__link" href="{{ route('proged') }}">Programme</a>
                            </li>
                            <li class="menu__item py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                                    viewBox="0 0 6 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.357251 9.66205C-0.119084 9.21144 -0.119084 8.48087 0.357251 8.03026L3.56054 5L0.357252 1.96974C-0.119083 1.51913 -0.119083 0.788558 0.357252 0.337954C0.833586 -0.112651 1.60588 -0.112651 2.08221 0.337954L5.2855 3.36822C6.23817 4.26942 6.23817 5.73057 5.2855 6.63178L2.08221 9.66205C1.60588 10.1127 0.833585 10.1127 0.357251 9.66205Z"
                                        fill="#F5F5F5" />
                                </svg>
                                <a class="menu__link" href="{{ route('membpa') }}">Partenaires</a>
                            </li>
                            <li class="menu__item py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                                    viewBox="0 0 6 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.357251 9.66205C-0.119084 9.21144 -0.119084 8.48087 0.357251 8.03026L3.56054 5L0.357252 1.96974C-0.119083 1.51913 -0.119083 0.788558 0.357252 0.337954C0.833586 -0.112651 1.60588 -0.112651 2.08221 0.337954L5.2855 3.36822C6.23817 4.26942 6.23817 5.73057 5.2855 6.63178L2.08221 9.66205C1.60588 10.1127 0.833585 10.1127 0.357251 9.66205Z"
                                        fill="#F5F5F5" />
                                </svg>
                                <a class="menu__link" href="{{ route('actu1') }}">Actualité</a>
                            </li>
                            <li class="menu__item py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                                    viewBox="0 0 6 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.357251 9.66205C-0.119084 9.21144 -0.119084 8.48087 0.357251 8.03026L3.56054 5L0.357252 1.96974C-0.119083 1.51913 -0.119083 0.788558 0.357252 0.337954C0.833586 -0.112651 1.60588 -0.112651 2.08221 0.337954L5.2855 3.36822C6.23817 4.26942 6.23817 5.73057 5.2855 6.63178L2.08221 9.66205C1.60588 10.1127 0.833585 10.1127 0.357251 9.66205Z"
                                        fill="#F5F5F5" />
                                </svg>
                                <a class="menu__link" href="{{ route('faq') }}">FAQ</a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-2 p-2 justify-content-center">
                        <h6 class="py-2">Important</h6>
                        <ul class="menu">
                            <li class="menu__item py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                                    viewBox="0 0 6 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.357251 9.66205C-0.119084 9.21144 -0.119084 8.48087 0.357251 8.03026L3.56054 5L0.357252 1.96974C-0.119083 1.51913 -0.119083 0.788558 0.357252 0.337954C0.833586 -0.112651 1.60588 -0.112651 2.08221 0.337954L5.2855 3.36822C6.23817 4.26942 6.23817 5.73057 5.2855 6.63178L2.08221 9.66205C1.60588 10.1127 0.833585 10.1127 0.357251 9.66205Z"
                                        fill="#F5F5F5" />
                                </svg>
                                <a class="menu__link" href="{{ route('benevol') }}">Devenir bénévole</a>
                            </li>
                            <li class="menu__item py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                                    viewBox="0 0 6 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.357251 9.66205C-0.119084 9.21144 -0.119084 8.48087 0.357251 8.03026L3.56054 5L0.357252 1.96974C-0.119083 1.51913 -0.119083 0.788558 0.357252 0.337954C0.833586 -0.112651 1.60588 -0.112651 2.08221 0.337954L5.2855 3.36822C6.23817 4.26942 6.23817 5.73057 5.2855 6.63178L2.08221 9.66205C1.60588 10.1127 0.833585 10.1127 0.357251 9.66205Z"
                                        fill="#F5F5F5" />
                                </svg>
                                <a class="menu__link" href="{{ route('dons') }}">Faire un don</a>
                            </li>
                            <li class="menu__item py-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                                    viewBox="0 0 6 10" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.357251 9.66205C-0.119084 9.21144 -0.119084 8.48087 0.357251 8.03026L3.56054 5L0.357252 1.96974C-0.119083 1.51913 -0.119083 0.788558 0.357252 0.337954C0.833586 -0.112651 1.60588 -0.112651 2.08221 0.337954L5.2855 3.36822C6.23817 4.26942 6.23817 5.73057 5.2855 6.63178L2.08221 9.66205C1.60588 10.1127 0.833585 10.1127 0.357251 9.66205Z"
                                        fill="#F5F5F5" />
                                </svg>
                                <a class="menu__link" href="{{ route('membre') }}">Nous rejoindre</a>
                            </li>
                            @guest
                                <li class="menu__item py-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                                        viewBox="0 0 6 10" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.357251 9.66205C-0.119084 9.21144 -0.119084 8.48087 0.357251 8.03026L3.56054 5L0.357252 1.96974C-0.119083 1.51913 -0.119083 0.788558 0.357252 0.337954C0.833586 -0.112651 1.60588 -0.112651 2.08221 0.337954L5.2855 3.36822C6.23817 4.26942 6.23817 5.73057 5.2855 6.63178L2.08221 9.66205C1.60588 10.1127 0.833585 10.1127 0.357251 9.66205Z"
                                            fill="#F5F5F5" />
                                    </svg>
                                    <a class="menu__link" href="{{ route('login') }}">Connexion</a>
                                </li>
                                <li class="menu__item py-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                                        viewBox="0 0 6 10" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.357251 9.66205C-0.119084 9.21144 -0.119084 8.48087 0.357251 8.03026L3.56054 5L0.357252 1.96974C-0.119083 1.51913 -0.119083 0.788558 0.357252 0.337954C0.833586 -0.112651 1.60588 -0.112651 2.08221 0.337954L5.2855 3.36822C6.23817 4.26942 6.23817 5.73057 5.2855 6.63178L2.08221 9.66205C1.60588 10.1127 0.833585 10.1127 0.357251 9.66205Z"
                                            fill="#F5F5F5" />
                                    </svg>
                                    <a class="menu__link" href="{{ route('register') }}">Inscription</a>
                                </li>
                            @else
                                <li class="menu__item py-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                                        viewBox="0 0 6 10" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.357251 9.66205C-0.119084 9.21144 -0.119084 8.48087 0.357251 8.03026L3.56054 5L0.357252 1.96974C-0.119083 1.51913 -0.119083 0.788558 0.357252 0.337954C0.833586 -0.112651 1.60588 -0.112651 2.08221 0.337954L5.2855 3.36822C6.23817 4.26942 6.23817 5.73057 5.2855 6.63178L2.08221 9.66205C1.60588 10.1127 0.833585 10.1127 0.357251 9.66205Z"
                                            fill="#F5F5F5" />
                                    </svg>
                                    <a class="menu__link" href="{{ route('home') }}">Tableau de bord</a>
                                </li>
                                @endif
                            </ul>
                        </div>

                        <div class="col-lg-4 justify-content-center py-2">

                            <p class="py-2">
                                10h à 17h : Du Lundi au Samedi
                            </p>
                            <ul class="menu">
                                <li class="menu__item mn1 py-1">
                                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                        viewBox="0 0 36 36" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.8558 20.9313C21.0736 22.7034 19.1597 24.5972 17.9445 25.8225C14.8288 23.7743 12.165 21.1105 10.1168 17.9948L15.0078 13.0834C15.8778 12.2049 16.5227 11.1293 16.8877 9.94802C17.2526 8.76676 17.3269 7.51457 17.104 6.29846V6.21787C16.7819 4.47119 15.8579 2.89237 14.4925 1.75641C13.1272 0.620456 11.4069 -0.000915838 9.63073 0.000111256H7.60545C6.4989 -0.00588842 5.40449 0.230838 4.39944 0.69383C3.39439 1.15682 2.50317 1.83463 1.7886 2.67956C1.07404 3.52448 0.553552 4.516 0.263847 5.58398C-0.0258576 6.65195 -0.0777333 7.77052 0.111896 8.86072C1.38562 15.5572 4.64428 21.7154 9.4643 26.5355C14.2843 31.3555 20.4428 34.6143 27.1393 35.8881C28.2295 36.0777 29.348 36.026 30.416 35.7363C31.4839 35.4465 32.4754 34.9259 33.3203 34.2114C34.1652 33.4968 34.8431 32.6057 35.306 31.6006C35.769 30.5956 36.0059 29.5012 35.9999 28.3946V26.3693C35.999 24.5937 35.3768 22.8743 34.2411 21.5093C33.1055 20.1444 31.5281 19.2201 29.7823 18.8962H29.6911C28.4722 18.6517 27.212 18.709 26.0205 19.0638C24.829 19.4186 23.7425 20.0599 22.8558 20.9313ZM7.25102 12.2833C6.52743 10.2715 6.04475 8.1811 5.81307 6.05569H10.8763C10.9775 6.79491 11.1193 7.51379 11.2813 8.23276L7.25102 12.2833ZM29.8734 30.1262C27.7509 29.8911 25.6638 29.4048 23.6558 28.6779L27.7064 24.6274C28.4205 24.8032 29.144 24.9384 29.8734 25.0323V30.1262Z"
                                            fill="#F5F5F5" />
                                    </svg>
                                    <a class="menu__link px-2" href="tel:+22997603805">+229 97 60 38 05</a>
                                </li>
                                <li class="menu__item mn2 py-4 d-flex justify-content-between">
                                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                        viewBox="0 0 36 45" fill="none">
                                        <path
                                            d="M18.0001 21.7456C20.4845 21.7456 22.4986 19.7488 22.4986 17.2855C22.4986 14.8223 20.4845 12.8255 18.0001 12.8255C15.5156 12.8255 13.5015 14.8223 13.5015 17.2855C13.5015 19.7488 15.5156 21.7456 18.0001 21.7456Z"
                                            fill="#F5F5F5" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M24.6782 40.6326C21.7062 45.531 14.3117 45.5331 11.3366 40.6365L2.17575 25.5591L2.13345 25.4812C1.53022 24.3698 1.04917 23.2 0.697679 21.9917C0.232606 20.4117 -0.00205375 18.776 1.35405e-05 17.1332L8.98685e-05 17.0727L0.00224085 17.0122C0.163427 12.48 2.10489 8.16514 5.45073 4.98364C8.80004 1.79885 13.2972 0 17.9999 0C22.7026 0 27.1997 1.79885 30.549 4.98364C33.8949 8.16514 35.8363 12.48 35.9975 17.0122L35.9993 17.0639L35.9997 17.1157C36.0101 18.7897 35.7747 20.4574 35.2999 22.0673L35.2964 22.0793L35.2927 22.0913C34.9353 23.2727 34.4537 24.4158 33.8549 25.502L33.8184 25.5683L24.6782 40.6326ZM8.12848 20.0096C8.32987 20.703 8.60239 21.3728 8.9411 22.0087L18.0062 36.9285L27.0648 21.9987C27.4007 21.3796 27.6736 20.7275 27.8789 20.0521C28.1496 19.1299 28.2867 18.1734 28.2857 17.2113C28.1773 14.5442 27.0287 12.041 25.1105 10.217C23.1833 8.38447 20.632 7.37916 17.9999 7.37916C15.3677 7.37916 12.8165 8.38447 10.8893 10.217C8.97315 12.039 7.82496 14.5387 7.7144 17.2025C7.7189 18.1488 7.85714 19.0891 8.12449 19.9959L8.12848 20.0096Z"
                                            fill="#F5F5F5" />
                                    </svg>
                                    <p class="menu__link" href="#">
                                        LOT 410 A, PARCELLE 0 , BOITE POSTALE 04 BP<br>597 COTONOU, République du Bénin
                                    </p>
                                </li>
                                <li class="menu__item mn3 py-1">
                                    <img src="/assets/img/mail.jpg" alt="" srcset="" width="30"
                                        height="30">
                                    <a class="menu__link px-3" href="mailto:info@lafaaz.org">info@lafaaz.org</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container bg-white justify-content-center  py-4">
                <div class="footer-end bg-white text-center">
                    Copyright &copy; by <strong><span>FAAZ</span></strong>
                </div>
            </div>
        </footer>

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>

        <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="../assets/vendor/aos/aos.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="../assets/vendor/php-email-form/validate.js"></script>

        <script src="../assets/js/main.js"></script>
        <script src="../assets/js/script.js"></script>
        <script src="../assets/js/scriptfaq.js"></script>
        <script src="../assets/js/download.js"></script>

        <script
            src="https://www.paypal.com/sdk/js?client-id=AX7Ktk5ONRdhBYWFFZTzYjw7wFOZXfgpepQD__diAmPTn4WjKTjkH-IB7iNTn-ajosAo84xMaqoruvMJ&currency=USD">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
        <script src="app.js"></script>

        <script>
            var liens = document.querySelectorAll(".navbar li.dropdown");
            var liensScrollTo = document.querySelectorAll(".navbar li .scrollto");
            var navInfos = document.querySelectorAll(".nav-info .my-5");

            function hide(params) {
                params.forEach(element => {
                    element.style.display = "none";
                });
            }

            for (const cle in liens) {
                liens[cle].onmouseenter = function() {
                    hide(navInfos);
                    navInfos[cle].style.display = "block";
                }

                liens[cle].onclick = function() {
                    hide(navInfos);
                }
            }

            for (const cle in liensScrollTo) {
                liensScrollTo[cle].onmouseenter = () => {
                    hide(navInfos);
                }
            }

            navInfos.forEach(element => {
                element.onmouseleave = () => {
                    hide(navInfos);
                }
            });

            function handleScreenResize() {
                // Récupération de la largeur actuelle de l'écran
                const currentWidth = window.innerWidth;

                // Vérification sur la largeur
                if (currentWidth <= 500) {
                    hide(navInfos);
                }
            }

            // Ajout d'un gestionnaire d'événement pour l'événement de redimensionnement de la fenêtre
            window.addEventListener('resize', handleScreenResize);

            // Appel de la fonction de gestion initiale pour déterminer l'état initial de la fenêtre
            handleScreenResize();
        </script>
    </body>

    </html>
