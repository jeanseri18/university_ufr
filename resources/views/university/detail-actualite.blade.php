@extends('layouts.university')

@section('title', $actualite->titre)

@section('content')

<section class="py-8">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <!-- Image principale -->
        <div class="text-left mb-4">
          <img src="{{ asset('storage/' . $actualite->image) }}" class="img-fluid rounded" alt="{{ $actualite->titre }}">
        </div>

        <!-- Titre et date -->
        <h1 class="fw-bold text-left">{{ $actualite->titre }}</h1>
        <p class="text-muted text-left">Publié le {{ \Carbon\Carbon::parse($actualite->date_ajoute)->format('d M Y') }}</p>

        <!-- Contenu de l'actualité -->
        <div class="mt-4">
          <p class="lead">{{ $actualite->detail }}</p>
        </div>

        <!-- Boutons de partage -->
        <div class="text-left mt-4">
          <p class="fw-bold">Partager :</p>
          <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="btn btn-primary me-2">
            <i class="fab fa-facebook-f"></i> Facebook
          </a>
          <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ $actualite->titre }}" target="_blank" class="btn btn-info me-2">
            <i class="fab fa-twitter"></i> Twitter
          </a>
          <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $actualite->titre }}" target="_blank" class="btn btn-secondary">
            <i class="fab fa-linkedin-in"></i> LinkedIn
          </a>
        </div>

        <!-- Bouton retour -->
        <div class="text-left mt-5">
          <a href="{{ route('all.actualite') }}" class="btn btn-outline-dark">Retour aux actualités</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
