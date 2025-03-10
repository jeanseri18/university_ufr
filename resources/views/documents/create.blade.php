@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Ajouter un Document</h1>

    <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-control @error('type') is-invalid @enderror" id="type" name="type" required>
                <option value="" disabled selected>Choisissez un type</option>
                <option value="Etudiant" {{ old('type') == 'Etudiant' ? 'selected' : '' }}>  Liste d'Étudiant</option>
                <option value="resultat" {{ old('type') == 'resultat' ? 'selected' : '' }}>resultat des examens</option>
            </select>
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" value="{{ old('titre') }}" required>
            @error('titre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pdf" class="form-label">Fichier PDF</label>
            <input type="file" class="form-control @error('pdf') is-invalid @enderror" id="pdf" name="pdf" required>
            @error('pdf')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="details" class="form-label">Détails</label>
            <textarea class="form-control @error('details') is-invalid @enderror" id="details" name="details" rows="4" required>{{ old('details') }}</textarea>
            @error('details')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Ajouter le Document</button>
    </form>
</div>
@endsection
