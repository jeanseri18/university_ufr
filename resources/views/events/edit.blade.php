@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier l'événement</h2>

    <form action="{{ url('/events/' . $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $event->title) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $event->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image (optionnelle)</label>
            <input type="file" class="form-control" id="image" name="image">
            @if ($event->image)
                <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" style="max-width: 200px; margin-top: 10px;">
            @endif
        </div>

        <div class="form-group">
            <label for="start_time">Date de début</label>
            <input type="datetime-local" class="form-control" id="start_time" name="start_time" value="{{ old('start_time', $event->start_time->format('Y-m-d\TH:i')) }}" required>
        </div>

        <div class="form-group">
            <label for="end_time">Date de fin</label>
            <input type="datetime-local" class="form-control" id="end_time" name="end_time" value="{{ old('end_time', $event->end_time->format('Y-m-d\TH:i')) }}" required>
        </div>
        <div class="form-group">
            <label for="foruser">Destiné à</label>
            <select class="form-control" id="foruser" name="foruser">
                <option value="">-- Sélectionnez un groupe --</option>
                <option value="etudiant" {{ old('foruser', $event->foruser) == 'etudiant' ? 'selected' : '' }}>Étudiant</option>
                <option value="enseignant" {{ old('foruser', $event->foruser) == 'enseignant' ? 'selected' : '' }}>Enseignant</option>
                <option value="personnel_administratif" {{ old('foruser', $event->foruser) == 'personnel_administratif' ? 'selected' : '' }}>Personnel administratif</option>
                <option value="tout_le_monde" {{ old('foruser', $event->foruser) == 'tout_le_monde' ? 'selected' : '' }}>Tout le monde</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour l'événement</button>
    </form>
</div>
@endsection
