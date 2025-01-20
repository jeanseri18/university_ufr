@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier l'Actualité</h1>
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
     
        <button type="submit" class="btn btn-warning">Modifier</button>
    </form>
</div>
@endsection
