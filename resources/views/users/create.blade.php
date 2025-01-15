@extends('layouts.app')

@section('title', 'Créer un utilisateur')

@section('content')
<div class="container">
    <h1 class="my-4">Créer un nouvel utilisateur</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group mb-3">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group mb-3">
            <label for="password_confirmation">Confirmer le mot de passe</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div class="form-group mb-3">
            <label for="role">Rôle</label>
            <input type="text" class="form-control" id="role" name="role">
        </div>

        <div class="form-group mb-3">
            <label for="classe">Classe</label>
            <input type="text" class="form-control" id="classe" name="classe">
        </div>

        <div class="form-group mb-3">
            <label for="filiere">Filère</label>
            <input type="text" class="form-control" id="filiere" name="filiere">
        </div>

        <button type="submit" class="btn btn-primary">Créer l'utilisateur</button>
    </form>
</div>
@endsection
