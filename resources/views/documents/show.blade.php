@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Détails du Document</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $document->titre }}</h5>
            <p><strong>Type:</strong> {{ $document->type }}</p>
            <p><strong>Détails:</strong> {{ $document->details }}</p>
            <p><strong>Fichier PDF:</strong> <a href="{{ Storage::url($document->pdf) }}" target="_blank">Télécharger</a></p>
        </div>
    </div>

    <a href="{{ route('documents.index') }}" class="btn btn-secondary mt-3">Retour à la Liste</a>
</div>
@endsection
