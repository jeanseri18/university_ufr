@extends('layouts.university')

@section('title', 'Opportunités | UFR')

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

        /* Style de la carte générale */
        .card-custom {
            background-color: #f8f9fa; /* Une couleur de fond très claire, presque blanche */
            border: 1px solid #e9ecef; /* Une bordure très fine et claire */
            border-radius: 1rem; /* Bords arrondis pour un look doux */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Une ombre légère pour donner de la profondeur */
            text-align: center; /* Pour centrer le contenu comme sur la maquette */
            padding: 30px 20px; /* Espace à l'intérieur de la carte */
            max-width: 450px; /* Limiter la largeur de la carte */
            margin: 20px auto; /* Centrer la carte sur la page et ajouter de l'espace entre elles */
        }

        /* Style de l'icône */
        .card-icon {
            margin-bottom: 20px; /* Espace en dessous de l'icône */
            /* Les styles de couleur et de taille sont déjà dans le SVG ci-dessus */
        }

        /* Style du titre */
        .card-title {
            color: #386641; /* La même couleur que l'icône pour l'harmonie */
            font-weight: 700; /* Pour que le titre soit en gras comme sur la maquette */
            margin-bottom: 1rem; /* Espace sous le titre */
        }

        /* Style du texte du paragraphe */
        .card-text {
            color: #495057; /* Un gris foncé pour le texte */
            line-height: 1.6; /* Améliore la lisibilité */
            font-weight: 400; /* Poids de la police pour le texte normal */
        }
    </style>
    
@endpush

@section('content')


<section class="my-5 py-5 ">
    <div class="container">
        <div class="banner mb-4">
            <h1 class="display-4 banner-title">Opportunités <br></h1>
            {{-- <p class="lead">Bienvenue dans notre rubrique "Parlons Eco", où nous abordons des thématiques liées à l'Économie.</p> --}}
        </div>


        <div class="my-5 mt-8">
            <div class="card-custom" style="margin-top: 80px;">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"  class="bi bi-mortarboard-fill" viewBox="0 0 16 16" fill="#386641">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
                    </svg>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Opportunités d'études à l'étranger</h3>
                    <p class="card-text">
                        Grâce à nos partenariats avec les plus grandes universités à travers le monde, nous offrons à nos étudiants de réelles opportunités internationales. Nous collaborons avec plusieurs établissements en Europe (France, Allemagne, Royaume-Uni) et en Amérique (États-Unis, Canada, Mexique). En fin de parcours, nous accompagnons nos apprenants qui souhaitent poursuivre leurs études hors du continent.
                    </p>
                </div>
            </div>

            <div class="card-custom" style="margin-top: 80px;">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" class="bi bi-suitcase-lg-fill" viewBox="0 0 16 16" fill="#386641">
                        <path d="M7 0a2 2 0 0 0-2 2H1.5A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14H2a.5.5 0 0 0 1 0h10a.5.5 0 0 0 1 0h.5a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2H11a2 2 0 0 0-2-2zM6 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zM3 13V3h1v10zm9 0V3h1v10z"/>
                    </svg>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Opportunités travailler après les études</h3>
                    <p class="card-text">
                        Dans l’optique d’accompagner nos apprenants après leur cursus universitaire, nous avons signé plusieurs partenariats avec des entreprises en pleine expansion, à la recherche de talents pour soutenir leur croissance.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>


@endsection
