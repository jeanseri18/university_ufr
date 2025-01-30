@extends('layouts.university')

@section('title', 'Actualité | UFR')

@section('content')

<section class="py-8">
  <div class="container">
    <div class="row">
      <div class="offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 col-md-12 col-12">
        <div class="text-center mb-3">
          <h1 class="display-2 fw-bold">Rechercher une information</h1>
        </div>
<!-- Centrer le formulaire -->
<div class=" justify-content-center">
    <form class="row text-center justify-content-center" id="searchForm">
        <div class="mb-3 col-12 col-md-8">
            <input type="text" class="form-control" placeholder="Rechercher..." id="searchInput">
        </div>
        <div class="mb-3 col-auto">
            <button class="btn btn-primary" type="submit">Rechercher</button>
        </div>
    </form>
</div>


        <!-- Boutons de filtre -->
        <div class="text-center my-4">
          <button class="btn btn-outline-primary filter-btn" data-filter="all">Tous</button>
          <button class="btn btn-outline-primary filter-btn" data-filter="actualites">Actualités</button>
          <button class="btn btn-outline-primary filter-btn" data-filter="jobs">Jobs</button>
          <button class="btn btn-outline-primary filter-btn" data-filter="mediatheque">Médiathèque</button>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row" id="contentContainer">
    <!-- Actualités -->
    @foreach ($actualites as $actualite)
      <div class="col-md-4 content-item actualites">
        <div class="card mb-4 card-hover border">
          <img src="{{ asset('storage/' . $actualite->image) }}" class="card-img-top" alt="{{ $actualite->titre }}">
          <div class="card-body">
            <h5 class="card-title">{{ $actualite->titre }}</h5>
            <p class="card-text text-truncate">{{ $actualite->detail }}</p>
            <a href="{{ route('detail.actualite', $actualite) }}" class="btn btn-light-primary text-primary">Lire plus</a>
          </div>
        </div>
      </div>
    @endforeach

    <!-- Jobs -->
    @foreach ($jobs as $job)
      <div class="col-md-4 content-item jobs">
        <div class="card mb-4 card-hover border">
          <img src="{{ asset('storage/' . $job->image) }}" class="card-img-top" alt="{{ $job->poste }}">
          <div class="card-body">
            <h5 class="card-title">{{ $job->poste }}</h5>
            <p class="card-text text-truncate">{{ $job->detail }}</p>
            <a href="#" class="btn btn-light-primary text-primary">Voir l'offre</a>
          </div>
        </div>
      </div>
    @endforeach

    <!-- Médiathèque -->
    @foreach ($mediatheques as $media)
      <div class="col-md-4 content-item mediatheque">
        <div class="card mb-4 card-hover border">
          <div class="card-body">
            <h5 class="card-title">{{ $media->titre }}</h5>
            @if ($media->type == 'image')
              <img src="{{ asset('storage/' . $media->fichier) }}" class="img-fluid" alt="{{ $media->titre }}">
            @elseif ($media->type == 'video')
              <video class="img-fluid" controls>
                <source src="{{ asset('storage/' . $media->fichier) }}" type="video/mp4">
              </video>
            @elseif ($media->type == 'audio')
              <audio controls>
                <source src="{{ asset('storage/' . $media->fichier) }}" type="audio/mpeg">
              </audio>
            @endif
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Filtrage des éléments
    document.querySelectorAll(".filter-btn").forEach(button => {
      button.addEventListener("click", function() {
        let filter = this.getAttribute("data-filter");
        document.querySelectorAll(".content-item").forEach(item => {
          if (filter === "all" || item.classList.contains(filter)) {
            item.style.display = "block";
          } else {
            item.style.display = "none";
          }
        });
      });
    });

    // Recherche en direct
    document.getElementById("searchInput").addEventListener("input", function() {
      let searchTerm = this.value.toLowerCase();
      document.querySelectorAll(".content-item").forEach(item => {
        if (item.textContent.toLowerCase().includes(searchTerm)) {
          item.style.display = "block";
        } else {
          item.style.display = "none";
        }
      });
    });
  });
</script>

@endsection
