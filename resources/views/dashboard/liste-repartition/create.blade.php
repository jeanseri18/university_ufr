@extends('layouts.app')


@section('content')
<div class="container">
    <h1>Ajouter une liste de repartition</h1>
    <form action="{{ route('liste-repartition.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="niveau_etude" class="form-label">Type de page</label>
            <select class="form-select" id="niveau_etude" name="niveau_etude" required>
                <option value="licence 1">Licence 1</option>
                <option value="licence 2">Licence 2</option>
                <option value="licence 3">Licence 3</option>
                <option value="master 1">Master 1</option>
                <option value="master 2">Master 2</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="session" class="form-label">Session</label>
            <input type="text" class="form-control" id="session" name="session" required>
        </div>
        <div class="mb-3">
            <label for="type_page" class="form-label">Type de page</label>
            <select class="form-select" id="type_page" name="type_page" required>
                <option value="etudiant">Étudiant</option>
                <option value="enseignant">Enseignant</option>
                <option value="administratif">Administratif</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="file_path" class="form-label">Fichier (PDF, DOCX, etc.)</label>
            <input type="file" class="form-control" id="file_path" name="file_path">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection