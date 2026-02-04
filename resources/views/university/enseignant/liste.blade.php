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


<section class="my-5 py-0 ">
    <div class="container">
        <div class="banner mb-4">
            <h1 class="display-4 banner-title">Liste des enseignants <br></h1>
            {{-- <p class="lead">Bienvenue dans notre rubrique "Parlons Eco", où nous abordons des thématiques liées à l'Économie.</p> --}}
        </div>


        <div class="row mt-6 mb-5 justify-content-center">
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/assets/profile-prof.jpeg') }}" height="236px" width="auto" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="" style="padding-left: 40px">
                                    <h3 class="card-title">Nom & Prénom</h3>
                                    <h5 class="card-title">Professeur titulaire</h5>
                                    <hr class="">
                                    <p class="card-text"> 
                                        <i class="bi bi-phone"></i> (+225) 01 0101 0101 <br>
                                        <i class="bi bi-envelope"></i> prenom.nom@domaine.tld <br>
                                        <i class="bi bi-geo-alt"></i> Université de cocody <br>
                                        <i class="bi bi-briefcase"></i> Economie, Gestion, Finance
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/assets/profile-prof.jpeg') }}" height="236px" width="auto" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-content" style="padding-left: 40px">
                                    <h3 class="card-title">Nom & Prénom</h3>
                                    <h5 class="card-title">Professeur titulaire</h5>
                                    <hr class="">
                                    <p class="card-text"> 
                                        <i class="bi bi-phone"></i> (+225) 01 0101 0101 <br>
                                        <i class="bi bi-envelope"></i> prenom.nom@domaine.tld <br>
                                        <i class="bi bi-geo-alt"></i> Université de cocody <br>
                                        <i class="bi bi-briefcase"></i> Economie, Gestion, Finance
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="profile-card">
            <div class="left-section">
                <div class="profile-photo">
                    <img src="{{ asset('/assets/profile-prof.jpeg') }}" alt="Photo de profil de Sangaré Ousmane">
                </div>
                <div class="contact-info">
                    <h2 class="name">Sangaré Ousmane</h2>
                    <p class="title">Professeur</p>
                    <div class="contact-item">
                        <span class="icon"><i class=""></i></span>
                        <span class="info">sangareousmane@ufr.ci</span>
                    </div>
                    <div class="contact-item">
                        <span class="icon">📞</span>
                        <span class="info">0101010101</span>
                    </div>
                    <div class="contact-item">
                        <span class="icon">📍</span>
                        <span class="info">Université de cocody</span>
                    </div>
                </div>
            </div>

            <div class="right-section">
                <p class="bio-text">
                    Je suis professeur à l'UFR des Sciences Économiques et de Gestion. J'enseigne et mène des recherches dans les domaines de l'économie de l'environnement et du commerce international. La majeure partie de mes travaux porte sur l’interaction entre la mondialisation, l’environnement et la durabilité.
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
            </div>
        </div> --}}

        {{-- <hr class="divider"> --}}

    </div>
</section>


@endsection
