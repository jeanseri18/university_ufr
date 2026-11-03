<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.jpeg') }}" />

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

    @stack('styles') {{-- Inclure les styles spécifiques à une page --}}
    <style>
        .active {
            font-weight: 800;
        }

        .nav-link:hover {
            font-weight: 800;
        }

        .header-bg {
            color:white; 
            background: linear-gradient(to right, #2B6635, #2B6635);
            height: 26em;
        }

        .active-submenu {
            font-weight: 600;
            color: #2B6635 !important;
            background-color: #E6F0E9 !important;
        }
    </style>
</head>

<body class="bg-white"> 
    <div class="container">
        <!-- Menu à gauche -->
        <div class="row" style="min-height: 100px; padding: 30px;">
            <div class="col-md-3 ">
                <a class="navbar-brand mx-auto" href="/">
                    <img src="{{ asset('assets/ufr.jpeg') }}" alt="Logo" class="img-fluid navbar-brand" style="height: 50px !important;">
                </a>
            </div>
            <div class="col-md-1"> </div>

            <div class="col-md-8">

                <div class="row text-center" style="color:#2b6635">
                    <div class="col-6 col-md-2">
                        <a href="{{ route('welcome') }}#a-propos{{-- route('actualité') --}}" class="nav-link text-black {{-- activeRoute('actualité') --}}">À propos</a>
                    </div>
                    <div class="col-6 col-md-2">
                        <a href="{{ route('etudiant') }}" class="nav-link text-black {{ activeRoute('etudiant') }}">Étudiant(e)</a>
                    </div>
                    <div class="col-6 col-md-2">
                        <a href="{{ route('enseignant.vie-sociale') }}" class="nav-link text-black {{ activeRoute('enseignant.vie-sociale', 'enseignant.calendrier', 'enseignant.procedure', 'enseignant.cames', 'enseignant.cours.td', 'enseignant.liste', 'enseignant.opportunites.mobilite', 'enseignant.opportunites.liste', 'enseignant.mobilite.liste') }}">Enseignant(e)</a>
                    </div>
                    <div class="col-6 col-md-4">
                        {{-- <a href="{{ route('personnel-admin') }}" class="nav-link text-black {{ activeRoute('personnel-admin') }}">Personnel administratif</a> --}}
                        <a href="{{ route('personnel-administratif.vie-sociale') }}" class="nav-link text-black {{ activeRoute('personnel-administratif.vie-sociale') }}">Personnel administratif</a>
                    </div>
                    <div class="col-6 col-md-2">
                        <a href="{{ route('partenaire.vie-sociale') }}" class="nav-link text-black {{ activeRoute('partenaire.vie-sociale') }}">Partenaires</a>
                    </div>
                </div>

            </div>
            <div class="col-md-1"> </div>
        </div>
        <!-- Logo centré -->
    </div>
    
    <!-- Page Content -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color:#3CA45D;">
        <div class="container px-0">
            {{-- <!--  <a class="navbar-brand" href=""><img src="{{ asset('assets/Logo-BEM-Executive 1.png') }}" alt="Geeks" /></a>
            <div class="ms-auto d-flex align-items-center order-lg-3">
                <div class="d-flex gap-2 align-items-center">
                    <a href="" class="btn btn-dark d-none d-md-block">Contactez nous</a>
                </div>
            </div>--> --}}
            <div>
                <button class="navbar-toggler collapsed ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
                    @if(in_array(Route::currentRouteName(), ['etudiant', 'etudiant.agenda', 'etudiant.listofstudent', 'etudiant.resultat-examen', 'etudiant.parlons-eco', 'etudiant.opportunites.mobilite', 'etudiant.opportunites.liste', 'etudiant.mobilite.liste', 'etudiant.agenda', 'etudiant.liste-repartition']))
                        <!-- Menu spécifique pour les étudiants -->
                        <li><a href="{{ route('etudiant') }}" class="dropdown-item {{ activeRouteSubMenu('etudiant') }}">Vie à l'université</a></li>
                        <li><a href="{{ route('etudiant.agenda') }}" class="dropdown-item {{ activeRouteSubMenu('etudiant.agenda') }}">Calendrier</a></li>
                        <li><a href="{{ route('etudiant.liste-repartition') }}" class="dropdown-item {{ activeRouteSubMenu('etudiant.liste-repartition') }}">Liste de répartition</a></li>
                        <li><a href="{{ route('etudiant.parlons-eco') }}" class="dropdown-item {{ activeRouteSubMenu('etudiant.parlons-eco') }}">Parlons Economie</a></li>
                        <li><a href="{{ route('etudiant.opportunites.mobilite') }}" class="dropdown-item {{ activeRouteSubMenu('etudiant.opportunites.mobilite') }}">Opportunités et Mobilité</a></li>
                        <li><a href="{{ route('etudiant.resultat-examen') }}" class="dropdown-item {{ activeRouteSubMenu('etudiant.resultat-examen') }}">Résultats des Examens </a></li>
                    @elseif(in_array(Route::currentRouteName(), ['welcome','welcome.qui-sommes-nous', 'filiereCla', 'filierePro', 'alumnis', 'larecherche']))
                        <!-- Menu spécifique pour les étudiants -->
                        <li><a href="{{ route('welcome') }}#a-propos" class="dropdown-item {{ activeRouteSubMenu('welcome') }}">Actualités</a></li>
                        <li><a href="{{ route('welcome.qui-sommes-nous') }}" class="dropdown-item {{ activeRouteSubMenu('welcome.qui-sommes-nous') }}">Qui sommes-nous</a></li>
                        <li><a href="{{ route('filiereCla') }}" class="dropdown-item {{ activeRouteSubMenu('filiereCla') }}">Filieres Classiques</a></li>
                        <li><a href="{{ route('filierePro') }}" class="dropdown-item {{ activeRouteSubMenu('filierePro') }}">Filieres professionnelles</a></li>
                        <li><a href="{{ route('alumnis') }}" class="dropdown-item {{ activeRouteSubMenu('alumnis') }}">Alumnis</a></li>
                        <li><a href="{{ route('larecherche') }}" class="dropdown-item {{ activeRouteSubMenu('larecherche') }}">La recherche à l'UFRSEG</a></li>
                    @elseif(in_array(Route::currentRouteName(), ['enseignant','enseignant.rejoindre', 'enseignant.calendrier', 'enseignant.procedure', 'enseignant.liste', 'enseignant.cames', 'enseignant.opportunites.mobilite', 'enseignant.opportunites.liste', 'enseignant.mobilite.liste', 'enseignant.cours.td', 'enseignant.vie-sociale']))
                        <!-- Menu spécifique pour les enseignants -->
                        <li><a href="{{ route('enseignant.vie-sociale') }}" class="dropdown-item {{ activeRouteSubMenu('enseignant.vie-sociale') }}">Vie sociale</a></li>
                        <li><a href="{{ route('enseignant.calendrier') }}" class="dropdown-item {{ activeRouteSubMenu('enseignant.calendrier') }}">Agenda</a></li>
                        <li><a href="{{ route('enseignant.liste') }}" class="dropdown-item {{ activeRouteSubMenu('enseignant.liste') }}">Listes des professeurs</a></li>
                        <li><a href="{{ route('enseignant.procedure') }}" class="dropdown-item {{ activeRouteSubMenu('enseignant.procedure') }}">Procedure administratives</a></li>
                        <li><a href="{{ route('enseignant.cames') }}" class="dropdown-item {{ activeRouteSubMenu('enseignant.cames') }}">CAMES</a></li>
                        <li><a href="{{ route('enseignant.cours.td') }}" class="dropdown-item {{ activeRouteSubMenu('enseignant.cours.td') }}">Cours/ TD </a></li>
                        <li><a href="{{ route('enseignant.opportunites.mobilite') }}" class="dropdown-item {{ activeRouteSubMenu('enseignant.opportunites.mobilite') }}">Opportunités et Mobilité </a></li>
                    @elseif(in_array(Route::currentRouteName(), ['personnel-administratif', 'personnel-administratif.vie-sociale','personnel-administratif.agenda', 'personnel-administratif.procedure', 'personnel-administratif.promotions', 'personnel-administratif.cames', 'personnel-administratif.opportunites.mobilite', 'personnel-administratif.opportunites.liste', 'personnel-administratif.mobilite.liste']))
                        <!-- Menu spécifique pour les Personnel administratif -->
                        <li><a href="{{ route('personnel-administratif.vie-sociale') }}" class="dropdown-item {{ activeRouteSubMenu('personnel-administratif.vie-sociale') }}">Vie sociale</a></li>
                        <li><a href="{{ route('personnel-administratif.agenda') }}" class="dropdown-item {{ activeRouteSubMenu('personnel-administratif.agenda') }}">Agenda</a></li>
                        <li><a href="{{ route('personnel-administratif.procedure') }}" class="dropdown-item {{ activeRouteSubMenu('personnel-administratif.procedure') }}">Procedure administratives</a></li>
                        <li><a href="{{ route('personnel-administratif.promotions') }}" class="dropdown-item {{ activeRouteSubMenu('personnel-administratif.promotions') }}">Promotions</a></li>
                        <li><a href="{{ route('personnel-administratif.opportunites.mobilite') }}" class="dropdown-item {{ activeRouteSubMenu('personnel-administratif.opportunites.mobilite') }}">Opportunités et Mobilité </a></li>
                    @else
                        <!-- Menu spécifique pour le personnel administratif -->
                        <li><a href="{{ route('partenaire.vie-sociale') }}" class="dropdown-item {{ activeRouteSubMenu('partenaire.vie-sociale') }}">Vie sociale</a></li>
                        <li><a href="{{ route('partenaire.liste') }}" class="dropdown-item {{ activeRouteSubMenu('partenaire.liste') }}">Liste des partenaires</a></li>
                        <li><a href="{{ route('partenaire.procedure-administrative') }}" class="dropdown-item {{ activeRouteSubMenu('partenaire.procedure-administrative') }}">Procédures Administratives</a></li>
                        <li><a href="{{ route('partenaire.opportunites.mobilite') }}" class="dropdown-item {{ activeRouteSubMenu('partenaire.opportunites.mobilite') }}">Opportunités et Mobilité</a></li>
                    @endif
                </ul>
                <div class="mt-3 mt-lg-0 d-flex align-items-center ms-auto">
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
    
    <footer class="footer py-8" style="background-color:#000000FF">
        <div class="container">
            <div class="row gy-6 gy-xl-0 pb-4">
                <!-- Section Description -->
                <div class="col-xl-5 col-lg-6 col-md-12 mb-4">
                    <div class="d-flex flex-column gap-4">
                        <div>
                            <img src="{{ asset('assets/logo-ufr-no-bg.png') }}" alt="Logo UFR" style="height: 70px"/>
                        </div>
                        <p class="mb-0 text-white text-justify">
                            L’UFR des Sciences Économiques et de Gestion de l’Université Félix Houphouët-Boigny propose un parcours académique complet et diversifié, allant de la Licence au Doctorat, avec des formations adaptées aux exigences du marché du travail et aux besoins de la recherche scientifique.
                        </p>
                    </div>
                </div>

                <!-- Section Pages -->
                <div class="col-xl-3 col-lg-6 col-md-12 mb-4">
                    <div class="d-flex flex-column gap-4">
                        <h3 class="text-white fw-bold">Pages</h3>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li><a href="{{ route('welcome') }}#a-propos" class="nav-link text-white"><i class="bi bi-chevron-right"></i> Actualités</a></li>
                            <li><a href="{{ route('welcome.qui-sommes-nous') }}" class="nav-link text-white"><i class="bi bi-chevron-right"></i> Qui sommes-nous</a></li>
                            <li><a href="{{ route('filiereCla') }}" class="nav-link text-white"><i class="bi bi-chevron-right"></i> Filières Classiques</a></li>
                            <li><a href="{{ route('filierePro') }}" class="nav-link text-white"><i class="bi bi-chevron-right"></i> Filières Professionnelles</a></li>
                            <li><a href="{{ route('alumnis') }}" class="nav-link text-white"><i class="bi bi-chevron-right"></i> Alumnis</a></li>
                            <li><a href="{{ route('larecherche') }}" class="nav-link text-white"><i class="bi bi-chevron-right"></i> La recherche à l'UFRSEG</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Section Contact -->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="d-flex flex-column gap-4">
                        <h3 class="text-white fw-bold">Contact</h3>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li class="text-white"><span class="text-success"><i class="bi bi-geo-alt"></i></span>  Adresse : Abidjan, Université Félix Houphouët-Boigny</li>
                            <li class="text-white"><span class="text-success"><i class="bi bi-envelope"></i></span> Email : servicecommunication-ufrseg@ufhb.edu.ci</li>
                            <li class="text-white">
                                <span class="text-success"><i class="bi bi-telephone"></i></span>(+225) 07 99 90 43 45 <br>
                                <span class="text-success"><i class="bi bi-telephone"></i></span> (+225) 07 77 02 66 42 <br>(bureau des fillières professionnelles)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <div class="d-flex justify-content-center gap-3 pt-4" style="font-size: 20px">
                        <a href="https://www.facebook.com/share/1834vSsYgb/" target="_blank" class="text-success"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/ufrseg-le-d%C3%A9canat-899947281/" target="_blank" class="text-success"><i class="bi bi-linkedin"></i></a>
                        <a href="https://x.com/UfrsegD" target="_blank" class="text-success"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://www.instagram.com/ufr_seg/" target="_blank" class="text-success"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>

            {{-- <hr class="border-" style="height: 0.25px; color: #373737"/> --}}

            <!-- Section Copyright -->
            <div class="pt-4"  style="background-color:#000000FF">
                <div class="container text-center">
                    <span class="text-white">© 2024 UFR. Tous droits réservés.</span>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
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

    @stack('scripts')
</body>

</html>
