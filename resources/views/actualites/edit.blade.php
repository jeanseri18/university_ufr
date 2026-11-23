@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier l'Actualité</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('actualites.update', $actualite) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ asset('storage/' . $actualite->image) }}" alt="Image actuelle" width="100">
        </div>
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" value="{{ $actualite->titre }}">
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label">Détail</label>
            <textarea name="detail" class="form-control">{{ $actualite->detail }}</textarea>
        </div>
        <div class="mb-3">
            <label for="date_ajoute" class="form-label">Date ajoutée</label>
            <input type="date" name="date_ajoute" class="form-control" value="{{ old('date_ajoute', $actualite->date_ajoute instanceof \DateTimeInterface ? $actualite->date_ajoute->format('Y-m-d') : \Illuminate\Support\Str::substr((string) $actualite->date_ajoute, 0, 10)) }}">
        </div>
        <div class="mb-3">
            <label for="foruser">Destiné à</label>
            <select class="form-control" id="foruser" name="foruser">
                <option value="">-- Sélectionnez un groupe --</option>
                <option value="etudiant" {{ old('foruser', $actualite->foruser) == 'etudiant' ? 'selected' : '' }}>Étudiant</option>
                <option value="enseignant" {{ old('foruser', $actualite->foruser) == 'enseignant' ? 'selected' : '' }}>Enseignant</option>
                <option value="personnel_administratif" {{ old('foruser', $actualite->foruser) == 'personnel_administratif' ? 'selected' : '' }}>Personnel administratif</option>
                <option value="tout_le_monde" {{ old('foruser', $actualite->foruser) == 'tout_le_monde' ? 'selected' : '' }}>Tout le monde</option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Modifier</button>
    </form>
</div>
@endsection
