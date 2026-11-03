@extends('layouts.university')

@section('title', 'Acceuil | Ufr ')

@push('style')
<style>
    .card-custom {
        min-height: 300px;
        /* Ajustez cette valeur selon vos besoins */

        flex-direction: column;
        justify-content: space-between;
    }
    /* Slider container */
    .bg-slide1, .bg-slide2, .bg-slide3 {
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 100vh; /* Vous pouvez ajuster la hauteur */
        position: relative;
        transition: background-position 1s ease, background-size 1s ease; /* Ajoute une animation fluide lors du changement de slide */
    }

    /* Amélioration du texte sur chaque slide */
    .bg-slide1 h1, .bg-slide2 h1, .bg-slide3 h1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 3rem;
        text-align: center;
    }

    /* Ajout d'un effet de fondu pour l'image */
    .carousel-inner {
        transition: opacity 1s ease-in-out;
    }

    .carousel-item {
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .carousel-item.active {
        opacity: 1;
    }

    /* Effet de bouton hover */
    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5); /* Pour des boutons plus visibles */
    }

    /* Card hover effet */
    .card-hover {
        transition: transform .35s ease, box-shadow .35s ease;
    }

    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 45px rgba(12, 51, 150, .16);
    }

    /* Adaptation des images à différentes résolutions */
    .card-img-top {
        width: 100%;
        height: 250px; /* Hauteur fixe pour les images */
        object-fit: cover; /* Assure que l'image couvre toute la surface sans déformation */
    }

    .bg-slide1 {
        background: linear-gradient(#0C3396B8, #000000F1), url('../../assets/images/backhome.png') no-repeat right;
        background-size: auto;
        background-position: right;
        height: 610px;
        background-size: cover;

    }

    .bg-slide2 {
        background: linear-gradient(#0C3396B8, #000000F1), url('../../assets/images/formationorg/handsome-young-businessman.jpg') no-repeat right;
        background-size: auto;
        background-position: right;
        height: 610px;

        background-size: cover;
    }

    .bg-slide3 {
        background: linear-gradient(#0C3396B8, #000000F1), url('../../assets/images/about/geeksui-img-3.jpg') no-repeat right;
        background-size: auto;
        background-position: right;
        height: 610px;
        background-size: cover;
    }

    .bg-spacing {
        margin-left: 15%;
        margin-top: 5%;
        margin-right: 15%;
    }

    .my-slider .card-img-top {
        width: 100%;
        height: 200px;
        /* Hauteur fixe pour toutes les images */
        object-fit: cover;
        /* Couvrir le conteneur sans déformation */
    }

    .card {
        overflow: hidden;
        /* Éviter que les images débordent du conteneur */
    }

    .item {
        display: flex;
        justify-content: center;
        /* Centrer les éléments horizontalement */
        align-items: center;
        /* Centrer les éléments verticalement */
    }

    .card-img-top {
        width: 100%;
        height: 200px;
        /* Hauteur fixe pour toutes les images */
        object-fit: cover;
        /* Couvrir le conteneur sans déformation */
    }

    #certifCarouselControls {
        display: flex;
        justify-content: space-between;
        position: absolute;
        width: 100%;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
    }

    #certifCarouselControls .prev,
    #certifCarouselControls .next {
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px;
        cursor: pointer;
    }
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

    .actualites-grid {
        row-gap: 1.5rem;
    }

    .actualite-card {
        height: 100%;
        overflow: hidden;
        border: 0 !important;
        border-radius: 18px;
        background: #fff;
        box-shadow: 0 8px 28px rgba(18, 38, 63, .09);
        animation: actualiteReveal .65s both cubic-bezier(.2, .7, .2, 1);
        animation-delay: var(--reveal-delay, 0ms);
    }

    .actualite-card .actualite-image {
        display: block;
        height: 245px;
        overflow: hidden;
        background: #edf2f7;
    }

    .actualite-card .actualite-image img {
        height: 100%;
        transition: transform .55s cubic-bezier(.2, .7, .2, 1);
    }

    .actualite-card:hover .actualite-image img {
        transform: scale(1.07);
    }

    .actualite-card .card-body {
        min-height: 0;
        padding: 1.5rem;
    }

    .actualite-card__meta {
        display: flex;
        align-items: center;
        gap: .65rem;
        margin-bottom: 1rem;
        color: #64748b;
        font-size: .82rem;
        font-weight: 600;
    }

    .actualite-card__meta::before {
        content: '';
        width: 28px;
        height: 3px;
        border-radius: 999px;
        background: #ffc107;
    }

    .actualite-card h3 {
        font-size: 1.25rem;
        line-height: 1.35;
    }

    .actualite-card .truncate-text {
        line-height: 1.65;
        min-height: 4.9em;
    }

    .actualite-card__link {
        width: fit-content;
        margin-top: auto;
        padding: .65rem 0;
        border-bottom: 2px solid transparent;
        transition: border-color .25s ease, gap .25s ease;
    }

    .actualite-card__link i {
        margin-left: .35rem;
        transition: transform .25s ease;
    }

    .actualite-card__link:hover {
        border-color: currentColor;
    }

    .actualite-card__link:hover i {
        transform: translateX(4px);
    }

    @keyframes actualiteReveal {
        from { opacity: 0; transform: translateY(28px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (prefers-reduced-motion: reduce) {
        .actualite-card, .actualite-card .actualite-image img {
            animation: none;
            transition: none;
        }
    }

</style>    
@endpush


@section('content')
<!-- VERSION DESKTOP -->
<section class="bg-light d-none d-md-flex align-items-center justify-content-center"
         style="background-image: url('image/7I8A9623.jpg');
                background-size: cover;
                background-position: center;
                height: 650px;">
    <div class="container">
        <div class="row">
            <div class="col-md-2 " style="background-color: white; color: #3CA45D; padding: 10px;">
                <strong>Bienvenue à l'UFR</strong>
            </div>
            <div class="col-md-10"></div>

            <div class="col-md-12 " style="background-color: #0B0B0B93; color: white; padding: 10px; height: 350px;">
                <div id="textCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Texte 1 -->
                        <div class="carousel-item active" style="padding: 110px;">
                            <p style="font-size: 30px;">Bienvenue à l'UFR de l'Université de Cocody, un espace dédié à l'excellence académique et à l'innovation.</p>
                            <p style="font-size: 13px;">Administration, Janvier 2024</p>
                        </div>
                        <!-- Texte 2 -->
                        <div class="carousel-item" style="padding: 110px;">
                            <p style="font-size: 30px;">Explorez les programmes variés offerts par l'UFR, conçus pour répondre aux besoins académiques et professionnels des étudiants.</p>
                            <p style="font-size: 13px;">Direction Pédagogique, Février 2024</p>
                        </div>
                        <!-- Texte 3 -->
                        <div class="carousel-item" style="padding: 110px;">
                            <p style="font-size: 30px;">Rejoignez une communauté dynamique et engageante à l'UFR de l'Université de Cocody.</p>
                            <p style="font-size: 13px;">Service de Communication, Mars 2024</p>
                        </div>
                    </div>
                    <!-- Contrôles du slider -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#textCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#textCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VERSION MOBILE -->
<section class="bg-light d-block d-md-none text-center"
        style="background-image: url('image/7I8A9623.jpg');
                background-size: cover;
                background-position: center;
                height: auto;
                padding: 40px 20px;">
    <div class="container">
        <div class="row">
            <div class="col-12" style="background-color: white; color: #3CA45D; padding: 10px; margin-bottom: 10px;">
                <strong>Bienvenue à l'UFR</strong>
            </div>

            <div class="col-12" style="background-color: #0B0B0B93; color: white; padding: 20px;">
                <div id="mobileTextCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Texte 1 -->
                    <div class="carousel-item active">
                    <p style="font-size: 20px;">Bienvenue à l'UFR de l'Université de Cocody, un espace dédié à l'excellence académique et à l'innovation.</p>
                    <p style="font-size: 12px;">Administration, Janvier 2024</p>
                    </div>
                    <!-- Texte 2 -->
                    <div class="carousel-item">
                    <p style="font-size: 20px;">Explorez les programmes variés offerts par l'UFR, conçus pour répondre aux besoins académiques et professionnels des étudiants.</p>
                    <p style="font-size: 12px;">Direction Pédagogique, Février 2024</p>
                    </div>
                    <!-- Texte 3 -->
                    <div class="carousel-item">
                    <p style="font-size: 20px;">Rejoignez une communauté dynamique et engageante à l'UFR de l'Université de Cocody.</p>
                    <p style="font-size: 12px;">Service de Communication, Mars 2024</p>
                    </div>
                </div>
                <!-- Contrôles du slider -->
                <button class="carousel-control-prev" type="button" data-bs-target="#mobileTextCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mobileTextCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ADVERTISING BANNER SECTION -->
<section class="bg-primary text-white py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2" style="border-right: 1px solid #f2f2f25e">
                <h4 class="fw-bold mb-2 text-warning" style="animation: fadeInOut 3s infinite;">
                    Flash Info <i class="bi bi-exclamation-triangle-fill" style="animation: fadeInOut 3s infinite; color: orange; margin-right: 10px;"></i>
                </h4>
            </div>
            <div class="col-md-10 text-md-end text-center mb-0 mt-0 mt-md-0">
                <style>
                    @keyframes fadeInOut {
                        0%, 100% { opacity: 0; }
                        50% { opacity: 1; }
                    }
                </style>
                <p class="mb-0">
                    <marquee behavior="" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
                        @foreach ($annonces as $item)
                            <span style="display: inline-flex; align-items: center; margin-right: 10px;">
                                <span><a class="text-white" href="{{ asset('storage/' . $item->fichier_path) }}" target="_blank">{{ $item->description }}</a></span> <span style="margin-right: 10px; margin-left: 10px;"><i class="bi bi-dot"></i></span> 
                            </span>
                        @endforeach
                    </marquee>
                </p>
            </div>
        </div>
    </div>
</section>


<section class="" id="a-propos">
    <div class="container my-lg-8">
        <div class="row">
            <div class="col-xl-9 col-md-9 col-9">
                <div class="mb-lg-9 mb-6">
                    <h2 class="h1 fw-bold">
                        Communiqués
                        <u class="text-warning">
                            <span class="text-primary"> et documents officiels</span>
                        </u>
                    </h2>
                    <p class="mb-0">
                        Restez informés des annonces officielles et des informations essentielles émanant de l’université.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-3">
                <div class="mb-lg-3 mb-6 d-flex justify-content-end">
                    <a href="{{ route('all.actualite') }}" class="text-white ">
                        <h2 class="h3 fw-bold btn-primary btn">Voir plus</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row actualites-grid pb-6">
        @foreach ($actualites as $actualite)
            <div class="col-lg-4 col-md-6 d-flex g-4" style="margin-bottom: 10px;">
                <article class="card actualite-card card-hover d-flex flex-column w-100" style="--reveal-delay: {{ $loop->index * 120 }}ms">
                    <a href="{{ route('detail.actualite', $actualite) }}" class="actualite-image rounded-top-3 overflow-hidden" style="height: 220px; flex: 0 0 220px;" aria-label="Lire {{ $actualite->titre }}">
                        <img src="{{ asset('storage/' . $actualite->image) }}" class="card-img-top w-100 h-100" style="object-fit: cover;" alt="{{ $actualite->titre }}">
                    </a>

                    <div class="card-body d-flex flex-column flex-grow-1">
                        <div class="actualite-card__meta">
                            <time datetime="{{ \Carbon\Carbon::parse($actualite->date_ajoute)->toDateString() }}">
                                {{ \Carbon\Carbon::parse($actualite->date_ajoute)->translatedFormat('d M Y') }}
                            </time>
                        </div>

                        <h3 class="mb-3 fw-bold">
                            <a href="{{ route('detail.actualite', $actualite) }}" class="text-inherit">
                                {{ Str::limit($actualite->titre, 65) }}
                            </a>
                        </h3>

                        <p class="truncate-text text-muted mb-4">{{ Str::limit($actualite->detail, 130) }}</p>

                        <a href="{{ route('detail.actualite', $actualite) }}" class="actualite-card__link text-primary fw-semibold">
                            Continuer la lecture <i class="bi bi-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>
            </div>
        @endforeach
        </div>

</section>

<section class="" style="background-color:#E7EEEA;padding-top: 30px; padding-bottom: 30px;">
    <div class="container my-lg-10">
        <div class="row">
            <div class="col-xl-9 col-md-9 col-9">
                <div class="mb-lg-9 mb-6">
                    <h2 class="h1 fw-bold">
                        Agenda
                    </h2>
                    <p class="mb-0">Soyez à l’affût des dates clés, conférences, et activités marquantes qui
                        enrichissent notre communauté universitaire.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-3">
                <div class="mb-lg-3 mb-6 d-flex justify-content-end">
                    <a href="{{ route('etudiant.agenda') }}" class="text-white ">
                        <h2 class="h3 fw-bold btn-primary btn">Voir plus</h2>
                    </a>
                </div>
            </div>

            <ul class="nav nav-tabs agenda-tabs flex-nowrap overflow-hidden mb-4 justify-content-center" id="eventTypeTabs" role="tablist">
                <li class="nav-item flex-shrink-0" role="presentation">
                    <button class="nav-link active px-4" id="licence1-tab" data-toggle="tab" data-target="#licence1" type="button" role="tab" aria-controls="licence1" aria-selected="true">Licence 1 <span class="d-none d-md-inline">- FIP 1</span></button>
                </li>
                <li class="nav-item flex-shrink-0" role="presentation">
                    <button class="nav-link px-4" id="licence2-tab" data-toggle="tab" data-target="#licence2" type="button" role="tab" aria-controls="licence2" aria-selected="false">Licence 2 <span class="d-none d-md-inline">- FIP 2</span></button>
                </li>
                <li class="nav-item flex-shrink-0" role="presentation">
                    <button class="nav-link px-4" id="licence3-tab" data-toggle="tab" data-target="#licence3" type="button" role="tab" aria-controls="licence3" aria-selected="false">Licence 3 <span class="d-none d-md-inline">Économie - Gestion</span></button>
                </li>
                <li class="nav-item flex-shrink-0" role="presentation">
                    <button class="nav-link px-4" id="master1-tab" data-toggle="tab" data-target="#master1" type="button" role="tab" aria-controls="master1" aria-selected="false">Master 1 <span class="d-none d-md-inline">Économie - Gestion</span></button>
                </li>
                <li class="nav-item flex-shrink-0" role="presentation">
                    <button class="nav-link px-4" id="master2-tab" data-toggle="tab" data-target="#master2" type="button" role="tab" aria-controls="master2" aria-selected="false">Master 2 <span class="d-none d-md-inline">Économie - Gestion</span></button>
                </li>
            </ul>
            
            <div class="tab-content agenda-content" id="eventTypeTabContent">
                <div class="tab-pane fade show active" id="licence1" role="tabpanel" aria-labelledby="licence1-tab">
                    <div class="row g-4">
                        @forelse($events->where('type', 'licence 1') as $event)
                            <div class="col-xl-3 col-md-6 col-12">
                                <article class="card agenda-card h-100 border-0 shadow-sm">
                                    <a href="{{ asset('storage/' . $event->image) }}" class="agenda-card-image">
                                        <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}">
                                    </a>
                                    <div class="card-body d-flex flex-column p-4">
                                        <span class="badge bg-primary align-self-start mb-3">Licence 1</span>
                                        <h3 class="h5 mb-3"><a href="{{ asset('storage/' . $event->image) }}" class="text-dark text-decoration-none">{{ Str::limit($event->title, 65) }}</a></h3>
                                        <p class="text-muted mb-4 flex-grow-1">{{ Str::limit($event->description, 100) }}</p>
                                        <div class="d-flex align-items-center justify-content-between mt-auto">
                                            <small class="text-muted"><i class="fe fe-calendar me-2"></i>{{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}</small>
                                            <a href="{{ asset('storage/' . $event->image) }}" class="btn btn-sm btn-primary" aria-label="Lire {{ $event->title }}">Lire la suite</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @empty
                            <div class="col-12"><div class="agenda-empty text-center p-5 rounded border bg-white"><i class="fe fe-calendar fs-2 text-primary d-block mb-3"></i><p class="mb-0 text-muted">Aucun événement disponible pour Licence 1.</p></div></div>
                        @endforelse
                    </div>
                </div>

                <div class="tab-pane fade" id="licence2" role="tabpanel" aria-labelledby="licence2-tab">
                    <div class="row g-4">
                        @forelse($events->where('type', 'licence 2') as $event)
                            <div class="col-xl-3 col-md-6 col-12">
                                <article class="card agenda-card h-100 border-0 shadow-sm"><a href="{{ asset('storage/' . $event->image) }}" class="agenda-card-image"><img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}"></a><div class="card-body d-flex flex-column p-4"><span class="badge bg-primary align-self-start mb-3">Licence 2</span><h3 class="h5 mb-3"><a href="{{ asset('storage/' . $event->image) }}" class="text-dark text-decoration-none">{{ Str::limit($event->title, 65) }}</a></h3><p class="text-muted mb-4 flex-grow-1">{{ Str::limit($event->description, 100) }}</p><div class="d-flex align-items-center justify-content-between mt-auto"><small class="text-muted"><i class="fe fe-calendar me-2"></i>{{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}</small><a href="{{ asset('storage/' . $event->image) }}" class="btn btn-sm btn-primary">Lire la suite</a></div></div></article>
                            </div>
                        @empty
                            <div class="col-12"><div class="agenda-empty text-center p-5 rounded border bg-white"><i class="fe fe-calendar fs-2 text-primary d-block mb-3"></i><p class="mb-0 text-muted">Aucun événement disponible pour Licence 2.</p></div></div>
                        @endforelse
                    </div>
                </div>

                <div class="tab-pane fade" id="licence3" role="tabpanel" aria-labelledby="licence3-tab">
                    <div class="row g-4">
                        @forelse($events->where('type', 'licence 3') as $event)
                            <div class="col-xl-3 col-md-6 col-12">
                                <article class="card agenda-card h-100 border-0 shadow-sm"><a href="{{ asset('storage/' . $event->image) }}" class="agenda-card-image"><img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}"></a><div class="card-body d-flex flex-column p-4"><span class="badge bg-primary align-self-start mb-3">Licence 3</span><h3 class="h5 mb-3"><a href="{{ asset('storage/' . $event->image) }}" class="text-dark text-decoration-none">{{ Str::limit($event->title, 65) }}</a></h3><p class="text-muted mb-4 flex-grow-1">{{ Str::limit($event->description, 100) }}</p><div class="d-flex align-items-center justify-content-between mt-auto"><small class="text-muted"><i class="fe fe-calendar me-2"></i>{{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}</small><a href="{{ asset('storage/' . $event->image) }}" class="btn btn-sm btn-primary">Lire la suite</a></div></div></article>
                            </div>
                        @empty
                            <div class="col-12"><div class="agenda-empty text-center p-5 rounded border bg-white"><i class="fe fe-calendar fs-2 text-primary d-block mb-3"></i><p class="mb-0 text-muted">Aucun événement disponible pour Licence 3.</p></div></div>
                        @endforelse
                    </div>
                </div>

                <div class="tab-pane fade" id="master1" role="tabpanel" aria-labelledby="master1-tab">
                    <div class="row g-4">
                        @forelse($events->where('type', 'master 1') as $event)
                            <div class="col-xl-3 col-md-6 col-12">
                                <article class="card agenda-card h-100 border-0 shadow-sm"><a href="{{ asset('storage/' . $event->image) }}" class="agenda-card-image"><img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}"></a><div class="card-body d-flex flex-column p-4"><span class="badge bg-primary align-self-start mb-3">Master 1</span><h3 class="h5 mb-3"><a href="{{ asset('storage/' . $event->image) }}" class="text-dark text-decoration-none">{{ Str::limit($event->title, 65) }}</a></h3><p class="text-muted mb-4 flex-grow-1">{{ Str::limit($event->description, 100) }}</p><div class="d-flex align-items-center justify-content-between mt-auto"><small class="text-muted"><i class="fe fe-calendar me-2"></i>{{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}</small><a href="{{ asset('storage/' . $event->image) }}" class="btn btn-sm btn-primary">Lire la suite</a></div></div></article>
                            </div>
                        @empty
                            <div class="col-12"><div class="agenda-empty text-center p-5 rounded border bg-white"><i class="fe fe-calendar fs-2 text-primary d-block mb-3"></i><p class="mb-0 text-muted">Aucun événement disponible pour Master 1.</p></div></div>
                        @endforelse
                    </div>
                </div>

                <div class="tab-pane fade" id="master2" role="tabpanel" aria-labelledby="master2-tab">
                    <div class="row g-4">
                        @forelse($events->where('type', 'master 2') as $event)
                            <div class="col-xl-3 col-md-6 col-12">
                                <article class="card agenda-card h-100 border-0 shadow-sm"><a href="{{ asset('storage/' . $event->image) }}" class="agenda-card-image"><img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}"></a><div class="card-body d-flex flex-column p-4"><span class="badge bg-primary align-self-start mb-3">Master 2</span><h3 class="h5 mb-3"><a href="{{ asset('storage/' . $event->image) }}" class="text-dark text-decoration-none">{{ Str::limit($event->title, 65) }}</a></h3><p class="text-muted mb-4 flex-grow-1">{{ Str::limit($event->description, 100) }}</p><div class="d-flex align-items-center justify-content-between mt-auto"><small class="text-muted"><i class="fe fe-calendar me-2"></i>{{ \Carbon\Carbon::parse($event->created_at)->format('d M Y') }}</small><a href="{{ asset('storage/' . $event->image) }}" class="btn btn-sm btn-primary">Lire la suite</a></div></div></article>
                            </div>
                        @empty
                            <div class="col-12"><div class="agenda-empty text-center p-5 rounded border bg-white"><i class="fe fe-calendar fs-2 text-primary d-block mb-3"></i><p class="mb-0 text-muted">Aucun événement disponible pour Master 2.</p></div></div>
                        @endforelse
                    </div>
                </div>
            </div>

            <style>
                .agenda-tabs { border-bottom: 0; scrollbar-width: thin; }
                .agenda-tabs .nav-link { color: #344054; font-weight: 600; border: 1px solid transparent; border-radius: 20px 20px 20px 20px; white-space: nowrap; }
                .agenda-tabs .nav-link.active { color: var(--bs-primary); background: #fff; border-color: #dee2e6 #dee2e6 #fff; }
                .agenda-card { border-radius: 10px; overflow: hidden; transition: transform .2s ease, box-shadow .2s ease; }
                .agenda-card:hover { transform: translateY(-5px); box-shadow: 0 1rem 2rem rgba(16, 24, 40, .12) !important; }
                .agenda-card-image { height: 210px; overflow: hidden; background: #f4f6f8; }
                .agenda-card-image img { width: 100%; height: 100%; object-fit: cover; transition: transform .35s ease; }
                .agenda-card:hover .agenda-card-image img { transform: scale(1.04); }
                .agenda-card h3 a:hover { color: var(--bs-primary) !important; }
                .agenda-empty { background-image: linear-gradient(135deg, #fff, #f8faf9); }
            </style>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const tabButtons = document.querySelectorAll('#eventTypeTabs .nav-link');
                    const tabPanes = document.querySelectorAll('#eventTypeTabContent .tab-pane');

                    tabButtons.forEach(function (btn) {
                        btn.addEventListener('click', function (e) {
                            e.preventDefault();

                            // Supprimer les classes actives des onglets
                            tabButtons.forEach(function (b) {
                                b.classList.remove('active');
                                b.setAttribute('aria-selected', 'false');
                            });

                            // Masquer tous les contenus
                            tabPanes.forEach(function (pane) {
                                pane.classList.remove('show', 'active');
                            });

                            // Activer l'onglet sélectionné
                            this.classList.add('active');
                            this.setAttribute('aria-selected', 'true');

                            // Afficher le contenu correspondant
                            const target = this.getAttribute('data-target');
                            const pane = document.querySelector(target);

                            if (pane) {
                                pane.classList.add('show', 'active');
                            }
                        });
                    });
                });
            </script>
        </div>
    </div>
</section>
{{-- ajout de la section des évenements --}}
</section>

@if($new_events->isNotEmpty())
<section class="" style="background-color:#E7EEEA;padding-top: 30px; padding-bottom: 30px;">
    <div class="container my-lg-10">
        <div class="row">
            <div class="col-xl-9 col-md-9 col-9">
                <div class="mb-lg-9 mb-6">
                    <h2 class="h1 fw-bold">Événements</h2>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-3">
                <div class="mb-lg-3 mb-6 d-flex justify-content-end">
                    <a href="{{ route('etudiant.agenda') }}" class="text-xhite">
                        <h2 class="h3 fw-bold btn-primary btn">Voir plus</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="table-responsive-xl pb-6">
            <div class="row">
                @foreach ($new_events as $event)
                    <div class="col-md-3 mb-4">
                        <div class="card mb-4 mb-xl-0 card-hover border d-flex flex-column" style="height: 100%;">
                            <!-- Image avec taille uniforme -->
                            <a href="{{ asset('storage/' . $event->image) }}">
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
                @endforeach
            </div>
        </div>
    <div>
</section>
@endif

<section class="">
    <div class="container my-lg-8">
        <div class="row">
            <div class="col-xl-6 col-md-12 col-12">
                <div class="mb-lg-8 mb-6">
                    <h2 class="h1 fw-bold">Mediatheque</h2>
                </div>
            </div>
        </div>
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
<!-- Hero Section -->

<!-- Inclure le CSS de Tiny Slider -->

<!-- Inclure le CSS de Tiny Slider -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">

<!-- Inclure le JS de Tiny Slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        tns({
            container: '#my-slider',
            responsive: {
                640: {
                    items: 2,
                },

                768: {
                    items: 3,
                }
            },

            slideBy: 'page',
            autoplay: false,
            nav: false,
            autoplayButtonOutput: false,

            controlsContainer: '#my-sliderControls',
        });

        tns({
            container: '#eventCarousel',
            responsive: {
                640: {
                    items: 2,
                },

                768: {
                    items: 3,
                }
            },

            slideBy: 'page',
            autoplay: false,
            nav: false,
            autoplayButtonOutput: false,

            controlsContainer: '#eventCarouselControls',
        });
    });
</script>

@endsection

    