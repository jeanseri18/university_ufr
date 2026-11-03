@extends('layouts.university')

@section('title', 'Vie sociale - Partenaire | UFR')

@push('styles')
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
                    <h1 class="display-3 fw-bold mb-3 text-white">Procédures administratives</h1>
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


<section class="">
    <div class="container my-lg-8">
        <div class="table-responsive-xl pb-2 row"> 
            <div class="table-responsive-xl pb-0 row"> 
                @foreach ($mediatheques as $media)
                @php
                    $extension = strtolower(pathinfo($media->fichier, PATHINFO_EXTENSION));
                    $mediaUrl = asset('storage/' . $media->fichier);
                @endphp
                <div class="col-md-3 gap-4 mb-2">
                    <div class="card mb-4 mb-xl-0 card-hover border">
                        @if (in_array($extension, ['jpg', 'jpeg', 'png']))
                            <a href="#!" data-bs-toggle="modal" data-bs-target="#mediaModal"
                                data-media-type="image" data-media-url="{{ $mediaUrl }}"
                                data-media-title="{{ $media->titre }}">
                                <img src="{{ $mediaUrl }}" alt="{{ $media->titre }}"
                                    class="img-fluid w-100 rounded-top-3" style="height: 200px; object-fit: cover; cursor: pointer;">
                            </a>
                        @elseif ($extension === 'mp4')
                            <a href="#!" data-bs-toggle="modal" data-bs-target="#mediaModal"
                                data-media-type="video" data-media-url="{{ $mediaUrl }}"
                                data-media-title="{{ $media->titre }}">
                                <video src="{{ $mediaUrl }}" muted preload="metadata"
                                    class="w-100" style="height: 200px; object-fit: cover; cursor: pointer;"></video>
                            </a>
                        @endif
                        <div class="card-body">
                            <h6 class="mb-2 text-truncate" style="max-width: 100%;">
                                <a href="#!" class="text-inherit">{{ $media->titre }}</a>
                            </h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="mediaModal" tabindex="-1" aria-labelledby="mediaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediaModalLabel">Mediatheque</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body text-center bg-dark p-2">
                <img id="mediaModalImage" src="" alt="" class="img-fluid d-none">
                <video id="mediaModalVideo" class="w-100 d-none" controls autoplay playsinline></video>
            </div>
        </div>
    </div>
</div>

@endsection


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mediaModal = document.getElementById('mediaModal');
        if (!mediaModal) return;

        mediaModal.addEventListener('show.bs.modal', function (event) {
            const trigger = event.relatedTarget;
            const image = document.getElementById('mediaModalImage');
            const video = document.getElementById('mediaModalVideo');
            const url = trigger.dataset.mediaUrl;

            image.classList.add('d-none');
            video.classList.add('d-none');
            image.removeAttribute('src');
            video.pause();
            video.removeAttribute('src');
            video.load();
            document.getElementById('mediaModalLabel').textContent = trigger.dataset.mediaTitle;

            if (trigger.dataset.mediaType === 'video') {
                video.src = url;
                video.load();
                video.classList.remove('d-none');
                video.play().catch(function () {});
            } else {
                image.src = url;
                image.alt = trigger.dataset.mediaTitle;
                image.classList.remove('d-none');
            }
        });

        mediaModal.addEventListener('hidden.bs.modal', function () {
            const video = document.getElementById('mediaModalVideo');
            video.pause();
            video.removeAttribute('src');
            video.load();
        });
    });
</script>
@endpush