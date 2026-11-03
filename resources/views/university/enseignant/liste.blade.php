@extends('layouts.university')

@section('title', 'Liste des enseignants | UFR')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/university/parlons-eco.css') }}">
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


        .profile-card {
            display: flex; /* Active Flexbox pour aligner les deux sections côte à côte */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: 0 auto;
            padding: 30px;
            gap: 40px; /* Espace entre les deux sections */
            align-items: flex-start; /* Alignement en haut */
        }

        .left-section {
            flex-shrink: 0; /* Empêche cette section de se réduire */
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .profile-photo img {
            width: 200px; /* Taille de l'image */
            height: 200px;
            object-fit: cover; /* Recadre l'image pour qu'elle remplisse l'espace */
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            text-align: left;
        }

        .name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #386641; /* La couleur verte de l'exemple */
            margin: 0 0 5px;
        }

        .title {
            font-size: 1.1rem;
            font-weight: normal;
            color: #555;
            margin: 0 0 20px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .contact-item .icon {
            font-size: 1.2rem;
            margin-right: 10px;
            color: #386641;
        }

        .contact-item .info {
            color: #333;
        }

        .right-section {
            flex-grow: 1; /* Permet à cette section de prendre tout l'espace restant */
        }

        .bio-text {
            font-size: 1.1rem;
            color: #6c757d;
            line-height: 1.6;
            font-style: italic; /* Texte en italique comme sur la maquette */
        }

        .divider {
            border: 0;
            height: 1px;
            background-color: #ccc;
            margin: 40px auto;
            max-width: 900px;
        }

        /* Rendre le design responsive pour les petits écrans */
        @media (max-width: 768px) {
            .profile-card {
                flex-direction: column; /* Empile les sections verticalement */
                align-items: center;
            }

            .left-section, .right-section {
                width: 100%;
                text-align: center;
            }

            .contact-info {
                text-align: center;
            }

            .contact-item {
                justify-content: center;
            }
        }
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
                        Enseignant
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">LISTE DES ENSEIGNANTS</h1>
                    <p class="pe-lg-10 mb-5">
                        L’enseignant-chercheur est un érudit spécialisé dans une discipline qui constitue le lien 
                        entre la recherche scientifique, le monde industriel et la société. En Côte d’ivoire, 
                        l’enseignant-chercheur est un universitaire de haut niveau (titulaire d’un doctorat) qui 
                        assure la formation et la recherche au sein des institutions d’enseignement supérieur. Il est 
                        fonctionnaire et est recruté par le Ministère de l’Enseignement Supérieur et de la Recherche Scientifique (MESRS).
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <!-- Image ou autre contenu -->
            </div>
        </div>
    </div>
</section>

<section class="my-5 py-0 ">
    <div class="container">

        <div class="row g-4 justify-content-center">
            <div class="col-lg-6">
                <article class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="row g-0 h-100">
                        <div class="col-sm-4 bg-light">
                            <img src="{{ asset('/assets/test-ufr.png') }}" class="w-100 h-100 object-fit-cover" alt="Dr. KONÉ Salif">
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body p-4">
                                <span class="badge text-bg-primary mb-2">Maître de Conférences</span>
                                <h3 class="h5 fw-bold mb-1">Dr. KONÉ Salif</h3>
                                <p class="text-primary fw-semibold mb-3">Directeur de l'UFR SEG</p>
                                <hr>
                                <ul class="list-unstyled small mb-0 text-secondary">
                                    <li class="mb-2"><i class="bi bi-phone me-2 text-primary"></i><a class="text-reset text-decoration-none" href="tel:+2250103355803">(+225) 01 0335 5803</a></li>
                                    <li class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i><a class="text-reset text-decoration-none" href="mailto:salifkon@yahoo.fr">salifkon@yahoo.fr</a></li>
                                    <li><i class="bi bi-briefcase me-2 text-primary"></i>Commerce international, intégration régionale</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="row g-0 h-100">
                        <div class="col-sm-4 bg-light">
                            <img src="{{ asset('/assets/komenan.png') }}" class="w-100 h-100 object-fit-cover" alt="Dr. KOBENAN A. Narcisse">
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body p-4">
                                <span class="badge text-bg-primary mb-2">Maître Assistant</span>
                                <h3 class="h5 fw-bold mb-1">Dr. KOBENAN A. Narcisse</h3>
                                <p class="text-primary fw-semibold mb-3">Directeur adjoint chargé de la pédagogie</p>
                                <hr>
                                <ul class="list-unstyled small mb-0 text-secondary">
                                    <li class="mb-2"><i class="bi bi-phone me-2 text-primary"></i><a class="text-reset text-decoration-none" href="tel:+2250103355803">(+225) 01 0335 5803</a></li>
                                    <li class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i><a class="text-reset text-decoration-none" href="mailto:komenan.narcisse@ufhb.edu.ci">komenan.narcisse@ufhb.edu.ci</a></li>
                                    <li><i class="bi bi-briefcase me-2 text-primary"></i>Économie de l'environnement et des ressources naturelles</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <div class="row g-4 justify-content-center mt-1">
            <div class="col-lg-6">
                <article class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="row g-0 h-100">
                        <div class="col-sm-4 bg-light">
                            <img src="{{ asset('/assets/fofana-cesar.png') }}" class="w-100 h-100 object-fit-cover" alt="Dr. FOFANA Andon Cesar">
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body p-4">
                                <span class="badge text-bg-primary mb-2">Maître Assistant</span>
                                <h3 class="h5 fw-bold mb-1">Dr. FOFANA Andon Cesar</h3>
                                <p class="text-primary fw-semibold mb-3">Directeur adjoint chargé de la recherche</p>
                                <hr>
                                <ul class="list-unstyled small mb-0 text-secondary">
                                    <li class="mb-2"><i class="bi bi-phone me-2 text-primary"></i><a class="text-reset text-decoration-none" href="tel:+2250103355803">(+225) 01 0335 5803</a></li>
                                    <li class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i><a class="text-reset text-decoration-none" href="mailto:andon.fofana16@ufhb.edu.ci">andon.fofana16@ufhb.edu.ci</a></li>
                                    <li><i class="bi bi-briefcase me-2 text-primary"></i>Gestion / comptabilité</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="row g-0 h-100">
                        <div class="col-sm-4 bg-light">
                            <img src="{{ asset('/assets/profile-prof.jpeg') }}" class="w-100 h-100 object-fit-cover" alt="Dr. BROU BOSSON Marcellin">
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body p-4">
                                <span class="badge text-bg-primary mb-2">Maître de Conférences Agrégé</span>
                                <h3 class="h5 fw-bold mb-1">Dr. BROU BOSSON Marcellin</h3>
                                <p class="text-primary fw-semibold mb-3">Chef du Département des Sciences Économiques</p>
                                <hr>
                                <ul class="list-unstyled small mb-0 text-secondary">
                                    <li class="mb-2"><i class="bi bi-phone me-2 text-primary"></i><a class="text-reset text-decoration-none" href="tel:+2250103355803">(+225) 01 0335 5803</a></li>
                                    <li class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i><a class="text-reset text-decoration-none" href="mailto:exemple@domaine.tld">exemple@domaine.tdl</a></li>
                                    <li><i class="bi bi-briefcase me-2 text-primary"></i>Spécialité enseignée</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <div class="row g-4 justify-content-center mt-1">
            <div class="col-lg-6">
                <article class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="row g-0 h-100">
                        <div class="col-sm-4 bg-light">
                            <img src="{{ asset('/assets/profile-prof.jpeg') }}" class="w-100 h-100 object-fit-cover" alt="Dr. KONATE Fati">
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body p-4">
                                <span class="badge text-bg-primary mb-2">Maître de Conférences Agrégée</span>
                                <h3 class="h5 fw-bold mb-1">Dr. KONATE Fati</h3>
                                <p class="text-primary fw-semibold mb-3">Cheffe du Département des Sciences de Gestion</p>
                                <hr>
                                <ul class="list-unstyled small mb-0 text-secondary">
                                    <li class="mb-2"><i class="bi bi-phone me-2 text-primary"></i><a class="text-reset text-decoration-none" href="tel:+2250103355803">(+225) 01 0335 5803</a></li>
                                    <li class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i><a class="text-reset text-decoration-none" href="mailto:nom.prenom@example.tld">nom.prénom@example.tld</a></li>
                                    <li><i class="bi bi-briefcase me-2 text-primary"></i>Spécialité enseignée</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="card h-100 border-0 shadow-sm overflow-hidden">
                    <div class="row g-0 h-100">
                        <div class="col-sm-4 bg-light">
                            <img src="{{ asset('/assets/mtoure.png') }}" class="w-100 h-100 object-fit-cover" alt="Dr. TOURÉ Kany Abiba Nelly Carla">
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body p-4">
                                <span class="badge text-bg-primary mb-2">Maître Assistante</span>
                                <h3 class="h5 fw-bold mb-1">Dr. TOURÉ Kany Abiba Nelly Carla</h3>
                                <p class="text-primary fw-semibold mb-3">Responsable Service Communication UFRSEG</p>
                                <hr>
                                <ul class="list-unstyled small mb-0 text-secondary">
                                    <li class="mb-2"><i class="bi bi-phone me-2 text-primary"></i><a class="text-reset text-decoration-none" href="tel:+2250799904345">(+225) 07 9990 4345</a></li>
                                    <li class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i><a class="text-reset text-decoration-none" href="mailto:servicecommunication-ufrseg@ufhb.edu.ci">servicecommunication-ufrseg@ufhb.edu.ci</a></li>
                                    <li><i class="bi bi-briefcase me-2 text-primary"></i>Économie de l'environnement</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        {{-- <hr class="divider"> --}}

    </div>
</section>


@endsection
