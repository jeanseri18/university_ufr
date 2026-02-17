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

        .nav-link:hover{
            font-weight: 800;
        }

        .header-bg {
            color:white; 
            background: linear-gradient(to right, #2B6635, #2B6635);
            height: 26em;
        }
    </style>
</head>

<body class="bg-white"> 
    <div class="container">
        <!-- Menu à gauche -->
        <div class="row" style="min-height: 100px; padding: 30px;">
            <div class="col-md-3 ">
                <a class="navbar-brand mx-auto" href="/">
                    <img src="{{ asset('assets/ufr.jpeg') }}" alt="Logo" class="img-fluid navbar-brand" style="height: 40px">
                </a>
            </div>
            <div class="col-md-1"> </div>

            <div class="col-md-8">

                <div class="row text-center" style="color:#2b6635">
                    <div class="col-6 col-md-2">
                        <a href="{{ route('actualité') }}" class="nav-link text-black {{ activeRoute('actualité') }}">À propos</a>
                    </div>
                    <div class="col-6 col-md-2">
                        <a href="{{ route('etudiant') }}" class="nav-link text-black {{ activeRoute('etudiant') }}">Étudiant(e)</a>
                    </div>
                    <div class="col-6 col-md-2">
                        <a href="{{ route('enseignant') }}" class="nav-link text-black {{ activeRoute('enseignant') }}">Enseignant(e)</a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="{{ route('personnel-admin') }}" class="nav-link text-black {{ activeRoute('personnel-admin') }}">Personnel administratif</a>
                    </div>
                    <div class="col-6 col-md-2">
                        <a href="{{ route('partenaire') }}" class="nav-link text-black {{ activeRoute('partenaire') }}">Partenaires</a>
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
            <!--  <a class="navbar-brand" href=""><img src="{{ asset('assets/Logo-BEM-Executive 1.png') }}" alt="Geeks" /></a>
            <div class="ms-auto d-flex align-items-center order-lg-3">
                <div class="d-flex gap-2 align-items-center">
                    <a href="" class="btn btn-dark d-none d-md-block">Contactez nous</a>
                </div>
            </div>-->
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
                        <li><a href="{{ route('etudiant') }}" class="dropdown-item">Vie à l'université</a></li>
                        <li><a href="{{ route('etudiant.agenda') }}" class="dropdown-item">Calendrier</a></li>
                        <li><a href="{{ route('etudiant.liste-repartition') }}" class="dropdown-item">Liste de répartition</a></li>
                        <li><a href="{{ route('etudiant.parlons-eco') }}" class="dropdown-item">Parlons Economie</a></li>
                        <li><a href="{{ route('etudiant.opportunites.mobilite') }}" class="dropdown-item">Opportunités et Mobilité</a></li>
                        <li><a href="{{ route('etudiant.resultat-examen') }}" class="dropdown-item">Résultats des Examens </a></li>

                    @elseif(in_array(Route::currentRouteName(), ['welcome','actualité','quiSommesNous', 'filiereCla', 'filierePro', 'alumnis', 'larecherche']))
                        <!-- Menu spécifique pour les étudiants -->
                        <li><a href="{{ route('actualité') }}" class="dropdown-item">Actualités</a></li>
                        <li><a href="{{ route('quiSommesNous') }}" class="dropdown-item">Qui sommes-nous</a></li>
                        <!-- Menu standard pour tous les utilisateurs -->
                        <li><a href="{{ route('filiereCla') }}" class="dropdown-item">Filieres Classiques</a></li>
                        <li><a href="{{ route('filierePro') }}" class="dropdown-item">Filieres professionnelles</a></li>
                        <li><a href="{{ route('alumnis') }}" class="dropdown-item">Alumnis</a></li>
                        <li><a href="{{ route('larecherche') }}" class="dropdown-item">La recherche à l'UFRSEG</a></li>
                    @elseif(in_array(Route::currentRouteName(), ['enseignant','enseignant.rejoindre', 'enseignant.calendrier', 'enseignant.procedure', 'enseignant.liste', 'enseignant.cames', 'enseignant.opportunites.mobilite', 'enseignant.opportunites.liste', 'enseignant.mobilite.liste', 'enseignant.cours.td']))
                        <!-- Menu spécifique pour les enseignants -->
                        <li><a href="{{ route('enseignant') }}" class="dropdown-item">Vie sociale</a></li>
                        <li><a href="{{ route('enseignant.calendrier') }}" class="dropdown-item">Agenda</a></li>
                        <li><a href="{{ route('enseignant.liste') }}" class="dropdown-item">Listes des professeurs</a></li>
                        <li><a href="{{ route('enseignant.procedure') }}" class="dropdown-item">Procedure administratives</a></li>
                        <li><a href="{{ route('enseignant.cames') }}" class="dropdown-item">CAMES</a></li>
                        <li><a href="{{ route('enseignant.cours.td') }}" class="dropdown-item">Cours/ TD </a></li>
                        <li><a href="{{ route('enseignant.opportunites.mobilite') }}" class="dropdown-item">Opportunités et Mobilité </a></li>
                    @else
                        <li><a href="javascript:void(0)" class="dropdown-item">Agenda</a></li>
                        <!-- Menu standard pour tous les utilisateurs -->
                        <li><a href="javascript:void(0)" class="dropdown-item">Procédures Administratives</a></li>
                        <li><a href="javascript:void(0)" class="dropdown-item">Promotions</a></li>
                        <li><a href="javascript:void(0)" class="dropdown-item">Opportunités et Mobilité</a></li>
                        <li><a href="{{ route('partenaire.vie-sociale') }}" class="dropdown-item">Vie sociale</a></li>
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
                        <p class="mb-0 text-white">
                            L’UFR des Sciences Économiques et de Gestion de l’Université Félix Houphouët-Boigny propose un parcours académique complet et diversifié, allant de la Licence au Doctorat, avec des formations adaptées aux exigences du marché du travail et aux besoins de la recherche scientifique.
                        </p>
                    </div>
                </div>

                <!-- Section Pages -->
                <div class="col-xl-3 col-lg-6 col-md-12 mb-4">
                    <div class="d-flex flex-column gap-4">
                        <span class="text-white fw-bold">Pages</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li><a href="{{ route('actualité') }}" class="nav-link text-white">Actualités</a></li>
                            <li><a href="{{ route('quiSommesNous') }}" class="nav-link text-white">Qui sommes-nous</a></li>
                            <li><a href="{{ route('filiereCla') }}" class="nav-link text-white">Filières Classiques</a></li>
                            <li><a href="{{ route('filierePro') }}" class="nav-link text-white">Filières Professionnelles</a></li>
                            <li><a href="{{ route('alumnis') }}" class="nav-link text-white">Alumnis</a></li>
                            <li><a href="{{ route('larecherche') }}" class="nav-link text-white">La recherche à l'UFRSEG</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Section Contact -->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="d-flex flex-column gap-4">
                        <span class="text-white fw-bold">Contact</span>
                        <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                            <li class="text-white">📍 Adresse : Abidjan, Université Félix Houphouët-Boigny</li>
                            <li class="text-white">📧 Email : Servicecommunication-ufrseg@ufhb.edu.ci</li>
                            <li class="text-white">
                                +225 07 99 90 43 45 <br>
                                +225 07 77 02 66 42 <br>(bureau des fillières professionnelles)
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

    @stack('scripts')
</body>

</html>
