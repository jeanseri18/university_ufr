@extends('layouts.university')

@section('title', 'Agenda | UFR')

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
                        Etudiant
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">LISTE DE REPARTITION</h1>
                    <p class="pe-lg-10 mb-5">
                        Soyez à l’affût des dates clés, conférences, et activités marquantes qui enrichissent notre communauté universitaire.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <!-- Image ou autre contenu -->
            </div>
        </div>
    </div>
</section>



{{-- <section class="" style="background-color:#E7EEEA; padding-top: 30px; padding-bottom: 30px; margin-bottom: 0px; margin-top: 0px; border-radius: 0px;">
    <section class="" style="background-color:#E7EEEA; padding-top: 30px; padding-bottom: 30px; margin-bottom: 0px; margin-top: 60px; border-radius: 10px;">
            <div class="container my-lg-10">
                <div class="row">
                    <div class="col-xl-9 col-md-9 col-9">
                        <div class="mb-lg-9 mb-6">
                            <h2 class="h1 fw-bold">
                                Calendrier
                            </h2>
                            <p class="mb-0">
                                Soyez à l’affût des dates clés, conférences, et activités marquantes qui
                                enrichissent notre communauté universitaire.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-3">
                        <div class="mb-lg-3 mb-6">
                            <a href="{{ route('etudiant.agenda') }}" class="text-xhite">
                                <h2 class="h3 fw-bold btn-primary btn">
                                    Voir plus
                                </h2>
                            </a>
                        </div>
                    </div>
                    
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="licence1-tab" data-toggle="tab" data-target="#licence1" type="button" role="tab" aria-controls="licence1" aria-selected="true">Licence 1 - Fip 1</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="licence2-tab" data-toggle="tab" data-target="#licence2" type="button" role="tab" aria-controls="licence2" aria-selected="false">Licence 2 - Fip 2</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="licence3-tab" data-toggle="tab" data-target="#licence3" type="button" role="tab" aria-controls="licence3" aria-selected="false">Licence 3 Économie - Licence 3 Gestion</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="master1-tab" data-toggle="tab" data-target="#master1" type="button" role="tab" aria-controls="master1" aria-selected="false">Master 1 Économie - Master 1 Gestion</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="master2-tab" data-toggle="tab" data-target="#master2" type="button" role="tab" aria-controls="master2" aria-selected="false">Master 2 Économie - Master 2 Gestion</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="licence1" role="tabpanel" aria-labelledby="licence1-tab">
                            <div class="row">
                                @if($events->isNotEmpty())
                                    @foreach ($events as $event)
                                        @if ($event->type == 'licence 1')
                                        <div class="col-md-3 mb-4">
                                            <div class="card mb-4 mb-xl-0 card-hover border d-flex flex-column" style="height: 100%;">
                                                <!-- Image avec taille uniforme -->
                                                <a href="{{ route('detail.actualite', $event) }}">
                                                    <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top rounded-top-3" alt="{{ $event->title }}" style="height: 200px; object-fit: cover;">
                                                </a>

                                                <div class="card-body d-flex flex-column">
                                                    <!-- Titre limité en largeur -->
                                                    <h3 class="mb-3 ">
                                                        <a href="{{ asset('storage/' . $event->image) }}" class="text-inherit" target="blank">
                                                            {{ Str::limit($event->title, 65) }}
                                                        </a>
                                                    </h3>

                                                    <div class="mb-4 flex-grow-1">
                                                        <!-- Texte limité à 3 lignes -->
                                                        <p class="truncate-text text-muted">{{ Str::limit($event->description, 100) }}</p>

                                                        <!-- Date en petit -->
                                                        <small class="text-muted">{{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}</small>
                                                    </div>

                                                    <a href="{{ asset('storage/' . $event->image) }}" class="btn btn-light-primary text-primary" target="blank">Continuer la lecture</a>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        @endif
                                        
                                    @endforeach
                                @else
                                    <p>Aucun événement disponible.</p>
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade" id="licence2" role="tabpanel" aria-labelledby="licence2-tab">
                            <div class="row">
                                @if($events->isNotEmpty())
                                    @foreach ($events as $event)
                                        @if ($event->type == 'licence 2')
                                        <div class="col-md-3 mb-4">
                                            <div class="card mb-4 mb-xl-0 card-hover border d-flex flex-column" style="height: 100%;">
                                                <!-- Image avec taille uniforme -->
                                                <a href="{{ route('detail.actualite', $event) }}">
                                                    <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top rounded-top-3" alt="{{ $event->title }}" style="height: 200px; object-fit: cover;">
                                                </a>

                                                <div class="card-body d-flex flex-column">
                                                    <!-- Titre limité en largeur -->
                                                    <h3 class="mb-3 ">
                                                        <a href="{{ asset('storage/' . $event->image) }}" class="text-inherit" target="blank">
                                                            {{ Str::limit($event->title, 65) }}
                                                        </a>
                                                    </h3>

                                                    <div class="mb-4 flex-grow-1">
                                                        <!-- Texte limité à 3 lignes -->
                                                        <p class="truncate-text text-muted">{{ Str::limit($event->description, 100) }}</p>

                                                        <!-- Date en petit -->
                                                        <small class="text-muted">{{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}</small>
                                                    </div>

                                                    <a href="{{ asset('storage/' . $event->image) }}" class="btn btn-light-primary text-primary" target="blank">Continuer la lecture</a>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        @endif
                                        
                                    @endforeach
                                @else
                                    <p>Aucun événement disponible.</p>
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade" id="licence3" role="tabpanel" aria-labelledby="licence3-tab">

                            <div class="row">
                                @if($events->isNotEmpty())
                                    @foreach ($events as $event)
                                        @if ($event->type == 'licence 3')
                                        <div class="col-md-3 mb-4">
                                            <div class="card mb-4 mb-xl-0 card-hover border d-flex flex-column" style="height: 100%;">
                                                <!-- Image avec taille uniforme -->
                                                <a href="{{ route('detail.actualite', $event) }}">
                                                    <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top rounded-top-3" alt="{{ $event->title }}" style="height: 200px; object-fit: cover;">
                                                </a>

                                                <div class="card-body d-flex flex-column">
                                                    <!-- Titre limité en largeur -->
                                                    <h3 class="mb-3 ">
                                                        <a href="{{ asset('storage/' . $event->image) }}" class="text-inherit" target="blank">
                                                            {{ Str::limit($event->title, 65) }}
                                                        </a>
                                                    </h3>

                                                    <div class="mb-4 flex-grow-1">
                                                        <!-- Texte limité à 3 lignes -->
                                                        <p class="truncate-text text-muted">{{ Str::limit($event->description, 100) }}</p>

                                                        <!-- Date en petit -->
                                                        <small class="text-muted">{{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}</small>
                                                    </div>

                                                    <a href="{{ asset('storage/' . $event->image) }}" class="btn btn-light-primary text-primary" target="blank">Continuer la lecture</a>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        @endif
                                        
                                    @endforeach
                                @else
                                    <p>Aucun événement disponible.</p>
                                @endif
                            </div>

                        </div>
                        <div class="tab-pane fade" id="master1" role="tabpanel" aria-labelledby="master1-tab">

                            <div class="row">
                                @if($events->isNotEmpty())
                                    @foreach ($events as $event)
                                        @if ($event->type == 'master 1')
                                        <div class="col-md-3 mb-4">
                                            <div class="card mb-4 mb-xl-0 card-hover border d-flex flex-column" style="height: 100%;">
                                                <!-- Image avec taille uniforme -->
                                                <a href="{{ route('detail.actualite', $event) }}">
                                                    <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top rounded-top-3" alt="{{ $event->title }}" style="height: 200px; object-fit: cover;">
                                                </a>

                                                <div class="card-body d-flex flex-column">
                                                    <!-- Titre limité en largeur -->
                                                    <h3 class="mb-3 ">
                                                        <a href="{{ asset('storage/' . $event->image) }}" class="text-inherit" target="blank">
                                                            {{ Str::limit($event->title, 65) }}
                                                        </a>
                                                    </h3>

                                                    <div class="mb-4 flex-grow-1">
                                                        <!-- Texte limité à 3 lignes -->
                                                        <p class="truncate-text text-muted">{{ Str::limit($event->description, 100) }}</p>

                                                        <!-- Date en petit -->
                                                        <small class="text-muted">{{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}</small>
                                                    </div>

                                                    <a href="{{ asset('storage/' . $event->image) }}" class="btn btn-light-primary text-primary" target="blank">Continuer la lecture</a>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        @endif
                                        
                                    @endforeach
                                @else
                                    <p>Aucun événement disponible.</p>
                                @endif
                            </div>

                        </div>
                        <div class="tab-pane fade" id="master2" role="tabpanel" aria-labelledby="master2-tab">

                            <div class="row">
                                @if($events->isNotEmpty())
                                    @foreach ($events as $event)
                                        @if ($event->type == 'master 2')
                                        <div class="col-md-3 mb-4">
                                            <div class="card mb-4 mb-xl-0 card-hover border d-flex flex-column" style="height: 100%;">
                                                <!-- Image avec taille uniforme -->
                                                <a href="{{ route('detail.actualite', $event) }}">
                                                    <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top rounded-top-3" alt="{{ $event->title }}" style="height: 200px; object-fit: cover;">
                                                </a>

                                                <div class="card-body d-flex flex-column">
                                                    <!-- Titre limité en largeur -->
                                                    <h3 class="mb-3 ">
                                                        <a href="{{ asset('storage/' . $event->image) }}" class="text-inherit" target="blank">
                                                            {{ Str::limit($event->title, 65) }}
                                                        </a>
                                                    </h3>

                                                    <div class="mb-4 flex-grow-1">
                                                        <!-- Texte limité à 3 lignes -->
                                                        <p class="truncate-text text-muted">{{ Str::limit($event->description, 100) }}</p>

                                                        <!-- Date en petit -->
                                                        <small class="text-muted">{{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}</small>
                                                    </div>

                                                    <a href="{{ asset('storage/' . $event->image) }}" class="btn btn-light-primary text-primary" target="blank">Continuer la lecture</a>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        @endif
                                        
                                    @endforeach
                                @else
                                    <p>Aucun événement disponible.</p>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
</section> --}}



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