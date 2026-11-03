@extends('layouts.university')

@section('title', 'Vis Sociale Espace Personnel Administratif et Technique | UFR')

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
    .faq-container {
        max-width: 900px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .faq-item {
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 15px;
    }

    .faq-item h3 {
        color: #2B6635;
        cursor: pointer;
    }

    .faq-item p {
        display: none;
        color: #666;
        margin-top: 5px;
    }
    
</style>

@endpush
@section('content')
<script>
    function toggleAnswer(id) {
        var answer = document.getElementById(id);
        answer.style.display = (answer.style.display === "none" || answer.style.display === "") ? "block" : "none";
    }
</script>

<section class="py-lg-8 py-5 header-bg" style="">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-6 mb-lg-0">
                <div>
                    <h4 class="text-white mb-4">
                        <i class="bi bi-chevron-compact-right text-white rounded-circle "></i>
                        Personnel Administratif  
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">VIE SOCIALE</h1>
                    <p class="pe-lg-10 mb-5">
                        La vie universitaire ne se limite pas aux études et à la recherche. 
                        C'est aussi un espace où nous célébrons ensemble les moments importants de nos enseignants : 
                        mariages, naissances et autres annonces marquantes.
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
        <div class="row g-4 pb-6">
            @forelse ($medias as $media)
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <figure class="card card-hover border h-100 mb-0 overflow-hidden">
                        <a href="{{ asset('storage/' . ltrim($media->image, '/')) }}" target="_blank">
                            <img src="{{ asset('storage/' . ltrim($media->image, '/')) }}" class="card-img-top" alt="{{ $media->titre }}">
                        </a>
                        <figcaption class="card-body">
                            <h3 class="h5 mb-2">{{ $media->titre }}</h3>
                            @if (!empty($media->detail))
                                <p class="truncate-text text-muted mb-2">{{ $media->detail }}</p>
                            @endif
                        </figcaption>
                    </figure>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted mb-0">Aucune image n'est disponible pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

@endsection
