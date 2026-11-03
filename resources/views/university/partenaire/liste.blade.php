@extends('layouts.university')

@section('title', 'Nos partenaires - Partenaire | UFR')

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

        .partners-section-title {
            max-width: 720px;
            margin: 0 auto;
        }

        .partner-card {
            background: #fff;
            border: 1px solid rgba(43, 102, 53, .1);
            border-radius: 18px;
            box-shadow: 0 12px 35px rgba(32, 68, 39, .08);
            height: 100%;
            overflow: hidden;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .partner-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 42px rgba(32, 68, 39, .14);
        }

        .partner-logo {
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f4f8f4, #e8f2e9);
        }

        .partner-logo span {
            width: 76px;
            height: 76px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #2B6635;
            color: #fff;
            font-size: 1.75rem;
            font-weight: 700;
            box-shadow: 0 8px 20px rgba(43, 102, 53, .25);
        }

        .partner-card-body {
            padding: 24px;
        }

        .partner-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .partner-card p {
            color: #6c757d;
            line-height: 1.65;
            margin-bottom: 0;
        }

        .partner-type {
            display: inline-block;
            color: #2B6635;
            background: #edf5ee;
            border-radius: 999px;
            font-size: .75rem;
            font-weight: 700;
            padding: 6px 12px;
            margin-bottom: 14px;
            text-transform: uppercase;
            letter-spacing: .04em;
        }

        .partner-logos-section {
            border-top: 1px solid rgba(43, 102, 53, .12);
            padding-top: 48px;
        }

        .partner-logo-item {
            min-height: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 20px 12px;
            background: #fff;
            border: 1px solid rgba(43, 102, 53, .1);
            border-radius: 16px;
            text-align: center;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .partner-logo-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(32, 68, 39, .1);
        }

        .partner-logo-item strong {
            color: #2B6635;
            font-size: 1.65rem;
        }

        .partner-logo-item span {
            color: #6c757d;
            font-size: .85rem;
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


<section class="partenaire-section">
    <div class="container my-lg-8">

        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center partners-section-title">
                <span class="text-success fw-semibold text-uppercase">Nos partenaires</span>
                <h2 class="fw-bold mt-2">Ils nous accompagnent</h2>
                <p class="text-muted mt-3">
                    Découvrez les institutions, entreprises et organisations qui contribuent à la réussite de nos projets universitaires.
                </p>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-4">
                <article class="partner-card">
                    <div class="partner-logo"><span>AU</span></div>
                    <div class="partner-card-body">
                        <span class="partner-type">Institution académique</span>
                        <h3>Agence universitaire de la Francophonie</h3>
                        <p>Coopération universitaire et développement des programmes d'échange entre institutions francophones.</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="partner-card">
                    <div class="partner-logo"><span>UE</span></div>
                    <div class="partner-card-body">
                        <span class="partner-type">Partenaire international</span>
                        <h3>Union européenne</h3>
                        <p>Soutien aux projets de mobilité, de recherche et d'innovation au sein de l'espace universitaire.</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="partner-card">
                    <div class="partner-logo"><span>CO</span></div>
                    <div class="partner-card-body">
                        <span class="partner-type">Entreprise</span>
                        <h3>Entreprises du territoire</h3>
                        <p>Partenariats pour les stages, l'insertion professionnelle, la formation et l'entrepreneuriat.</p>
                    </div>
                </article>
            </div>
        </div>

        <div class="partner-logos-section">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Ils nous font confiance</h2>
                <p class="text-muted mb-0">Retrouvez ci-dessous les organisations qui nous accompagnent.</p>
            </div>

            <div class="row g-4 row-cols-2 row-cols-md-3 row-cols-lg-5">
                <div class="col">
                    <div class="partner-logo-item">
                        <strong>AUF</strong>
                        <span>Agence universitaire de la Francophonie</span>
                    </div>
                </div>
                <div class="col">
                    <div class="partner-logo-item">
                        <strong>UE</strong>
                        <span>Union européenne</span>
                    </div>
                </div>
                <div class="col">
                    <div class="partner-logo-item">
                        <strong>UFR</strong>
                        <span>Université partenaire</span>
                    </div>
                </div>
                <div class="col">
                    <div class="partner-logo-item">
                        <strong>RSE</strong>
                        <span>Organisations professionnelles</span>
                    </div>
                </div>
                <div class="col">
                    <div class="partner-logo-item">
                        <strong>CO</strong>
                        <span>Entreprises du territoire</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



@push('scripts')
    <script>
        // Script pour les animations ou interactions si nécessaire
    </script>
@endpush