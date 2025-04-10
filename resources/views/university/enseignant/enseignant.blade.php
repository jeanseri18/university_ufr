@extends('layouts.university')

@section('title', 'Ecoles doctorales | UFR')

@section('content')
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
}</style>

<section class="my-5 py-5">
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
</section>


@endsection