@extends('layouts.university')

@section('title', $actualite->titre)

@section('content')

<section class="py-8">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <!-- Image principale avec une bordure subtile -->
        <div class="text-left mb-5">
          <img src="{{ asset('storage/' . $actualite->image) }}" class="img-fluid rounded shadow-sm" alt="{{ $actualite->titre }}">
        </div>

        <!-- Titre et date avec une typographie légèrement améliorée -->
        <h1 class="fw-bold text-left mb-3">{{ $actualite->titre }}</h1>
        <p class="text-muted text-left mb-4">Publié le {{ \Carbon\Carbon::parse($actualite->date_ajoute)->format('d M Y') }}</p>

        <!-- Contenu de l'actualité avec un espacement amélioré -->
        <div class="text-left mb-5">
          <p class="lead">{{ $actualite->detail }}</p>
        </div>

        <!-- Boutons de partage avec un style plus raffiné -->
        <div class="text-left mb-5">
          <p class="fw-bold mb-3">Partager :</p>
          <div class="d-flex gap-2">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="btn btn-primary btn-sm">
              <i class="fab fa-facebook-f me-2"></i> Facebook
            </a>
            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ $actualite->titre }}" target="_blank" class="btn btn-info btn-sm">
              <i class="fab fa-twitter me-2"></i> Twitter
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $actualite->titre }}" target="_blank" class="btn btn-secondary btn-sm">
              <i class="fab fa-linkedin-in me-2"></i> LinkedIn
            </a>
          </div>
        </div>

        <!-- Bouton retour avec un style simple et élégant -->
        <div class="text-left">
          <a href="{{ route('all.actualite') }}" class="btn btn-outline-dark">
            <i class="fas fa-arrow-left me-2"></i> Retour aux actualités
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection