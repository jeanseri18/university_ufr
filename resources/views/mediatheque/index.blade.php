@extends('layouts.app')

@section('content')
<div class="container">
<br>

<div class="row">
        <div class="col-md-9">
        <h1>Médiathèque</h1>

        </div>
        <div class="col-md-3">
        <a href="{{ route('mediatheque.create') }}" class="btn btn-primary mb-3">Ajouter un média</a>

        </div>
    </div>
  <br>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table" id="Table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Type</th>
                <th>Fichier</th>
                <th>Date ajoutée</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mediatheques as $media)
                <tr>
                    <td>{{ $media->id }}</td>
                    <td>{{ $media->titre }}</td>
                    <td>{{ $media->type }}</td>
                    <td>
                        @if ($media->fichier)
                            <a href="{{ asset('storage/' . $media->fichier) }}" target="_blank">Voir fichier</a>
                        @else
                            Aucun fichier
                        @endif
                    </td>
                    <td>{{ $media->date_ajoute }}</td>
                    <td>
                        <form action="{{ route('mediatheque.destroy', $media->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</button>
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

