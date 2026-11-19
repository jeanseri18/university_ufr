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
        .research-section { background: #f6f8f6; }
        .research-heading { color: #243728; }
        .research-heading small { color: #5f7c65; letter-spacing: .12em; }
        .research-card { border: 0; border-radius: 1.25rem; overflow: hidden; background: #fff; box-shadow: 0 12px 35px rgba(36,55,40,.08); transition: transform .25s ease, box-shadow .25s ease; }
        .research-card:hover { transform: translateY(-6px); box-shadow: 0 20px 45px rgba(36,55,40,.14); }
        .research-card-cover { height: 175px; display: flex; align-items: flex-end; padding: 1.25rem; position: relative; overflow: hidden; }
        .research-card-cover::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, rgba(20,45,27,.04), rgba(20,45,27,.72)); }
        .research-card-cover i { position: absolute; right: 1.25rem; top: 1.25rem; z-index: 1; font-size: 2.25rem; color: rgba(255,255,255,.9); }
        .research-cover-green { background: linear-gradient(135deg, #84b78a, #2f7040); }
        .research-cover-blue { background: linear-gradient(135deg, #76aeb1, #2d6570); }
        .research-cover-gold { background: linear-gradient(135deg, #d9b86c, #9a7434); }
        .research-cover-red { background: linear-gradient(135deg, #b98a82, #7d4941); }
        .research-domain { position: relative; z-index: 1; color: #fff; font-size: .75rem; text-transform: uppercase; letter-spacing: .12em; font-weight: 700; }
        .research-card .card-body { padding: 1.6rem; }
        .research-card h3 { color: #243728; font-size: 1.25rem; }
        .research-card p { color: #6c757d; line-height: 1.65; }
        .research-meta { display: flex; align-items: center; gap: .5rem; color: #6f8171; font-size: .875rem; }
        .research-link { color: #386641; font-weight: 700; text-decoration: none; }
        .research-link:hover { color: #244a2d; }
        .research-link i { transition: transform .2s ease; }
        .research-link:hover i { transform: translateX(4px); }
        .research-stat { border-right: 1px solid #dde4de; }
        .research-stat:last-child { border-right: 0; }
        .research-stat strong { display: block; color: #386641; font-size: 2rem; }
        @media (max-width: 767.98px) { .research-stat { border-right: 0; border-bottom: 1px solid #dde4de; padding: 1rem; } .research-stat:last-child { border-bottom: 0; } }
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

<section class="research-section py-lg-8 py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <div class="research-heading">
                    <small class="fw-bold d-block mb-2">EXCELLENCE &amp; INNOVATION</small>
                    <h2 class="display-5 fw-bold mb-3">Nos projets de recherche</h2>
                    <p class="fs-5 text-secondary mb-0">
                        Des équipes pluridisciplinaires travaillent sur des enjeux scientifiques majeurs au service du savoir, des territoires et des sociétés.
                    </p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-xl-3">
                <article class="card research-card h-100">
                    <div class="research-card-cover research-cover-green">
                        <i class="bi bi-leaf"></i>
                        <span class="research-domain">Environnement</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="fw-bold mb-3">Transition écologique locale</h3>
                        <p>Étudier les solutions durables adaptées aux défis environnementaux des collectivités et des territoires.</p>
                        <div class="research-meta mt-auto pt-3 mb-3"><i class="bi bi-people-fill"></i><span>8 chercheurs</span></div>
                        <a href="#" class="research-link">Découvrir le projet <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-xl-3">
                <article class="card research-card h-100">
                    <div class="research-card-cover research-cover-blue">
                        <i class="bi bi-cpu"></i>
                        <span class="research-domain">Numérique</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="fw-bold mb-3">Intelligence des données</h3>
                        <p>Concevoir des outils d'analyse responsable pour éclairer la décision publique et les usages numériques.</p>
                        <div class="research-meta mt-auto pt-3 mb-3"><i class="bi bi-people-fill"></i><span>12 chercheurs</span></div>
                        <a href="#" class="research-link">Découvrir le projet <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-xl-3">
                <article class="card research-card h-100">
                    <div class="research-card-cover research-cover-gold">
                        <i class="bi bi-mortarboard"></i>
                        <span class="research-domain">Éducation</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="fw-bold mb-3">École &amp; transformations</h3>
                        <p>Analyser les nouveaux parcours d'apprentissage et accompagner l'évolution des pratiques pédagogiques.</p>
                        <div class="research-meta mt-auto pt-3 mb-3"><i class="bi bi-people-fill"></i><span>6 chercheurs</span></div>
                        <a href="#" class="research-link">Découvrir le projet <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-xl-3">
                <article class="card research-card h-100">
                    <div class="research-card-cover research-cover-red">
                        <i class="bi bi-heart-pulse"></i>
                        <span class="research-domain">Santé publique</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="fw-bold mb-3">Territoires en santé</h3>
                        <p>Évaluer les facteurs d'accès aux soins pour renforcer les politiques de santé sur nos territoires.</p>
                        <div class="research-meta mt-auto pt-3 mb-3"><i class="bi bi-people-fill"></i><span>10 chercheurs</span></div>
                        <a href="#" class="research-link">Découvrir le projet <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </article>
            </div>
        </div>

        <div class="row bg-white rounded-4 shadow-sm py-4 mt-5 mx-0 text-center">
            <div class="col-md-4 research-stat"><strong>24</strong><span class="text-secondary">Projets actifs</span></div>
            <div class="col-md-4 research-stat"><strong>36</strong><span class="text-secondary">Chercheurs impliqués</span></div>
            <div class="col-md-4 research-stat"><strong>11</strong><span class="text-secondary">Partenaires institutionnels</span></div>
        </div>
    </div>
</section>

@endsection