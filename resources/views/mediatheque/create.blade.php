@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un média</h1>
    <form action="{{ route('mediatheque.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>
        <div class="mb-3">
            <label for="type_page" class="form-label">Catégorie / Page </label>
            <select class="form-control" id="type_page" name="type_page" required>
                <option value="a-propos">A propos</option>
                <option value="etudiant">Etudiant</option>
                <option value="enseignant">Enseignant</option>
                <option value="personnel-administratif">Personnel administratif</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type média</label>
            <select class="form-control" id="type" name="type" required>
                <option value="image">Image</option>
                <option value="video">Vidéo</option>
                <option value="audio">Audio</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="fichier" class="form-label">Fichier</label>
            <input type="file" class="form-control" id="fichier" name="fichier">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="05"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
