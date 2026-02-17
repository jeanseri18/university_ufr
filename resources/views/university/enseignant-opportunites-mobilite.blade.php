@extends('layouts.university')

@section('title', 'Opportunité & Mobilités | UFR')

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



        /* Styles pour le conteneur global */
        .card-design {
            border: 1px solid #dee2e6; /* Bordure générale */
            border-radius: 1rem; /* Bordure arrondie */
            overflow: hidden; /* Important pour que l'image et le contenu respectent les bords arrondis */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre légère pour l'effet de carte */
        }

        /* Styles pour le bloc de contenu (la partie grise) */
        .bg-light-gray {
            background-color: #f8f9fa; /* Couleur de fond légèrement grisée */
        }

        /* Styles pour le bouton personnalisé */
        .btn-custom-green {
            background-color: #386641; /* Couleur verte foncée */
            color: white;
            border-color: #386641;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .btn-custom-green:hover {
            background-color: #2a5033; /* Une nuance plus foncée au survol */
            border-color: #2a5033;
            color: white;
        }

        /* S'assurer que les bords arrondis sont corrects */
        .rounded-right {
            border-top-right-radius: 1rem !important;
            border-bottom-right-radius: 1rem !important;
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
        }

        /* Ajustement pour le titre */
        .text-content h2 {
            font-size: 2.5rem; /* Ajuster la taille de la police si nécessaire */
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
                    <h1 class="display-3 fw-bold mb-3 text-white">OPPORTUNITÉ & MOBILITÉ</h1>
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
            <h1 class="display-4 banner-title">Opportunité & Mobilité</h1>
            <p class="lead">Cette rubrique relaie les offres de consultance, les offres de formation ou encore les offres de renforcement des capacités qui sont disponibles. Elle relaie également
                 égalément des offres de mobilité disponibles.</p>
        </div> --}}

        {{-- <div class="mt-5">
            <h2>Découvrez les thèmes abordés</h2>
        </div> --}}

        <div class="my-5 mt-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="card" style="background-image: url('{{ asset('/assets/etudiant-afro.jpg') }}'); background-size: cover; background-position: center; height: 300px; border-radius: 10px; margin: 0px 20px 40px 0px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="height: 300px; border-radius: 10px; padding: 20px; display: flex; flex-direction: column; justify-content: center; background-color: #f8f9fa; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 30px; margin: 0px 20px 40px 0px;">
                        <div class="text-content">
                            <h2 class="font-weight-bold mb-3">Opportunités</h2>
                            <p class="mb-4">Découvrez les opportunités professionnelles dont vous pouvez bénéficier en enseignant au sein de notre université.</p>
                        </div>
                        <div class="button-wrapper mt-auto center">
                            <a href="{{ route('enseignant.opportunites.liste') }}" class="btn btn-primary btn-custom-green">Voir plus...</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 40px">
                <div class="col-md-6">
                    <div class="card" style="height: 300px; border-radius: 10px; padding: 20px; display: flex; flex-direction: column; justify-content: center; background-color: #f8f9fa; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 30px; margin: 0px 20px 40px 0px;">
                        <div class="text-content">
                            <h2 class="font-weight-bold mb-3">Mobilité</h2>
                            <p class="mb-4">Découvrez les opportunités de mobilité dont vous pouvez bénéficier en étudiant dans notre université.</p>
                        </div>
                        <div class="button-wrapper mt-auto center">
                            <a href="{{ route('enseignant.mobilite.liste') }}" class="btn btn-primary btn-custom-green">Voir plus...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="background-image: url('{{ asset('/assets/etudiant-afro.jpg') }}'); background-size: cover; background-position: center; height: 300px; border-radius: 10px; margin: 0px 20px 40px 0px;  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
            </div>
        </div>
        


        {{-- <div class="container my-5 mt-8">
            <div class="row no-gutters card-design">
                <div class="col-md-6" style="background-image: url('{{ asset('/assets/etudiant-afro.jpg') }}'); background-size: cover; background-position: center; height: 300px;">
                    <img src="{{ asset('/assets/etudiant-afro.jpg') }}" alt="" srcset="">
                </div>

                <div class="col-md-6 p-4 d-flex flex-column justify-content-center bg-light-gray rounded-right">
                    <div class="text-content">
                        <h2 class="font-weight-bold mb-3">Opportunités</h2>
                        <p class="mb-4">Découvrez les opportunités professionnelles dont vous pouvez bénéficier en étudiant dans notre université.</p>
                    </div>
                    <div class="button-wrapper mt-auto center">
                        <a href="#" class="btn btn-primary btn-custom-green">Voir plus...</a>
                    </div>
                </div>
            </div>

            <div class="row no-gutters card-design" style="margin-top: 50px;">
                <div class="col-md-6 p-4 d-flex flex-column justify-content-center bg-light-gray rounded-right">
                    <div class="text-content">
                        <h2 class="font-weight-bold mb-3">Mobilité</h2>
                        <p class="mb-4">Découvrez les opportunités de mobilité dont vous pouvez bénéficier en étudiant dans notre université.</p>
                    </div>
                    <div class="button-wrapper mt-auto center">
                        <a href="#" class="btn btn-primary btn-custom-green">Voir plus...</a>
                    </div>
                </div>
                <div class="col-md-6" style="background-image: url('{{ asset('/assets/etudiant-afro.jpg') }}'); background-size: cover; background-position: center; height: 300px;">
                
                </div>
            </div>
        </div> --}}

    </div>
</section>


@endsection
