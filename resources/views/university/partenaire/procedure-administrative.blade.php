@extends('layouts.university')

@section('title', 'Procédures administratives - Partenaire | UFR')

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

        .procedures-section {
            padding-top: 10px;
        }

        .procedure-card {
            position: relative;
            overflow: hidden;
            background: #fff;
            border: 1px solid #e8ece9;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 12px 35px rgba(43, 102, 53, 0.08);
        }

        .procedure-card:hover {
            border-color: #2b6635;
            transform: translateY(-5px);
            transition: 0.3s ease;
        }

        .procedure-number {
            position: absolute;
            top: -18px;
            right: 4px;
            font-size: 6rem;
            font-weight: 800;
            line-height: 1;
            color: rgba(43, 102, 53, 0.07);
        }

        .procedure-icon {
            width: 54px;
            height: 54px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            margin-bottom: 22px;
            color: #fff;
            background: #2b6635;
            font-size: 1.45rem;
        }

        .procedure-card h3 {
            font-size: 1.35rem;
            font-weight: 700;
            margin-bottom: 14px;
        }

        .procedure-card p {
            color: #6c757d;
            line-height: 1.7;
        }

        .procedure-list {
            padding-left: 0;
            margin: 22px 0 0;
            list-style: none;
        }

        .procedure-list li {
            position: relative;
            padding: 6px 0 6px 24px;
            color: #495057;
        }

        .procedure-list li::before {
            content: '\2713';
            position: absolute;
            left: 0;
            color: #2b6635;
            font-weight: bold;
        }

        .partner-contact {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding: 32px 36px;
            border-radius: 16px;
            color: #fff;
            background: linear-gradient(110deg, #2b6635, #4b8b55);
        }

        .partner-contact h3 {
            color: #fff;
            font-weight: 700;
        }

        @media (max-width: 767px) {
            .partner-contact {
                flex-direction: column;
                align-items: flex-start;
                padding: 28px;
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
                        Partenaire
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">Procédures administratives</h1>
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


<section class="procedures-section">
    <div class="container my-lg-8">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="text-success fw-semibold text-uppercase">Devenir partenaire</span>
                <h2 class="fw-bold mt-2">Les étapes de votre partenariat</h2>
                <p class="text-muted mt-3">
                    Suivez les étapes ci-dessous pour déposer votre candidature et finaliser votre partenariat avec l'UFR.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="procedure-card h-100">
                    <div class="procedure-number">1</div>
                    <div class="procedure-icon"><i class="bi bi-file-earmark-text"></i></div>
                    <h3>Dépôt du dossier</h3>
                    <p>Préparez votre dossier de candidature avec les pièces administratives, juridiques et financières requises.</p>
                    <ul class="procedure-list">
                        <li>Lettre de demande de partenariat</li>
                        <li>Pièces du représentant légal</li>
                        <li>Statuts et documents d'enregistrement</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="procedure-card h-100">
                    <div class="procedure-number">2</div>
                    <div class="procedure-icon"><i class="bi bi-search"></i></div>
                    <h3>Étude du dossier</h3>
                    <p>Nos services examinent votre dossier afin de vérifier sa conformité et son adéquation avec nos activités.</p>
                    <ul class="procedure-list">
                        <li>Analyse des pièces transmises</li>
                        <li>Évaluation du projet proposé</li>
                        <li>Demande éventuelle de compléments</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="procedure-card h-100">
                    <div class="procedure-number">3</div>
                    <div class="procedure-icon"><i class="bi bi-patch-check"></i></div>
                    <h3>Validation et convention</h3>
                    <p>Après validation, les parties finalisent les modalités du partenariat et signent la convention officielle.</p>
                    <ul class="procedure-list">
                        <li>Notification de l'avis favorable</li>
                        <li>Préparation de la convention</li>
                        <li>Signature du partenariat</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="partner-contact mt-5">
            <div>
                <span class="text-uppercase fw-semibold">Besoin d'accompagnement ?</span>
                <h3 class="mt-2 mb-2">Notre équipe vous guide dans votre démarche</h3>
                <p class="mb-0">Contactez-nous pour obtenir la liste complète des pièces à fournir.</p>
            </div>
            <a href="#{{-- route('contact') --}}" class="btn btn-light text-nowrap">Nous contacter <i class="bi bi-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>
@endsection



@push('scripts')
    <script>
        // Script pour les animations ou interactions si nécessaire
    </script>
@endpush