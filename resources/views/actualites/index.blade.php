@extends('layouts.app')

@section('content')
<div class="container">
   <br>

    <div class="row">
        <div class="col-md-9">
        <h1>Liste des Actualités</h1>

        </div>
        <div class="col-md-3">
        <a href="{{ route('actualites.create') }}" class="btn btn-primary">Ajouter une actualité</a>

        </div>
    </div>
    <br>
    <table class="table mt-4" id="Table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Détail</th>
                <th>Date ajoutée</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actualites as $actualite)
            <tr>
                <td><img src="{{ asset('storage/' . $actualite->image) }}" alt="Image" width="100"></td>
                <td>{{ $actualite->titre }}</td>
                <td>  {{ Str::limit($actualite->detail, 250) }}</td>
                <td>{{ $actualite->date_ajoute }}</td>
                <td>
                    <a href="{{ route('actualites.edit', $actualite) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('actualites.destroy', $actualite) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Êtes-vous sûr?')">Supprimer</button>
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

