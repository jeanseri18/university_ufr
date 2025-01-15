@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter une Filière</h1>
    <form action="{{ route('filieres.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie</label>
<select name="categorie" id="" class="form-control">
<option value="filiere classique">Filière classique</option>
<option value="filiere pro">Filière pro</option>

</select>        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="" class="form-control">
            <option value=1>Licence</option>
            <option value=2>Master</option>
            <option value=3>Doctorat</option>
            </select>
        </div>
    
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="domaine" class="form-label">Domaine</label>
            <input type="text" name="domaine" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="mention" class="form-label">Mention</label>
            <input type="text" name="mention" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="specialite" class="form-label">Spécialité</label>
            <input type="text" name="specialite" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="grade" class="form-label">Grade</label>
            <input type="text" name="grade" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="duree" class="form-label">Durée (en années)</label>
            <input type="number" name="duree" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="type_parcours" class="form-label">Type de Parcours</label>
            <input type="text" name="type_parcours" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="type_formation" class="form-label">Type de Formation</label>
            <input type="text" name="type_formation" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="objectifs" class="form-label">Objectifs</label>
            <textarea name="objectifs" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="competences" class="form-label">Compétences</label>
            <textarea name="competences" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="debouches" class="form-label">Débouchés</label>
            <textarea name="debouches" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="admission" class="form-label">Admission</label>
            <textarea name="admission" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="contenu_formation" class="form-label">Contenu de la Formation</label>
            <textarea name="contenu_formation" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="controle_connaissances" class="form-label">Contrôle des Connaissances</label>
            <textarea name="controle_connaissances" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="poursuite_etudes" class="form-label">Poursuite des Études</label>
            <textarea name="poursuite_etudes" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
