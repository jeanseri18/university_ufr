@extends('layouts.university')

@section('title', 'Promotions Personnel Administratif | UFR')

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

<section class="py-lg-8 py-5 header-bg" style="">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-6 mb-lg-0">
                <div>
                    <h4 class="text-white mb-4">
                        <i class="bi bi-chevron-compact-right text-white rounded-circle "></i>
                        Personnel Administratif  
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">PROMOTIONS</h1>
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


<section class="my-5 py-5">
    <div class="container">
        <div class="row gy-4">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-lg-4 col-md-6 col-12">
                    <article class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('assets/images/promotion.jpg') }}"
                             class="card-img-top" alt="Promotion du personnel administratif">
                        <div class="card-body p-4">
                            <span class="badge mb-3" style="background-color: #2B6635;">Promotion 2025</span>
                            <h2 class="h4">Promotion du personnel administratif</h2>
                            <p class="text-muted mb-0 truncate-text">
                                L’UFR félicite les agents du personnel administratif promus à de nouvelles fonctions.
                                Cette promotion reconnaît leur engagement, leur professionnalisme et leur contribution
                                au développement des missions administratives et académiques de l’université.
                            </p>
                        </div>
                    </article>
                </div>
            @endfor
        </div>
    </div>
</section>

@endsection
