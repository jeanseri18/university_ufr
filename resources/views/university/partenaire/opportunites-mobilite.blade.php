@extends('layouts.university')

@section('title', 'Opportunités et Mobilité - Partenaire | UFR')

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
            color:white;
            background: linear-gradient(to right, #2B6635, #2B6635);
            height: 26em;
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
                        Partenaire
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">Opportunités et Mobilité</h1>
                    <p class="pe-lg-10 mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis 
                        sapiente laborum ratione voluptates officiis, optio laboriosam iste maxime quis enim, doloribus molestiae! Explicabo dolores eaque dolorum repudiandae laboriosam voluptatum dignissimos.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <!-- Image ou autre contenu -->
            </div>
        </div>
    </div>
</section>


<section class="">
    <div class="container my-lg-8">
        <div class="mb-4 text-center">
            <h2 class="fw-bold">Opportunités proposées par nos partenaires</h2>
            <p class="text-muted mb-0">Découvrez les offres destinées aux étudiants de l'UFR.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <article class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <span class="badge bg-success mb-3">Stage</span>
                        <h3 class="h5">Assistant(e) marketing digital</h3>
                        <p class="small text-muted mb-3"><i class="bi bi-building me-2"></i>Entreprise partenaire</p>
                        <p class="text-muted">Participer à la gestion des campagnes digitales, à la création de contenus et au suivi des performances.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>Abidjan</li>
                            <li><i class="bi bi-clock me-2"></i>Stage de 3 à 6 mois</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success w-100">Voir l'offre</a>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-4">
                <article class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <span class="badge bg-primary mb-3">Emploi</span>
                        <h3 class="h5">Chargé(e) de données</h3>
                        <p class="small text-muted mb-3"><i class="bi bi-building me-2"></i>Organisation partenaire</p>
                        <p class="text-muted">Collecter, analyser et présenter des données pour accompagner la prise de décision des équipes.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>Abidjan et région</li>
                            <li><i class="bi bi-clock me-2"></i>Temps plein</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success w-100">Voir l'offre</a>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-4">
                <article class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <span class="badge bg-warning text-dark mb-3">Mobilité</span>
                        <h3 class="h5">Programme d'échange universitaire</h3>
                        <p class="small text-muted mb-3"><i class="bi bi-mortarboard me-2"></i>Université partenaire</p>
                        <p class="text-muted">Suivre une période académique à l'étranger et bénéficier d'un accompagnement pour la mobilité.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="bi bi-globe me-2"></i>Afrique / Europe</li>
                            <li><i class="bi bi-calendar me-2"></i>Prochain semestre</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success w-100">Découvrir le programme</a>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-4">
                <article class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <span class="badge bg-info text-dark mb-3">Alternance</span>
                        <h3 class="h5">Développeur(euse) web junior</h3>
                        <p class="small text-muted mb-3"><i class="bi bi-building me-2"></i>Entreprise partenaire</p>
                        <p class="text-muted">Contribuer au développement d'applications web au sein d'une équipe technique expérimentée.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>Abidjan</li>
                            <li><i class="bi bi-clock me-2"></i>12 mois</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success w-100">Voir l'offre</a>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-4">
                <article class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <span class="badge bg-danger mb-3">Bourse</span>
                        <h3 class="h5">Bourse de recherche étudiante</h3>
                        <p class="small text-muted mb-3"><i class="bi bi-bank me-2"></i>Fondation partenaire</p>
                        <p class="text-muted">Financer un mémoire ou un projet de recherche portant sur les enjeux économiques locaux.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="bi bi-cash-stack me-2"></i>Financement disponible</li>
                            <li><i class="bi bi-calendar me-2"></i>Session annuelle</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success w-100">Consulter la bourse</a>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-4">
                <article class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <span class="badge bg-secondary mb-3">Volontariat</span>
                        <h3 class="h5">Mission communautaire</h3>
                        <p class="small text-muted mb-3"><i class="bi bi-heart me-2"></i>Association partenaire</p>
                        <p class="text-muted">S'engager dans une mission d'intérêt général et renforcer ses compétences professionnelles.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>Communautés locales</li>
                            <li><i class="bi bi-clock me-2"></i>Mission flexible</li>
                        </ul>
                        <a href="#" class="btn btn-outline-success w-100">Voir la mission</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>


@endsection


@push('scripts')
<script>
  
</script>
@endpush