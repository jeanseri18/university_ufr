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
            <label for="type" class="form-label">Type</label>
            <select class="form-control" id="type" name="type" required>
                <option value="image">Image</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="fichier" class="form-label">Fichier</label>
            <input type="file" class="form-control" id="fichier" name="fichier">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
