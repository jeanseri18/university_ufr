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
                        Etudiant
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">MOBILITÉS</h1>
                    <p class="pe-lg-10 mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus 
                        culpa a explicabo ea repellat aspernatur atque porro alias odit ex 
                        recusandae ut commodi sapiente repudiandae corporis aliquid doloribus, 
                        quasi deserunt?
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <!-- Image ou autre contenu -->
            </div>
        </div>
    </div>
</section>



<section class="my-5 py-5 ">
    <div class="container">
        {{-- <div class="banner mb-4">
            <h1 class="display-4 banner-title">Mobilités <br></h1>
            <p class="lead">Bienvenue dans notre rubrique "Parlons Eco", où nous abordons des thématiques liées à l'Économie.</p>
        </div> --}}


        <div class="main-container">

            <div class="section-block standard-layout">
                <div class="image-container">
                    <img src="{{ asset('/assets/etudiant-afro.jpg') }}" alt="Description de l'image 1">
                </div>
                <div class="content-container">
                    <h2 class="section-title">Nos apprenants au concours de robotique international</h2>
                    <p class="section-text">
                        Chaque année, nos apprenants les plus méritants ont l’opportunité de participer à des programmes de mobilité académique, à la fois sur le plan national et international.
                        Grâce à nos partenariats avec des institutions de renommée, ils peuvent vivre des expériences enrichissantes dans des pays tels que le Sénégal, la Guinée, la France ou encore le Canada.
                        Ces séjours favorisent l'ouverture d’esprit, l’adaptabilité, et permettent aux étudiants de développer des compétences interculturelles précieuses pour leur avenir professionnel.
                    </p>
                </div>
            </div>

            <div class="section-block reversed-layout">
                <div class="image-container">
                    <img src="/assets/etudiant-afro.jpg" alt="Description de l'image 2">
                </div>
                <div class="content-container">
                    <h2 class="section-title green-title">La lauréate nationale en économie vient de notre prestigieuse université.</h2>
                    <p class="section-text">
                        Konan Grace Gniré, brillante étudiante de 23 ans, a honoré notre université lors du concours national d’économie. Elle s’est classée première au niveau national.
                        Félicitations à Grace pour cette performance exceptionnelle !
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>


@endsection
