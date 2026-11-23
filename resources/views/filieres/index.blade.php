@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-9">
        <h1>Liste des Filières</h1>

        </div>
        <div class="col-md-3">
        <a href="{{ route('filieres.create') }}" class="btn btn-primary mb-3">Ajouter une Filière</a>

        </div>
    </div>
    <br>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered" id="Table">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Domaine</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filieres as $filiere)
            <tr>
                <td>{{ $filiere->id }}</td>
                <td>{{ $filiere->titre }}</td>
                <td>{{ $filiere->domaine }}</td>
                <td>
                    <a href="{{ route('filieres.show', $filiere->id) }}" class="btn btn-info btn-sm">Voir</a>
                    <a href="{{ route('filieres.edit', $filiere->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('filieres.destroy', $filiere->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


@push('styles')
<link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.8/b-3.2.0/b-colvis-3.2.0/b-html5-3.2.0/b-print-3.2.0/r-3.0.3/datatables.min.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.8/b-3.2.0/b-colvis-3.2.0/b-html5-3.2.0/b-print-3.2.0/r-3.0.3/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#Table').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
            ],
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json"
            }
        });
    });
</script>
@endpush


