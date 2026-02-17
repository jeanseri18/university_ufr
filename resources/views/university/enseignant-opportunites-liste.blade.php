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
            <p class="lead">Cette rubrique relaie les offres de consultance, les offres de formation ou encore les offres de renforcement des capacités qui sont disponibles. Elle relaie également.</p>
        </div>

        <div class="my-5 mt-8">
            <div class="card-custom" style="margin-top: 80px;">
                <div class="card-icon">
                    <!-- Icône microscope -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="green" class="bi bi-binoculars" viewBox="0 0 16 16">
                        <path d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5z"/>
                    </svg>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"  class="bi bi-mortarboard-fill" viewBox="0 0 16 16" fill="#386641">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
                    </svg> --}}
                </div>
                <div class="card-body">
                    <h3 class="card-title">Développement Accadémique et Recherche</h3>
                    <p class="card-text">
                        En enseignant dans notre université, vous pourrez participer à des projets de recherche nationaux et internationaux, accéder à des financements comme des subventions et bourses, publier vos travaux et intervenir dans des colloques et séminaires. Vous contribuerez aussi à la formation des étudiants en encadrant leurs mémoires, masters et thèses.
                    </p>
                </div>
            </div>

            <div class="card-custom" style="margin-top: 80px;">
                <div class="card-icon">
                      <!-- Icône SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="green" class="bi bi-cash-coin" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                    </svg>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" class="bi bi-suitcase-lg-fill" viewBox="0 0 16 16" fill="#386641">
                        <path d="M7 0a2 2 0 0 0-2 2H1.5A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14H2a.5.5 0 0 0 1 0h10a.5.5 0 0 0 1 0h.5a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2H11a2 2 0 0 0-2-2zM6 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zM3 13V3h1v10zm9 0V3h1v10z"/>
                    </svg> --}}
                </div>
                <div class="card-body">
                    <h3 class="card-title">Progression de carrière universitaire</h3>
                    <p class="card-text">
                        Vous aurez la possibilité d’évoluer vers des grades supérieurs tels que Maître de conférences ou Professeur titulaire. Vous pourrez également occuper des fonctions administratives comme chef de département, directeur de laboratoire ou responsable de formation, tout en développant un solide réseau professionnel académique et institutionnel.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>


@endsection
