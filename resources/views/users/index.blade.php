@extends('layouts.app')

@section('title', 'Liste des utilisateurs')

@section('content')
<div class="container">
    <h1 class="my-4">Liste des utilisateurs</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Créer un nouvel utilisateur</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Classe</th>
                <th>Filère</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->classe }}</td>
                    <td>{{ $user->filiere }}</td>
                    <td>
                        <!-- Actions à personnaliser (modifier, supprimer) -->
                        <a href="#" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
