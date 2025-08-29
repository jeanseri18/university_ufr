@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Poste</h1>
    <form action="{{ route('parlons-eco.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" id="titre" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Photo de couverture</label>
            <input type="file" name="cover" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" rows="8" class="form-control" id="description"></textarea>
        </div>
        {{-- <div class="mb-3">
            <label for="date_ajoute" class="form-label">Date ajoutée</label>
            <input type="date" name="date_ajoute" class="form-control">
        </div> --}}
        <div class="mb-3">
            <label for="status" class="form-label">Statut du poste</label>
            <select class="form-control" id="status" name="status">
                <option value="">-- Sélectionnez le statut --</option>
                <option value="draft">Brouillon</option>
                <option value="published">Publier</option>
                <option value="archived">Archiver</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
        <a href="{{ route('parlons-eco.index') }}" type="reset" class="btn btn-secondary">Retour</a>
    </form>
</div>
@endsection
