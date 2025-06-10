<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Test">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard.">
    <meta name="keywords" content="bootstrap 5, admin dashboard, etc.">
    <title>@yield('title', 'Dashboard')</title>

    <!-- Global styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../../dist/css/adminlte.css">

    @stack('styles') {{-- Inclure les styles spécifiques à une page --}}
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <nav class="app-header navbar navbar-expand bg-body">
            <div class="container-fluid">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" style="color:white" href="#" data-lte-toggle="fullscreen">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="../../dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow" alt="User Image">
                            <span class="d-none d-md-inline">Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <li class="user-header text-bg-primary">
                                <p>Admin</p>
                            </li>
                            <li class="user-footer">
                                <!--a href="#" class="btn btn-default btn-flat">Profile</a-->
                                <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-end">Deconnexion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <aside class="app-sidebar bg-success shadow" data-bs-theme="dark" style="background-color:#3ca45d ; ">
            {{-- <div class="sidebar-brand">
                <a href="./index.html" class="brand-link">
                    <span class="brand-text fw-light">UFR Admin</span>
                </a>
            </div> --}}
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 10px;">
                            <a href="{{ route('home') }}" class="navbar-brand">
                                <img src="{{ asset('/assets/ufr.jpeg') }}" alt="" srcset="" style="width: 100px; height: 100px; border-radius: 10%; margin-left: 10px; justify-content: center; display: flex; margin-bottom: 10px;">
                            </a>
                        </div>
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link" style="color:white">
                                <i class="nav-icon bi bi-speedometer2"></i>
                                <p>Tableau de board</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('filieres.index') }}" class="nav-link" style="color:white">
                                <i class="nav-icon bi bi-book"></i>
                                <p>Filieres</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('documents.index') }}" class="nav-link" style="color:white">
                                <i class="nav-icon bi bi-file-earmark-text"></i>
                                <p>Documents</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('professeurs.index') }}" class="nav-link" style="color:white">
                                <i class="nav-icon bi bi-person-badge"></i>
                                <p>Professeurs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('mediatheque.index') }}" class="nav-link" style="color:white">
                                <i class="nav-icon bi bi-collection-play"></i>
                                <p>Mediatheque</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('actualites.index') }}" class="nav-link" style="color:white">
                                <i class="nav-icon bi bi-newspaper"></i>
                                <p>Actualités</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('event.index') }}" class="nav-link" style="color:white">
                                <i class="nav-icon bi bi-calendar-date"></i>
                                <p>Calendrier</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('jobs.index') }}" class="nav-link" style="color:white">
                                <i class="nav-icon bi bi-briefcase"></i>
                                <p>Offre d'emploie</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('resultat-examen.index') }}" class="nav-link" style="color:white">
                                <i class="nav-icon bi bi-mortarboard"></i>
                                <p>Resultat examens</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index')}}" class="nav-link" style="color:white" >
                                <i class="nav-icon bi bi-people"></i>
                                <p>Utilisateur</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="app-main">
          
            <div class="app-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <!-- Global scripts -->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../../dist/js/adminlte.js"></script>

    @stack('scripts')
</body>
</html>
