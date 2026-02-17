@extends('layouts.university')

@section('title', 'Vie sociale - Partenaire | UFR')

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
                    <h1 class="display-3 fw-bold mb-3 text-white">Vie sociale</h1>
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



<section class="my-5 py-5">
    <div class="container">
        <div class="row gy-4">
            @foreach ($medias as $media)
                <div class="col-lg-4 col-md-4 col-12">
                    <a href="{{ asset('storage/' . $media->file_path) }}" class="glightbox rounded-3">
                        <div class="rounded-3 card-lift"
                            style="background-image: url('{{ asset('storage/' . $media->file_path) }}'); background-repeat: no-repeat; height: 350px; background-size: cover">
                        </div>
                        <div class="mt-3">
                            <h3 class="mb-4 text-truncate">
                                <a href="#!" class="text-inherit">{{ $media->titre }}</a>
                            </h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


@endsection


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabButtons = document.querySelectorAll('#myTab .nav-link');
            const tabPanes = document.querySelectorAll('#myTabContent .tab-pane');

            tabButtons.forEach(function (btn) {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Remove active classes
                    tabButtons.forEach(b => b.classList.remove('active'));
                    tabPanes.forEach(pane => {
                        pane.classList.remove('show', 'active');
                    });

                    // Add active to clicked tab
                    this.classList.add('active');
                    const target = this.getAttribute('data-target');
                    const pane = document.querySelector(target);
                    if (pane) {
                        pane.classList.add('show', 'active');
                    }
                });
            });
        });
    </script>
@endpush