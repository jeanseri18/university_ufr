@extends('layouts.app')

@push('style')
    
@endpush

@section('content')
<section class="py-4">
    <div class="container">
        <h1>Modifier la liste de repartition</h1>
        <form action="{{ route('liste-repartition.update', $liste->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $liste->id }}">
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $liste->title }}" required>
            </div>
            <div class="mb-3">
            <label for="niveau_etude" class="form-label">Type de page</label>
            <select class="form-select" id="niveau_etude" name="niveau_etude" required>
                <option value="licence 1" {{ $liste->niveau_etude == 'licence 1' ? 'selected' : '' }}>Licence 1</option>
                <option value="licence 2" {{ $liste->niveau_etude == 'licence 2' ? 'selected' : '' }}>Licence 2</option>
                <option value="licence 3" {{ $liste->niveau_etude == 'licence 3' ? 'selected' : '' }}>Licence 3</option>
                <option value="master 1" {{ $liste->niveau_etude == 'master 1' ? 'selected' : '' }}>Master 1</option>
                <option value="master 2" {{ $liste->niveau_etude == 'master 2' ? 'selected' : '' }}>Master 2</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="session" class="form-label">Session</label>
            <input type="text" class="form-control" id="session" name="session" value="{{ $liste->session }}" required>
        </div>
            <div class="mb-3">
                <label for="type_page" class="form-label">Type de page</label>
                <select class="form-select" id="type_page" name="type_page" required>
                    <option value="etudiant" {{ $liste->type_page == 'etudiant' ? 'selected' : '' }}>Étudiant</option>
                    <option value="enseignant" {{ $liste->type_page == 'enseignant' ? 'selected' : '' }}>Enseignant</option>
                    <option value="administratif" {{ $liste->type_page == 'administratif' ? 'selected' : '' }}>Administratif</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="file_path" class="form-label">Fichier (PDF, DOCX, etc.)</label>
                <input type="file" class="form-control" id="file_path" name="file_path">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $liste->description }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
</section>
@endsection