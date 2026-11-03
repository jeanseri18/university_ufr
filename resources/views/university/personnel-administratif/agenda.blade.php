@extends('layouts.university')

@section('title', 'Agenda Personnel Administratif | UFR')

@push('styles')
   <style>
    .header-bg {
        color:white; 
        background: linear-gradient(to right, #2B6635, #2B6635); 
        height: 26em
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
                            Personnel Administratif  
                        </h4>
                        <h1 class="display-3 fw-bold mb-3 text-white">Agenda</h1>
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


    <section class=""><br>
        <div class="container my-lg-8">
            <div class="table-responsive-xl pb-6 row">
                
            @forelse ($events as $actualite)
                <div class="col-sm-6 col-lg-4 col-xl-3 mb-4">
                    <article class="card agenda-card h-100 border-0 shadow-sm overflow-hidden">
                        <a href="{{ route('detail.actualite', $actualite) }}" class="agenda-card__image position-relative">
                            <img src="{{ asset('storage/' . $actualite->image) }}"
                                 class="card-img-top"
                                 alt="{{ $actualite->titre }}">
                            <span class="agenda-card__date">
                                <strong>{{ \Carbon\Carbon::parse($actualite->date_ajoute)->format('d') }}</strong>
                                {{ \Carbon\Carbon::parse($actualite->date_ajoute)->translatedFormat('M') }}
                            </span>
                        </a>

                        <div class="card-body d-flex flex-column p-4">
                            <p class="text-uppercase fw-semibold small text-success mb-2">Événement</p>
                            <h3 class="h5 mb-3">
                                <a href="{{ route('detail.actualite', $actualite) }}" class="text-dark text-decoration-none">
                                    {{ Str::limit($actualite->titre, 65) }}
                                </a>
                            </h3>

                            <p class="truncate-text text-muted mb-4">
                                {{ Str::limit(strip_tags($actualite->detail), 100) }}
                            </p>

                            <a href="{{ route('detail.actualite', $actualite) }}"
                               class="btn btn-outline-success mt-auto align-self-start">
                                Voir l'événement <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col-12">
                    <div class="text-center bg-light rounded-4 p-5">
                        <i class="bi bi-calendar3 fs-1 text-success"></i>
                        <h3 class="h5 mt-3">Aucun événement prévu</h3>
                        <p class="text-muted mb-0">Les prochains événements apparaîtront ici.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </section>

@endsection
