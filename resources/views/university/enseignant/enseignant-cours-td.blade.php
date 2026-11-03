@extends('layouts.university')

@section('title', 'Mobilités | UFR')

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



        .course-card {
            width: 350px; /* Largeur fixe de la carte */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Important pour les bords arrondis */
        }

        /* Section supérieure */
        .card-header {
            position: relative; /* Base de référence pour le positionnement absolu */
            width: 100%;
        }

        .card-header img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Titre sur l'image */
        .title-overlay {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%) translateY(50%); /* Pour centrer horizontalement et décaler vers le bas */
            background-color: #fff;
            padding: 15px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .title-overlay h2 {
            margin: 0;
            font-size: 1.2rem;
            font-weight: bold;
            white-space: nowrap; /* Empêche le titre de se couper */
        }

        /* Section inférieure */
        .card-footer {
            background-color: #386641; /* La couleur verte de l'exemple */
            color: white;
            padding: 35px 20px 20px; /* Le padding en haut est plus grand pour compenser le décalage du titre */
            display: flex;
            justify-content: space-around;
            text-align: center;
            align-items: center;
        }

        .info-item .icon {
            font-size: 2rem;
            display: block;
            margin-bottom: 5px;
        }

        .info-item .label {
            margin: 0;
            font-size: 0.8rem;
        }

        .info-item .value {
            margin: 0;
            font-size: 0.9rem;
            font-weight: bold;
        }

    </style>

    <style>
        .course-programs .course-intro { max-width: 620px; }
        .course-programs .course-card { width: 100%; max-width: 390px; margin: 0 auto; border-radius: 18px; box-shadow: 0 12px 30px rgba(34, 60, 43, .12); transition: transform .25s ease, box-shadow .25s ease; }
        .course-programs .course-card:hover { transform: translateY(-6px); box-shadow: 0 18px 38px rgba(34, 60, 43, .18); }
        .course-programs .card-header { height: 220px; border: 0; border-radius: 18px 18px 0 0; }
        .course-programs .card-header img { height: 220px; object-fit: cover; }
        .course-programs .title-overlay { bottom: -24px; width: auto; max-width: calc(100% - 32px); padding: 12px 20px; border-radius: 12px; text-align: center; }
        .course-programs .title-overlay h2 { white-space: normal; }
        .course-programs .card-footer { min-height: 135px; margin-top: 24px; padding: 38px 12px 18px; gap: 8px; border-radius: 0 0 18px 18px; }
        .course-programs .info-item { flex: 1; min-width: 0; }
        .course-programs .info-item .icon { height: 38px; font-size: 1.5rem; }
        .course-programs .info-item .label { color: rgba(255,255,255,.78); }
        @media (max-width: 575px) {
            .course-programs .card-header, .course-programs .card-header img { height: 200px; }
            .course-programs .card-footer { padding-inline: 8px; }
            .course-programs .title-overlay h2 { font-size: 1rem; }
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
                    <h1 class="display-3 fw-bold mb-3 text-white">COURS / TD</h1>
                    <p class="pe-lg-10 mb-5">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos 
                        doloremque nisi ad dolores illum eum voluptas unde quia ea placeat mollitia 
                        voluptate veniam accusantium, provident dolor! A earum asperiores consequuntur!
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <!-- Image ou autre contenu -->
            </div>
        </div>
    </div>
</section>




<section class="py-5 ">
    <div class="container">

        <div class="course-programs">
            <div class="text-center mb-5">
                <span class="text-uppercase fw-semibold text-success small">Offre académique</span>
                <h2 class="fw-bold mt-2 mb-3">Nos formations</h2>
                <p class="text-muted mx-auto course-intro">Découvrez nos parcours de Licence et de Master en économie et gestion.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4">
                    <article class="course-card h-100">
                        <div class="card-header">
                            <img src="{{ asset('/assets/licence-economie.jpg') }}" alt="Licence en Économie">
                            <div class="title-overlay"><h2>Licence en Économie</h2></div>
                        </div>
                        <div class="card-footer">
                            <div class="info-item"><span class="icon"><i class="bi bi-calendar3"></i></span><p class="label">Début</p><p class="value">Déc. 2025</p></div>
                            <div class="info-item"><span class="icon"><i class="bi bi-clock"></i></span><p class="label">Durée</p><p class="value">3 ans</p></div>
                            <div class="info-item"><span class="icon"><i class="bi bi-mortarboard-fill"></i></span><p class="label">Diplôme</p><p class="value">Bac +3</p></div>
                        </div>
                    </article>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4">
                    <article class="course-card h-100">
                        <div class="card-header">
                            <img src="{{ asset('/assets/licence-gestion.jpg') }}" alt="Licence en Gestion">
                            <div class="title-overlay"><h2>Licence en Gestion</h2></div>
                        </div>
                        <div class="card-footer">
                            <div class="info-item"><span class="icon"><i class="bi bi-calendar3"></i></span><p class="label">Début</p><p class="value">Déc. 2025</p></div>
                            <div class="info-item"><span class="icon"><i class="bi bi-clock"></i></span><p class="label">Durée</p><p class="value">3 ans</p></div>
                            <div class="info-item"><span class="icon"><i class="bi bi-mortarboard-fill"></i></span><p class="label">Diplôme</p><p class="value">Bac +3</p></div>
                        </div>
                    </article>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4">
                    <article class="course-card h-100">
                        <div class="card-header">
                            <img src="{{ asset('/assets/master-economie.jpg') }}" alt="Master en Économie">
                            <div class="title-overlay"><h2>Master en Économie</h2></div>
                        </div>
                        <div class="card-footer">
                            <div class="info-item"><span class="icon"><i class="bi bi-calendar3"></i></span><p class="label">Début</p><p class="value">Déc. 2025</p></div>
                            <div class="info-item"><span class="icon"><i class="bi bi-clock"></i></span><p class="label">Durée</p><p class="value">2 ans</p></div>
                            <div class="info-item"><span class="icon"><i class="bi bi-mortarboard-fill"></i></span><p class="label">Diplôme</p><p class="value">Bac +5</p></div>
                        </div>
                    </article>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-5 col-xl-4">
                    <article class="course-card h-100">
                        <div class="card-header">
                            <img src="{{ asset('/assets/master-gestion.jpg') }}" alt="Master en Gestion">
                            <div class="title-overlay"><h2>Master en Gestion</h2></div>
                        </div>
                        <div class="card-footer">
                            <div class="info-item"><span class="icon"><i class="bi bi-calendar3"></i></span><p class="label">Début</p><p class="value">Déc. 2025</p></div>
                            <div class="info-item"><span class="icon"><i class="bi bi-clock"></i></span><p class="label">Durée</p><p class="value">2 ans</p></div>
                            <div class="info-item"><span class="icon"><i class="bi bi-mortarboard-fill"></i></span><p class="label">Diplôme</p><p class="value">Bac +5</p></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

    </div>
</section>


@endsection
