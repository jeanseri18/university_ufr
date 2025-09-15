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
    
@endpush

@section('content')


<section class="my-5 py-5 ">
    <div class="container">
        <div class="banner mb-4">
            <h1 class="display-4 banner-title">Cours et formations offerts par l’UFR <br></h1>
            {{-- <p class="lead">Bienvenue dans notre rubrique "Parlons Eco", où nous abordons des thématiques liées à l'Économie.</p> --}}
        </div>

        <div class="container">
            <di class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="course-card">
                        <div class="card-header">
                            <img src="{{ asset('/assets/licence-economie.jpg') }}" style="height: 202px" alt="Description de l'image">
                            <div class="title-overlay">
                                <h2>Licence en Economie</h2>
                            </div>
                        </div>
                        
                        <div class="card-footer">
                            <div class="info-item">
                                <span class="icon"><i class="bi bi-calendar-date"></i></span> 
                                <p class="label">Date de début</p>
                                <p class="value">Décembre 2025</p>
                            </div>
                            <div class="info-item">
                                <span class="icon"><i class="bi bi-alarm"></i></span>
                                <p class="label">Duée</p>
                                <p class="value">3 ans</p>
                            </div>
                            <div class="info-item">
                                <span class="icon"><i class="bi bi-mortarboard"></i></span>
                                <p class="label">Diplôme</p>
                                <p class="value">Bac +3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-card">
                        <div class="card-header">
                            <img src="{{ asset('/assets/licence-gestion.jpg') }}" style="height: 202px" alt="Description de l'image">
                            <div class="title-overlay">
                                <h2>Licence en Gestion</h2>
                            </div>
                        </div>
                        
                        <div class="card-footer">
                            <div class="info-item">
                                <span class="icon"><i class="bi bi-calendar-date"></i></span> 
                                <p class="label">Date de début</p>
                                <p class="value">Décembre 2025</p>
                            </div>
                            <div class="info-item">
                                <span class="icon"><i class="bi bi-alarm"></i></span>
                                <p class="label">Duée</p>
                                <p class="value">3 ans</p>
                            </div>
                            <div class="info-item">
                                <span class="icon"><i class="bi bi-mortarboard"></i></span>
                                <p class="label">Diplôme</p>
                                <p class="value">Bac +3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </di>

            <di class="row" style="margin-top: 40px">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="course-card">
                        <div class="card-header">
                            <img src="{{ asset('/assets/master-economie.jpg') }}" style="height: 202px" alt="Description de l'image">
                            <div class="title-overlay">
                                <h2>Master en Economie</h2>
                            </div>
                        </div>
                        
                        <div class="card-footer">
                            <div class="info-item">
                                <span class="icon"><i class="bi bi-calendar-date"></i></span> 
                                <p class="label">Date de début</p>
                                <p class="value">Décembre 2025</p>
                            </div>
                            <div class="info-item">
                                <span class="icon"><i class="bi bi-alarm"></i></span>
                                <p class="label">Duée</p>
                                <p class="value">2 ans</p>
                            </div>
                            <div class="info-item">
                                <span class="icon"><i class="bi bi-mortarboard"></i></span>
                                <p class="label">Diplôme</p>
                                <p class="value">Bac +5</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-card">
                        <div class="card-header">
                            <img src="{{ asset('/assets/master-gestion.jpg') }}" style="height: 202px" alt="Description de l'image">
                            <div class="title-overlay">
                                <h2>Master en Gestion</h2>
                            </div>
                        </div>
                        
                        <div class="card-footer">
                            <div class="info-item">
                                <span class="icon"><i class="bi bi-calendar-date"></i></span> 
                                <p class="label">Date de début</p>
                                <p class="value">Décembre 2025</p>
                            </div>
                            <div class="info-item">
                                <span class="icon"><i class="bi bi-alarm"></i></span>
                                <p class="label">Duée</p>
                                <p class="value">2 ans</p>
                            </div>
                            <div class="info-item">
                                <span class="icon"><i class="bi bi-mortarboard"></i></span>
                                <p class="label">Diplôme</p>
                                <p class="value">Bac +5</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </di>
        </div>


    </div>
</section>


@endsection
