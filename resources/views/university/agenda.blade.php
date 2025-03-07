@extends('layouts.university')

<style>
    .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        min-height: 180px;
    }

    .truncate-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

@section('title', 'Evenement | UFR')

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
                <!-- Formulaire de recherche -->
    <form method="GET" action="{{ route('etudiant.agenda') }}" class="mb-4">
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Rechercher un événement" value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Rechercher</button>
        </div>
    </form>
            </form>
          </div>
        </div>
        </div>
        </div>
        </div></div></section>
        <br>
        <br>
<div class="container">
    
   

    <!-- Affichage des événements -->
    <div class="row">
        @foreach ($events as $event)
            <div class="col-md-4 content-item events">
                <div class="card h-100 shadow-sm border-0 card-hover">
                    <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->poste }}">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $event->title }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($event->detail, 100) }}</p>
                        <a href="{{ asset('storage/' . $event->image) }}" class="btn btn-primary stretched-link" target="blank">Voir les détails</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $events->links() }}
    </div>
    <br>
    <br>
</div>

@endsection
