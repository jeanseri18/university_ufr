<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />

    <!-- Darkmode JS -->
    <script src="{{ asset('assets/js/vendors/darkMode.js') }}"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/libs/tiny-slider/dist/tiny-slider.css') }}" />
    <title>@yield('title', 'Homepage | Geeks - Bootstrap 5 Template')</title>
</head>

<body class="bg-white">
    <div class="container">
        <!-- Menu à gauche -->
        <div class="row" style="height:100px;padding:30px 30px;">
            <div class="col-md-4">

                <div class="row" style="color:#2b6635">
                    <div class="col-md-3">
                        <a href="{{ route('actualité') }}" class="nav-link text-black" ><strong>À propos</strong></a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('etudiant') }}" class="nav-link text-black">Étudiant</a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="nav-link text-black">Enseignant</a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ route('partenaire') }}" class="nav-link text-black">Partenaires</a>
                    </div>
                </div>
            </div>
            <div class="col-md-1"> </div>
            <div class="col-md-4">
                <a class="navbar-brand mx-auto" href="#">
                    <img src="{{ asset('assets/Logo.png') }}" alt="Logo" style="height: 50px;">
                </a>
            </div>
            <div class="col-md-2"> </div>

        </div>

        <!-- Logo centré -->

    </div>
    </nav>

    <!-- Page Content -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color:#3CA45D;">
        <div class="container px-0">
            <!--  <a class="navbar-brand" href=""><img src="{{ asset('assets/Logo-BEM-Executive 1.png') }}" alt="Geeks" /></a>
        <div class="ms-auto d-flex align-items-center order-lg-3">
            <div class="d-flex gap-2 align-items-center">
                <a href="" class="btn btn-dark d-none d-md-block">Contactez nous</a>
            </div>
        </div>-->
            <div>
                <button class="navbar-toggler collapsed ms-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
                <li><a href="{{ route('actualité') }}" class="dropdown-item">Actualité
                </a></li>
                    <li><a href="{{ route('quiSommesNous') }}" class="dropdown-item">Qui sommes-nous</a></li>
                    <li><a href="{{ route('filiereCla') }}" class="dropdown-item">Filieres Classique</a></li>
                    <li><a href="{{ route('filierePro') }}" class="dropdown-item">Filieres professionnelles</a></li>
                    <li><a href="{{ route('alumnis') }}" class="dropdown-item">Alumnis</a></li>
             
                    <li><a href="{{ route('larecherche') }}" class="dropdown-item">La recherche à l'UFRSEG</a></li>

                </ul>
                <div class="mt-3 mt-lg-0 d-flex align-items-center">
                  <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
               </div>
            </div>
        </div>
    </nav>


    <main>
        <!-- Hero Section -->
        @yield('content')
        <!-- Trusted -->
    </main>
    <!-- Footer -->
    <!-- Footer -->
    <footer class="footer  py-8" style="background-color:#021105">
        <div class="container">
            <div class="row gy-6 gy-xl-0 pb-8">
                <div class="col-xl-3 col-lg-12 col-md-6 col-12">
                    <div class="d-flex flex-column gap-4">
                        <div>
                            <img src="{{ asset('assets/Logo.png') }}" alt="Geeks logo" />
                        </div>
                        <p class="mb-0">Description de l'ufr</p>

                    </div>
                </div> <div class="col-xl-2 col-md-3 col-6">
                    <!--div class="d-flex flex-column gap-3">
                        <span class="text-white-stable">Suivez nous sur </span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li><a href="https://www.facebook.com" class="nav-link" target="_blank">Facebook</a></li>
                            <li><a href="https://www.linkedin.com" class="nav-link" target="_blank">LinkedIn</a></li>
                            <li><a href="https://www.instagram.com" class="nav-link" target="_blank">Instagram</a></li>
                        </ul>
                    </div-->
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="d-flex flex-column gap-4">
                        <span class="text-white-stable">Nos Formations</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                           
                        </ul>
                    </div>
                </div>
                
               
                <div class="col-xl-2 col-md-3 col-12">
                    <div class="d-flex flex-column gap-5">
                        <div class="d-flex flex-column gap-3">
                            <span class="text-white-stable">Contact</span>
                            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
          
                            </ul>
                        </div>
                        <div class="d-flex flex-row gap-2">

                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark py-4">
                <div class="container text-center">
                    <span class="text-white">© 2024 UFR. Tous droits réservés.</span>
                </div>
            </div>
        </div>
    </footer>



    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tnsSlider.js') }}"></script>
</body>

</html>