@extends('layouts.university')

@section('title', 'Nos Formations | UFR')

@push('styles')
    <style>
        .banner {
            /* background-image: url('{{ asset('images/university/banner-parlons-eco.jpg') }}');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 50px 0; */
            background-image: linear-gradient(to right, #4CAF50, #8BC34A);
            color: white;
            padding: 50px 20px;
            /* text-align: center; */
            border-radius: 10px;
            height: 300px;
        }

        .banner-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: white;
            font-size: 4.5rem;
            margin-bottom: 20px;
        }

        /* Styles pour le conteneur principal */
        .main-container {
            max-width: 1100px;
            margin: 0 auto;
        }

        /* Styles pour chaque bloc de section */
        .section-block {
            display: flex; /* Active Flexbox pour un alignement horizontal */
            align-items: center; /* Centre les éléments verticalement */
            gap: 30px; /* Ajoute un espace entre l'image et le texte */
            background-color: #fff;
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-bottom: 30px; /* Espace entre les deux blocs */
        }

        /* Styles pour l'inversion du layout */
        .reversed-layout {
            flex-direction: row-reverse; /* Inverse l'ordre de l'image et du texte */
            background-color: #f0f3f0; /* Couleur de fond pour le second bloc */
        }

        /* Styles des conteneurs d'image et de contenu */
        .image-container, .content-container {
            flex: 1; /* Permet aux deux conteneurs de prendre une part égale de l'espace */
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 1rem;
        }

        /* Styles du titre */
        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }

        /* Style du titre du second bloc */
        .green-title {
            color: #386641;
        }

        /* Styles du texte */
        .section-text {
            font-size: 1rem;
            color: #6c757d;
            line-height: 1.6;
        }

        /* Styles pour les petits écrans (tablettes et mobiles) */
        @media (max-width: 768px) {
            .section-block {
                flex-direction: column; /* Les blocs s'empilent verticalement */
                text-align: center;
                padding: 20px;
            }
        }

        .header-bg {
            color: white;
            background: linear-gradient(135deg, rgba(43, 102, 53, .96), rgba(56, 102, 65, .92)),
                        linear-gradient(to right, #2B6635, #386641);
            min-height: 26em;
            display: flex;
            align-items: center;
        }

        @media (max-width: 767.98px) {
            .header-bg { min-height: 22em; }
        }
    </style>
    <style>
        .alumni-directory { background: #f8faf8; }
        .alumni-card { transition: transform .2s ease, box-shadow .2s ease; }
        .alumni-card:hover { transform: translateY(-4px); box-shadow: 0 1rem 2rem rgba(43,102,53,.12)!important; }
        .alumni-avatar { width:58px; height:58px; border-radius:50%; display:grid; place-items:center; font-size:1.45rem; font-weight:700; flex-shrink:0; }
        .alumni-item.is-hidden { display:none; }
        .text-white-75 { color: rgba(255,255,255,.82); }
        #alumniNoResults { display:none; }
    </style>
@endpush


@section('content')
<section class="py-lg-8 py-5 header-bg" style="">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-6 mb-lg-0">
                <div>
                    <h4 class="text-white mb-4">
                        <i class="bi bi-chevron-compact-right text-white rounded-circle "></i>
                        A propos
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">La recherche universitaire</h1>
                    <p class="fs-5 pe-lg-10 mb-5 text-white-75">
                        Notre institution est dédiée à l'excellence dans la recherche académique. Nous nous efforçons de faire progresser les connaissances dans divers domaines et de contribuer au développement de la société à travers des études et des innovations continues.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <!-- Image ou autre contenu -->
            </div>
        </div>
    </div>
</section>


<section class="my-xl-9 my-5">
    <div class="container" data-cue="fadeIn" data-show="true"
        style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
        <div class="row">
            <div class="col-xl-12 ">
                <div class="text-left mb-xl-7 mb-5">
                    <h2 class="mb-3">
                        Découvrez notre <span class="text-primary">Cellule de recherche</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="table-responsive-lg">
            <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                <!-- Article 1 -->
                <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true"
                    style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">

                    <div class="card border-0 card-primary">
                        <div style="display: flex; background-color: #82C17E; width: 100%;">
                            <div style="flex: 1; background-color: #82C17E; text-align: center; padding: 10px;">
                                <strong>Article 1</strong>
                            </div>
                            <div style="flex: 1; background-color:#82C17E; text-align: center; padding: 10px;">
                                <!-- vide pour l'instant -->
                            </div>
                        </div>

                        <div style="display: flex; width: 100%;">
                            <div style="flex: 1; background-color: white; text-align: center;">
                                <img src="https://fakeimg.pl/300x200/808080/ffffff/" alt="Image" style="width: 100%; object-fit: cover;">
                            </div>
                            <div style="flex: 1; background-color: white; text-align: center; padding: 10px;">
                                <strong>Texte sur l'article 1 concernant les cellules de recherche</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true"
                    style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">

                    <div class="card border-0 card-primary">
                        <div style="display: flex; background-color: #82C17E; width: 100%;">
                            <div style="flex: 1; background-color: #82C17E; text-align: center; padding: 10px;">
                                <strong>Article 2</strong>
                            </div>
                            <div style="flex: 1; background-color:#82C17E; text-align: center; padding: 10px;">
                                <!-- vide pour l'instant -->
                            </div>
                        </div>

                        <div style="display: flex; width: 100%;">
                            <div style="flex: 1; background-color: white; text-align: center;">
                                <img src="https://fakeimg.pl/300x200/808080/ffffff/" alt="Image" style="width: 100%; object-fit: cover;">
                            </div>
                            <div style="flex: 1; background-color: white; text-align: center; padding: 10px;">
                                <strong>Texte sur l'article 2 concernant les cellules de recherche</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true"
                    style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">

                    <div class="card border-0 card-primary">
                        <div style="display: flex; background-color: #82C17E; width: 100%;">
                            <div style="flex: 1; background-color: #82C17E; text-align: center; padding: 10px;">
                                <strong>Article 3</strong>
                            </div>
                            <div style="flex: 1; background-color:#82C17E; text-align: center; padding: 10px;">
                                <!-- vide pour l'instant -->
                            </div>
                        </div>

                        <div style="display: flex; width: 100%;">
                            <div style="flex: 1; background-color: white; text-align: center;">
                                <img src="https://fakeimg.pl/300x200/808080/ffffff/" alt="Image" style="width: 100%; object-fit: cover;">
                            </div>
                            <div style="flex: 1; background-color: white; text-align: center; padding: 10px;">
                                <strong>Texte sur l'article 3 concernant les cellules de recherche</strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<br>
<section class="my-xl-9 my-5">
    <div class="container" data-cue="fadeIn" data-show="true"
        style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
        <div class="row">
            <div class="col-xl-12 ">
                <div class="text-left mb-xl-7 mb-5">
                    <h2 class="mb-3">
                        Découvrez notre <span class="text-primary">CVthèque en Sciences Économiques et Gestion</span>
                    </h2>
                    <p class="mb-0">Accédez à des profils de professionnels et de diplômés dans les domaines des
                        sciences économiques et de la gestion. Consultez les parcours académiques et professionnels des
                        candidats pour trouver le talent qui correspond à vos besoins.</p>
                </div>
            </div>
        </div>
        <div class="table-responsive-lg">
            <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true"
                    style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="card border-0 card-primary">
                        <div class="card-body p-5">
                            <div class="position-relative d-inline-block mb-5">
                                <img src="https://fakeimg.pl/300x200/808080/ffffff/?text=Image+Grise" alt="profile"
                                    class="avatar avatar-xl rounded-circle border-2 border border-white shadow-sm">

                                <div class="position-absolute bottom-0 end-0">
                                    <div class="icon-md icon-shape rounded-circle bg-white me-n2 mb-n2 shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-person-check text-primary"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zM8 7a2 2 0 1 0-4 0 2 2 0 0 0 4 0zM1 11s1-1 4-1h6s3 0 4 1v3s-1-1-4-1H5s-3 0-4 1v-3z">
                                            </path>
                                            <path
                                                d="M10.854 3.146a.5.5 0 0 1 .707.707L8.707 6.207l-1.5-1.5 2.646-2.647a.5.5 0 0 1 .707 0z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <h4 class="card-title">Marie Dupont</h4>
                                <p class="mb-0 card-text">Diplômée d'un Master en Sciences Économiques et Gestion, avec
                                    une expertise en analyse financière et en stratégie d'entreprise. Passionnée par la
                                    gestion des projets et la planification financière.</p>
                            </div>

                            <a href="#!" class="icon-link icon-link-hover card-link">
                                Voir le CV complet
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true"
                    style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="card border-0 card-primary">
                        <div class="card-body p-5">
                            <div class="position-relative d-inline-block mb-5">
                                <img src="https://fakeimg.pl/300x200/808080/ffffff/?text=Image+Grise" alt="profile"
                                    class="avatar avatar-xl rounded-circle border-2 border border-white shadow-sm">

                                <div class="position-absolute bottom-0 end-0">
                                    <div class="icon-md icon-shape rounded-circle bg-white me-n2 mb-n2 shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-person-check text-primary"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zM8 7a2 2 0 1 0-4 0 2 2 0 0 0 4 0zM1 11s1-1 4-1h6s3 0 4 1v3s-1-1-4-1H5s-3 0-4 1v-3z">
                                            </path>
                                            <path
                                                d="M10.854 3.146a.5.5 0 0 1 .707.707L8.707 6.207l-1.5-1.5 2.646-2.647a.5.5 0 0 1 .707 0z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <h4 class="card-title">Jean Martin</h4>
                                <p class="mb-0 card-text">Expert en gestion des ressources humaines et en optimisation
                                    des processus dans les entreprises. Titulaire d’un MBA en Management et Leadership,
                                    avec 5 ans d'expérience dans le secteur public et privé.</p>
                            </div>

                            <a href="#!" class="icon-link icon-link-hover card-link">
                                Voir le CV complet
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true"
                    style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="card border-0 card-primary">
                        <div class="card-body p-5">
                            <div class="position-relative d-inline-block mb-5">
                                <img src="https://fakeimg.pl/300x200/808080/ffffff/?text=Image+Grise" alt="profile"
                                    class="avatar avatar-xl rounded-circle border-2 border border-white shadow-sm">

                                <div class="position-absolute bottom-0 end-0">
                                    <div class="icon-md icon-shape rounded-circle bg-white me-n2 mb-n2 shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-person-check text-primary"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zM8 7a2 2 0 1 0-4 0 2 2 0 0 0 4 0zM1 11s1-1 4-1h6s3 0 4 1v3s-1-1-4-1H5s-3 0-4 1v-3z">
                                            </path>
                                            <path
                                                d="M10.854 3.146a.5.5 0 0 1 .707.707L8.707 6.207l-1.5-1.5 2.646-2.647a.5.5 0 0 1 .707 0z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <h4 class="card-title">Sophie Lefèvre</h4>
                                <p class="mb-0 card-text">Consultante en stratégie d'entreprise, avec une expertise
                                    particulière dans l'analyse des marchés financiers et la gestion des
                                    investissements. Diplômée d’un MSc en Gestion et Stratégie Internationale.</p>
                            </div>

                            <a href="#!" class="icon-link icon-link-hover card-link">
                                Voir le CV complet
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-xl-9 my-5">
    <div class="container" data-cue="fadeIn" data-show="true"
        style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
        <div class="row">
            <div class="col-xl-12 ">
                <div class="text-left mb-xl-7 mb-5">
                    <h2 class="mb-3">
                        Découvrez Nos <span class="text-primary">projets nationaux</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="table-responsive-lg">
            <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                <!-- Article 1 -->
                <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true"
                    style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">

                    <div class="card border-0 card-primary">
                        <div style="display: flex; background-color: #82C17E; width: 100%;">
                            <div style="flex: 1; background-color: #82C17E; text-align: center; padding: 10px;">
                                <strong>Article 1</strong>
                            </div>
                            <div style="flex: 1; background-color:#82C17E; text-align: center; padding: 10px;">
                                <!-- vide pour l'instant -->
                            </div>
                        </div>

                        <div style="display: flex; width: 100%; padding: 0px;">
                            <div style="flex: 1; background-color: white; text-align: center;">
                                <img src="https://fakeimg.pl/300x200/808080/ffffff/" alt="Image" style="width: 100%; object-fit: cover;">
                            </div>
                            <div style="flex: 1; background-color: white; text-align: center; padding: 10px;">
                                <strong>Texte sur l'article 1 concernant les cellules de recherche</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true"
                    style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">

                    <div class="card border-0 card-primary">
                        <div style="display: flex; background-color: #82C17E; width: 100%;">
                            <div style="flex: 1; background-color: #82C17E; text-align: center; padding: 10px;">
                                <strong>Article 2</strong>
                            </div>
                            <div style="flex: 1; background-color:#82C17E; text-align: center; padding: 10px;">
                                <!-- vide pour l'instant -->
                            </div>
                        </div>

                        <div style="display: flex; width: 100%;">
                            <div style="flex: 1; background-color: white; text-align: center;">
                                <img src="https://fakeimg.pl/300x200/808080/ffffff/" alt="Image" style="width: 100%; object-fit: cover;">
                            </div>
                            <div style="flex: 1; background-color: white; text-align: center; padding: 10px;">
                                <strong>Texte sur l'article 2 concernant les cellules de recherche</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true"
                    style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">

                    <div class="card border-0 card-primary">
                        <div style="display: flex; background-color: #82C17E; width: 100%;">
                            <div style="flex: 1; background-color: #82C17E; text-align: center; padding: 10px;">
                                <strong>Article 3</strong>
                            </div>
                            <div style="flex: 1; background-color:#82C17E; text-align: center; padding: 10px;">
                                <!-- vide pour l'instant -->
                            </div>
                        </div>

                        <div style="display: flex; width: 100%;">
                            <div style="flex: 1; background-color: white; text-align: center;">
                                <img src="https://fakeimg.pl/300x200/808080/ffffff/" alt="Image" style="width: 100%; object-fit: cover;">
                            </div>
                            <div style="flex: 1; background-color: white; text-align: center; padding: 10px;">
                                <strong>Texte sur l'article 3 concernant les cellules de recherche</strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="my-xl-9 my-5">
    <div class="container" data-cue="fadeIn" data-show="true"
        style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
        <div class="row">
            <div class="col-xl-12 ">
                <div class="text-left mb-xl-7 mb-5">
                    <h2 class="mb-3">
                        Découvrez Nos <span class="text-primary">Projets internationaux</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="table-responsive-lg">
            <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                <!-- Article 1 -->
                <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true"
                    style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">

                    <div class="card border-0 card-primary">
                        <div style="display: flex; background-color: #82C17E; width: 100%;">
                            <div style="flex: 1; background-color: #82C17E; text-align: center; padding: 10px;">
                                <strong>Article 1</strong>
                            </div>
                            <div style="flex: 1; background-color:#82C17E; text-align: center; padding: 10px;">
                                <!-- vide pour l'instant -->
                            </div>
                        </div>

                        <div style="display: flex; width: 100%;">
                            <div style="flex: 1; background-color: white; text-align: center;">
                                <img src="https://fakeimg.pl/300x200/808080/ffffff/" alt="Image" style="width: 100%; object-fit: cover;">
                            </div>
                            <div style="flex: 1; background-color: white; text-align: center; padding: 10px;">
                                <strong>Texte sur l'article 1 concernant les cellules de recherche</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true"
                    style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">

                    <div class="card border-0 card-primary">
                        <div style="display: flex; background-color: #82C17E; width: 100%;">
                            <div style="flex: 1; background-color: #82C17E; text-align: center; padding: 10px;">
                                <strong>Article 2</strong>
                            </div>
                            <div style="flex: 1; background-color:#82C17E; text-align: center; padding: 10px;">
                                <!-- vide pour l'instant -->
                            </div>
                        </div>

                        <div style="display: flex; width: 100%;">
                            <div style="flex: 1; background-color: white; text-align: center;">
                                <img src="https://fakeimg.pl/300x200/808080/ffffff/" alt="Image" style="width: 100%; object-fit: cover;">
                            </div>
                            <div style="flex: 1; background-color: white; text-align: center; padding: 10px;">
                                <strong>Texte sur l'article 2 concernant les cellules de recherche</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="col-lg-4 col-md-6" data-cue="zoomIn" data-show="true"
                    style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">

                    <div class="card border-0 card-primary">
                        <div style="display: flex; background-color: #82C17E; width: 100%;">
                            <div style="flex: 1; background-color: #82C17E; text-align: center; padding: 10px;">
                                <strong>Article 3</strong>
                            </div>
                            <div style="flex: 1; background-color:#82C17E; text-align: center; padding: 10px;">
                                <!-- vide pour l'instant -->
                            </div>
                        </div>

                        <div style="display: flex; width: 100%;">
                            <div style="flex: 1; background-color: white; text-align: center;">
                                <img src="https://fakeimg.pl/300x200/808080/ffffff/" alt="Image" style="width: 100%; object-fit: cover;">
                            </div>
                            <div style="flex: 1; background-color: white; text-align: center; padding: 10px;">
                                <strong>Texte sur l'article 3 concernant les cellules de recherche</strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection