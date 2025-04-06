@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter une Actualité</h1>
    <form action="{{ route('actualites.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label">Détail</label>
            <textarea name="detail" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="date_ajoute" class="form-label">Date ajoutée</label>
            <input type="date" name="date_ajoute" class="form-control">
        </div>
        <div class="mb-3">
            <label for="foruser" class="form-label">Destiné à</label>
            <select class="form-control" id="foruser" name="foruser">
                <option value="">-- Sélectionnez un groupe --</option>
                <option value="etudiant">Étudiant</option>
                <option value="enseignant">Enseignant</option>
                <option value="personnel_administratif">Personnel administratif</option>
                <option value="tout_le_monde">Tout le monde</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>
@endsection
