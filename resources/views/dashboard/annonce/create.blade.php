@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter une annonce</h1>
    <br> 
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('annonce.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" value="{{ old('titre') }}" name="titre" id="titre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="page_cible" class="form-label">Page cible</label>
            <select class="form-control" id="page_cible" name="page_cible">
                <option value="">-- Sélectionnez la page cible --</option>
                <option value="accueil">Accueil</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="fichier" class="form-label">Fichier pdf</label>
            <input type="file" name="fichier_pdf" id="fichier" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description / Contenu d'acroche</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>
@endsection
