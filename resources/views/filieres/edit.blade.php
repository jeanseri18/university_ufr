@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier une Filière</h1>
    <form action="{{ route('filieres.update', $filiere->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie</label>
            <select name="categorie" id="categorie" class="form-control">
                <option value="filiere classique" {{ $filiere->categorie == 'filiere classique' ? 'selected' : '' }}>Filière classique</option>
                <option value="filiere pro" {{ $filiere->categorie == 'filiere pro' ? 'selected' : '' }}>Filière pro</option>
            </select>
            @error('categorie')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type" class="form-control">
                <option value="1" {{ $filiere->type == 1 ? 'selected' : '' }}>Licence</option>
                <option value="2" {{ $filiere->type == 2 ? 'selected' : '' }}>Master</option>
                <option value="3" {{ $filiere->type == 3 ? 'selected' : '' }}>Doctorat</option>
            </select>
            @error('type')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" value="{{ old('titre', $filiere->titre) }}" required>
            @error('titre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="domaine" class="form-label">Domaine</label>
            <input type="text" name="domaine" class="form-control" value="{{ old('domaine', $filiere->domaine) }}" required>
            @error('domaine')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="mention" class="form-label">Mention</label>
            <input type="text" name="mention" class="form-control" value="{{ old('mention', $filiere->mention) }}" required>
            @error('mention')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="specialite" class="form-label">Spécialité</label>
            <input type="text" name="specialite" class="form-control" value="{{ old('specialite', $filiere->specialite) }}" required>
            @error('specialite')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="grade" class="form-label">Grade</label>
            <input type="text" name="grade" class="form-control" value="{{ old('grade', $filiere->grade) }}" required>
            @error('grade')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="duree" class="form-label">Durée (en années)</label>
            <input type="number" name="duree" class="form-control" value="{{ old('duree', $filiere->duree) }}" required>
            @error('duree')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type_parcours" class="form-label">Type de Parcours</label>
            <input type="text" name="type_parcours" class="form-control" value="{{ old('type_parcours', $filiere->type_parcours) }}" required>
            @error('type_parcours')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type_formation" class="form-label">Type de Formation</label>
            <input type="text" name="type_formation" class="form-control" value="{{ old('type_formation', $filiere->type_formation) }}" required>
            @error('type_formation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="objectifs" class="form-label">Objectifs</label>
            <textarea name="objectifs" class="form-control" rows="3" required>{{ old('objectifs', $filiere->objectifs) }}</textarea>
            @error('objectifs')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="competences" class="form-label">Compétences</label>
            <textarea name="competences" class="form-control" rows="3" required>{{ old('competences', $filiere->competences) }}</textarea>
            @error('competences')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="debouches" class="form-label">Débouchés</label>
            <textarea name="debouches" class="form-control" rows="3" required>{{ old('debouches', $filiere->debouches) }}</textarea>
            @error('debouches')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="admission" class="form-label">Admission</label>
            <textarea name="admission" class="form-control" rows="3" required>{{ old('admission', $filiere->admission) }}</textarea>
            @error('admission')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenu_formation" class="form-label">Contenu de la Formation</label>
            <textarea name="contenu_formation" class="form-control" rows="3" required>{{ old('contenu_formation', $filiere->contenu_formation) }}</textarea>
            @error('contenu_formation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="controle_connaissances" class="form-label">Contrôle des Connaissances</label>
            <textarea name="controle_connaissances" class="form-control" rows="3" required>{{ old('controle_connaissances', $filiere->controle_connaissances) }}</textarea>
            @error('controle_connaissances')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="poursuite_etudes" class="form-label">Poursuite des Études</label>
            <textarea name="poursuite_etudes" class="form-control" rows="3" required>{{ old('poursuite_etudes', $filiere->poursuite_etudes) }}</textarea>
            @error('poursuite_etudes')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection
