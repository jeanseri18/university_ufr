@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Ajouter un événement</h2>
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
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="start_time">Date de début</label>
            <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
        </div>

        <div class="form-group">
            <label for="end_time">Date de fin</label>
            <input type="datetime-local" class="form-control" id="end_time" name="end_time" required>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter l'événement</button>
    </form>
</div>
@endsection
