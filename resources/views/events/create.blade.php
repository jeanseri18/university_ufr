@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Ajouter un Agenda</h2>
    @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="form-group mb-3">
            <label for="start_time">Date de début</label>
            <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
        </div>

        <div class="form-group mb-3">
            <label for="end_time">Date de fin</label>
            <input type="datetime-local" class="form-control" id="end_time" name="end_time" required>
        </div>
        <div class="mb-3 form-floating">
            {{-- <label for="type" class="form-label">Nieau / Classe</label> --}}
            <select class="form-control" id="type" name="type" aria-label="Floating label select">
                <option value="">-- Sélectionnez la classe --</option>
                <option value="licence 1">Licence 1</option>
                <option value="licence 2">Licence 2</option>
                <option value="licence 3">Licence 3</option>
                <option value="master 1">Master 1</option>
                <option value="master 2">Master 2</option>
            </select>
            <label for="type">Nieau / Classe (pour les emplois du temps)</label>
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
        <button type="submit" class="btn btn-primary">Ajouter l'événement</button>
    </form>
</div>
@endsection
