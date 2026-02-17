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
        {{-- <div class="row">
            <div class="col-xl-6 col-md-12 col-12">
                <div class="mb-lg-8 mb-6">
                    <h2 class="h1 fw-bold"> 
                        Mediatheque
                        <!--u class="text-warning"><span class="text-primary">education webinars</span></u-->
                    </h2>
                    <!--p class="lead mb-0">Online webinars are amazing opportunities to have fun and learn.</p-->
                </div>
            </div>
        </div> --}}
        <div class="table-responsive-xl pb-6 row"> 
            @if ($mediatheques->isEmpty())
                <div class="col-12">
                    <div class="alert alert-info text-center" role="alert">
                        Aucune ressource disponible pour le moment. Revenez bientôt !
                    </div>
                </div>
            @endif
            @foreach ($mediatheques as $media)

                <div class="col-md-3">
                    <div class="card mb-4 mb-xl-0 card-hover border">
                        <a href="#!">
                            @php
                                $extension = pathinfo(Storage::url($media->fichier), PATHINFO_EXTENSION);
                            @endphp

                            @if (in_array($extension, ['jpg', 'jpeg', 'png']))
                                <img src="{{ asset('storage/' . $media->fichier) }}" alt="webinar-1"
                                    class="img-fluid w-100 rounded-top-3">
                            @elseif (in_array($extension, ['mp4']))
                                <a href="{{ asset('storage/' . $media->fichier) }}" target="_blank">
                                    <video src="{{ asset('storage/' . $media->fichier) }}" style="width: 100%; height: auto;"></video>
                                </a>
                            @else

                            @endif
                        </a>
                        <div class="card-body">
                            <h3 class="mb-4 text-truncate">
                                <a href="#!" class="text-inherit">{{ $media->titre }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



{{-- <section class="my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="text-center mb-5">
                    <small class="text-uppercase ls-md fw-semibold">Vie Sociale</small>
                    <h1 class="mb-3 mt-3">Célébrons les événements marquants</h1>
                    <p class="mb-0 px-lg-6">
                        La vie universitaire ne se limite pas aux études et à la recherche. 
                        C'est aussi un espace où nous célébrons ensemble les moments importants de nos enseignants : 
                        mariages, naissances et autres annonces marquantes.
                    </p>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <!-- Mariages -->
            <div class="col-lg-4 col-md-4 col-12">
                <a href="image/mariage.jpg" class="glightbox rounded-3">
                    <div class="rounded-3 card-lift"
                        style="background-image: url(image/mariage.jpg); background-repeat: no-repeat; height: 350px; background-size: cover">
                    </div>
                </a>
            </div>

            <!-- Naissances -->
            <div class="col-lg-4 col-md-4 col-12">
                <a href="image/naissance.jpg" class="glightbox rounded-3">
                    <div class="rounded-3 card-lift"
                        style="background-image: url(image/naissance.jpg); background-repeat: no-repeat; height: 350px; background-size: cover">
                    </div>
                </a>
            </div>

            <!-- Autres événements -->
            <div class="col-lg-4 col-md-4 col-12">
                <a href="image/autres_evenements.jpg" class="glightbox rounded-3">
                    <div class="rounded-3 card-lift"
                        style="background-image: url(image/autres_evenements.jpg); background-repeat: no-repeat; height: 350px; background-size: cover">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> --}}


@endsection