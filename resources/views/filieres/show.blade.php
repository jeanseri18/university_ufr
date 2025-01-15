@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de la Filière</h1>
    <p><strong>Type :</strong> {{ $filiere->type }}</p>
    <p><strong>Catégorie :</strong> {{ $filiere->categorie }}</p>
    <p><strong>Titre :</strong> {{ $filiere->titre }}</p>
    <p><strong>Domaine :</strong> {{ $filiere->domaine }}</p>
    <p><strong>Objectifs :</strong> {{ $filiere->objectifs }}</p>
    <!-- Ajoutez les autres champs ici -->
    <a href="{{ route('filieres.index') }}" class="btn btn-secondary">Retour</a>
</div>
@endsection
