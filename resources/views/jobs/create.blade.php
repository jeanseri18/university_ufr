@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un job</h1>
    <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="entreprise" class="form-label">Entreprise</label>
            <input type="text" class="form-control" id="entreprise" name="entreprise" required>
        </div>
        <div class="mb-3">
            <label for="poste" class="form-label">Poste</label>
            <input type="text" class="form-control" id="poste" name="poste" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label">Détail</label>
            <textarea class="form-control" id="detail" name="detail" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
