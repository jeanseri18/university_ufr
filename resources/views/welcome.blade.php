@extends('layouts.university')
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
.card-hover:hover {
    transform: scale(1.05);
    transition: all 0.3s ease;
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

</style>
@section('title', 'Acceuil | Ufr ')

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


<section class=""><br>
    <div class="container my-lg-8">
        <div class="row">
            <div class="col-xl-9 col-md-9 col-9">
                <div class="mb-lg-9 mb-6">
                    <h2 class="h1 fw-bold">
                        Communiqués
                        <u class="text-warning"><span class="text-primary"> et documents officiels
                            </span></u>
                    </h2>
                    <p class="mb-0">Restez informés des annonces officielles et des informations essentielles émanant de
                        l’université.

                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-3">
                <div class="mb-lg-3 mb-6">
                                     <a href="{{ route('all.actualite') }}" class="text-xhite">   <h2 class="h3 fw-bold btn-primary btn">
    voir plus
                        <!--u class="text-warning"><span class="text-primary">education webinars</span></u-->
                    </h2></a>

                    </p>
                </div>

            </div>
        </div>
        <div class="table-responsive-xl pb-6 row">
    @foreach ($actualites as $actualite)
        <div class="col-md-4">
            <div class="card mb-4 mb-xl-0 card-hover border d-flex flex-column" style="height: 100%;>
                <!-- Image avec taille uniforme -->
                <a href="{{ route('detail.actualite', $actualite) }}">
                    <img src="{{ asset('storage/' . $actualite->image) }}" class="card-img-top rounded-top-3" alt="{{ $actualite->titre }}">
                </a>

                <div class="card-body d-flex flex-column">
                    <!-- Titre limité en largeur -->
                    <h3 class="mb-3 ">
                        <a href="{{ route('detail.actualite', $actualite) }}" class="text-inherit">
                            {{ Str::limit($actualite->titre, 65) }}
                        </a>
                    </h3>

                    <div class="mb-4">
                        <!-- Texte limité à 3 lignes -->
                        <p class="truncate-text text-muted">{{ Str::limit($actualite->detail, 100) }}</p>

                        <!-- Date en petit -->
                        <small class="text-muted">{{ \Carbon\Carbon::parse($actualite->date_ajoute)->format('d M Y') }}</small>
                    </div>

                    <a href="{{ route('detail.actualite', $actualite) }}" class="btn btn-light-primary text-primary">Continuer la lecture</a>
                </div>
            </div>
        </div>
    @endforeach
</div>


    </div>
</section>

<section class="" style="background-color:#E7EEEA;padding-top: 30px;
padding-bottom: 30px;">
    <div class="container my-lg-10">
        <div class="row">
            <div class="col-xl-9 col-md-9 col-9">
                <div class="mb-lg-9 mb-6">
                    <h2 class="h1 fw-bold">
                        Agenda
                        <!--u class="text-warning"><span class="text-primary">education webinars</span></u-->
                    </h2>
                    <p class="mb-0">Soyez à l’affût des dates clés, conférences, et activités marquantes qui
                        enrichissent notre communauté universitaire.
                    </p>
                </div>

            </div>
            <div class="col-xl-3 col-md-3 col-3">
                <div class="mb-lg-3 mb-6">
                <a href="{{ route('etudiant.agenda') }}" class="text-xhite">    <h2 class="h3 fw-bold btn-primary btn">
                        voir plus
                        <!--u class="text-warning"><span class="text-primary">education webinars</span></u-->
                    </h2></a>
                    </p>
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
        <div class="table-responsive-xl pb-6">
    {{-- <div class="row">
        @if($events->isNotEmpty())
            @foreach ($events as $event)
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
            @endforeach
        @else
            <p>Aucun événement disponible.</p>
        @endif
    </div> --}}
</div>

    </div>
</section>
{{-- ajout de la section des évenements --}}
</section>

<section class="" style="background-color:#E7EEEA;padding-top: 30px;
padding-bottom: 30px;">
    <div class="container my-lg-10">
        <div class="row">
            <div class="col-xl-9 col-md-9 col-9">
                <div class="mb-lg-9 mb-6">
                    <h2 class="h1 fw-bold">
                        Événements
                        <!--u class="text-warning"><span class="text-primary">education webinars</span></u-->
                    </h2>
                    {{-- <p class="mb-0">Soyez à l’affût des dates clés, conférences, et activités marquantes qui
                        enrichissent notre communauté universitaire.

                    </p> --}}
                </div>

            </div>
            <div class="col-xl-3 col-md-3 col-3">
                <div class="mb-lg-3 mb-6">
                <a href="{{ route('etudiant.agenda') }}" class="text-xhite">    <h2 class="h3 fw-bold btn-primary btn">
                        voir plus
                        <!--u class="text-warning"><span class="text-primary">education webinars</span></u-->
                    </h2></a>
                    </p>
                </div>

            </div>
        </div>
        <div class="table-responsive-xl pb-6">
    <div class="row">
        @if($new_events->isNotEmpty())
            @foreach ($new_events as $event)
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
            @endforeach
        @else
            <p>Aucun événement disponible.</p>
        @endif
    </div>
</div>

    </div>
</section>

<section class="">
    <div class="container my-lg-8">
        <div class="row">
            <div class="col-xl-6 col-md-12 col-12">
                <div class="mb-lg-8 mb-6">
                    <h2 class="h1 fw-bold">
                        Mediatheque
                        <!--u class="text-warning"><span class="text-primary">education webinars</span></u-->
                    </h2>
                    <!--p class="lead mb-0">Online webinars are amazing opportunities to have fun and learn.</p-->
                </div>
            </div>
        </div>
        <div class="table-responsive-xl pb-6 row"> 
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

    </div></section>
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


@endsection
