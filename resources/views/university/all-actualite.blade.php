@extends('layouts.university')
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
@section('title', 'Actualité | UFR')

@section('content')

<section class="py-8 bg-success">
  <div class="container">
    <div class="row">
      <div class="offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 col-md-12 col-12">
        <!-- Titre principal -->
        <div class="text-center mb-5">
          <h1 class="display-4 fw-bold text-white">Rechercher une information</h1>
          <p class="lead text-muted text-white">Trouvez rapidement les actualités, offres d'emploi et ressources multimédias.</p>
        </div>

        <!-- Formulaire de recherche centré -->
        <div class="row justify-content-center mb-5">
          <div class="col-md-8">
            <form id="searchForm">
              <div class="input-group">
                <input type="text" class="form-control form-control-lg" placeholder="Rechercher..." id="searchInput">
                <button class="btn btn-primary btn-lg" type="submit">Rechercher</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Boutons de filtre -->
        <!-- Boutons de filtre -->
<div class="text-center mb-5">
  <div class="btn-group" role="group">
    <button class="btn btn-outline-primary filter-btn active" data-filter="all">Tous</button>
    <button class="btn btn-outline-primary filter-btn text-white" data-filter="actualites">Actualités</button>
    <button class="btn btn-outline-primary filter-btn text-white" data-filter="jobs">Jobs</button>
    <button class="btn btn-outline-primary filter-btn text-white" data-filter="mediatheque">Médiathèque</button>
    <button class="btn btn-outline-primary filter-btn text-white" data-filter="events">Examen et programme</button>
  </div>
</div>

      </div>
    </div>
  </div>
</section>
<br><br>
<!-- Contenu des cartes -->
<div class="container">
  <div class="row gy-4" id="contentContainer">
    <!-- Actualités -->
    @foreach ($actualites as $actualite)
      <div class="col-md-4 content-item actualites">
        <div class="card h-100 shadow-sm border-0 card-hover">
          <img src="{{ asset('storage/' . $actualite->image) }}" class="card-img-top" alt="{{ $actualite->titre }}">
          <div class="card-body">
            <h5 class="card-title fw-bold">{{ $actualite->titre }}</h5>
            <p class="card-text text-muted">{{ Str::limit($actualite->detail, 100) }}</p>
            <a href="{{ route('detail.actualite', $actualite) }}" class="btn btn-primary stretched-link">Lire plus</a>
          </div>
        </div>
      </div>
    @endforeach

    <!-- Jobs -->
    @foreach ($jobs as $job)
      <div class="col-md-4 content-item jobs">
        <div class="card h-100 shadow-sm border-0 card-hover">
          <img src="{{ asset('storage/' . $job->image) }}" class="card-img-top" alt="{{ $job->poste }}">
          <div class="card-body">
            <h5 class="card-title fw-bold">{{ $job->poste }}</h5>
            <p class="card-text text-muted">{{ Str::limit($job->detail, 100) }}</p>
            <a href="#" class="btn btn-primary stretched-link">Voir l'offre</a>
          </div>
        </div>
      </div>
    @endforeach

    @foreach ($events as $event)
      <div class="col-md-4 content-item events">
        <div class="card h-100 shadow-sm border-0 card-hover">
          <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->poste }}">
          <div class="card-body">
            <h5 class="card-title fw-bold">{{ $event->poste }}</h5>
            <p class="card-text text-muted">{{ Str::limit($event->detail, 100) }}</p>
            <a href="{{ asset('storage/' . $event->image) }}" class="btn btn-primary stretched-link" target="blank">Voir  les details</a>
          </div>
        </div>
      </div>
    @endforeach

    <!-- Médiathèque -->
    @foreach ($mediatheques as $media)
      <div class="col-md-4 content-item mediatheque">
        <div class="card h-100 shadow-sm border-0 card-hover">
          <div class="card-body">
            <h5 class="card-title fw-bold">{{ $media->titre }}</h5>
            @if ($media->type == 'image')
              <img src="{{ asset('storage/' . $media->fichier) }}" class="img-fluid rounded mb-3" alt="{{ $media->titre }}">
            @elseif ($media->type == 'video')
              <video class="img-fluid rounded mb-3" controls>
                <source src="{{ asset('storage/' . $media->fichier) }}" type="video/mp4">
              </video>
            @elseif ($media->type == 'audio')
              <audio controls class="w-100 mb-3">
                <source src="{{ asset('storage/' . $media->fichier) }}" type="audio/mpeg">
              </audio>
            @endif
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
<br>
<br>
<br>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const contentItems = document.querySelectorAll(".content-item");
    const searchInput = document.getElementById("searchInput");

    // Fonction de filtrage
    function filterItems(filter) {
      contentItems.forEach(item => {
        if (filter === "all" || item.classList.contains(filter)) {
          item.classList.remove("d-none"); // Afficher l'élément
        } else {
          item.classList.add("d-none"); // Masquer l'élément
        }
      });
    }

    // Fonction de recherche
    function searchItems(searchTerm) {
      contentItems.forEach(item => {
        if (item.textContent.toLowerCase().includes(searchTerm.toLowerCase())) {
          item.classList.remove("d-none");
        } else {
          item.classList.add("d-none");
        }
      });
    }

    // Ajouter l'événement sur chaque bouton de filtre
    filterButtons.forEach(button => {
      button.addEventListener("click", function() {
        // Changer le bouton actif
        filterButtons.forEach(btn => btn.classList.remove("active"));
        this.classList.add("active");

        // Appliquer le filtre
        let filter = this.getAttribute("data-filter");
        filterItems(filter);
      });
    });

    // Ajouter l'événement pour la recherche en direct
    searchInput.addEventListener("input", function() {
      searchItems(this.value);
    });
  });
</script>


@endsection