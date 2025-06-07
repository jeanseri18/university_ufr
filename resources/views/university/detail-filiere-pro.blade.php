@extends('layouts.university')

@section('title', 'Programmes classique | UFR')

@section('content')

<!-- Header with Background Image -->
<div class="bg-header position-relative" style="background-image: url('{{ asset('image/7I8A9914.jpg') }}'); 
           background-size: cover; 
           background-position: center; 
           height: 400px;">
    <!-- Overlay vert -->
    <div class="overlay" style="
           position: absolute; 
           top: 0; 
           left: 0; 
           width: 100%; 
           height: 100%; 
           background-color: rgba(0, 0, 0, 0.9)
           z-index: 1;">
    </div>

    <!-- Contenu -->
    <div class="container text-center align-item-center justify-content-center text-white py-5 position-relative" style="z-index: 2;">
        <br>
        <br>
        <br>
        <br>
        <h1 class="text-white display-2">{{ $filiere->categorie }}:<br> {{ $filiere->titre }}</h1>
    </div>
</div>

<!-- Content Section -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <!-- Objectifs -->
            <div class="section mb-5">
                <h3 class="section-title">Objectifs de la formation</h3>
                <div class="section-content">
                    <p>{!! nl2br(e($filiere->objectifs)) !!}</p>
                </div>
            </div>

            <!-- Compétences -->
            <div class="section mb-5">
                <h3 class="section-title">Compétences acquises</h3>
                <div class="section-content">
                    <p>{!! nl2br(str_replace('•', '<br>', $filiere->competences)) !!}</p>
                </div>
            </div>

            <!-- Débouchés professionnels -->
            <div class="section mb-5">
                <h3 class="section-title">Débouchés professionnels</h3>
                <div class="section-content">
                    <p>{!! nl2br(str_replace('•', '<br>', $filiere->debouches)) !!}</p>
                </div>
            </div>

            <!-- Admission -->
            <div class="section mb-5">
                <h3 class="section-title">Admission</h3>
                <div class="section-content">
                    <p>{!! nl2br(e($filiere->admission)) !!}</p>
                </div>
            </div>

            <!-- Contenu de la formation -->
            <div class="section mb-5">
                <h3 class="section-title">Contenu de la formation</h3>
                <div class="section-content">
                    <p>{!! nl2br(e($filiere->contenu_formation)) !!}</p>
                </div>
            </div>

            <!-- Contrôle des connaissances -->
            <div class="section mb-5">
                <h3 class="section-title">Contrôle des connaissances</h3>
                <div class="section-content">
                    <p>{!! nl2br(str_replace('•', '<br>', $filiere->controle_connaissances)) !!}</p>
                </div>
            </div>

            <!-- Poursuite d'études -->
            <div class="section">
                <h3 class="section-title">Poursuite d'études</h3>
                <div class="section-content">
                    <p>{{ $filiere->poursuite_etudes }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    /* Header section style */
    .bg-header {
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
    }

    /* Section titles */
    .section-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #007bff;
        text-transform: uppercase;
        margin-bottom: 20px;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        width: 50px;
        height: 2px;
        background-color: #007bff;
        bottom: -10px;
        left: 0;
    }

    /* Section content */
    .section-content p {
        font-size: 1rem;
        line-height: 1.6;
        color: #555;
        padding-bottom: 20px;
    }

    /* Section styling */
    .section {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .section:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 12px rgba(0,0,0,0.1);
    }

    .container {
        max-width: 1200px;
    }

    /* Responsive Design */
    @media (max-width: 767px) {
        .bg-header {
            padding: 60px 0;
        }

        .section-title {
            font-size: 1.2rem;
        }

        .section-content p {
            font-size: 0.9rem;
        }
    }
</style>
@endsection
