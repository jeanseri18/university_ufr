@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un nouveau fichier</h1>
    <br> 
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('resultat-examen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="niveau_etude" class="form-label">Niveau d'étude</label>
            <select class="form-control" id="niveau_etude" name="niveau_etude">
                <option value="">-- Sélectionnez le niveau d'étude --</option>
                <option value="licence 1">Licence 1</option>
                <option value="licence 2">Licence 2</option>
                <option value="licence 3">Licence 3</option>
                <option value="master 1">Master 1</option>
                <option value="master 2">Master 2</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="session" class="form-label">Session de composition</label>
            <input type="text" name="sessions" id="session" class="form-control">
        </div>
        <div class="mb-3">
            <label for="fichier" class="form-label">Fichier pdf</label>
            <input type="file" name="fichier_pdf" id="fichier" class="form-control">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type de fichier (resultat d'examen / PV)</label>
            <select class="form-control" id="type" name="type">
                <option value="">-- Sélectionnez le type --</option>
                <option value="resultat-examen">Resultat d'examen</option>
                <option value="proces-verbal">procès-verbal</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>
@endsection
