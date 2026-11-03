@extends('layouts.university')

@section('title', 'Ecoles doctorales | UFR')


@push('style')
    <style>
        .card-img-top {
            width: 100%;
            height: 200px; /* Hauteur uniforme */
            object-fit: cover; /* Coupe l’image pour qu’elle garde le bon ratio */
        }

        .card-body {
            min-height: 180px; /* Assure une hauteur uniforme des cartes */
        }

        .truncate-text {
            display: -webkit-box;
            -webkit-line-clamp: 3; /* Nombre max de lignes */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
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
                        Enseignant 
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">VIE SOCIALE</h1>
                    <p class="pe-lg-10 mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus 
                        culpa a explicabo ea repellat aspernatur atque porro alias odit ex 
                        recusandae ut commodi sapiente repudiandae corporis aliquid doloribus, 
                        quasi deserunt ?
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
        <div class="table-responsive-xl pb-6 row"> 
            <div class="table-responsive-xl pb-6 row"> 
                @foreach ($mediatheques as $media)
                @php
                    $extension = strtolower(pathinfo($media->fichier, PATHINFO_EXTENSION));
                    $mediaUrl = asset('storage/' . $media->fichier);
                @endphp
                <div class="col-md-3 gap-4 mb-4">
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