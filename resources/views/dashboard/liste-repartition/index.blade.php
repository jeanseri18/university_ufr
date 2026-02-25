@extends('layouts.app')

@push('styles')
<link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.8/b-3.2.0/b-colvis-3.2.0/b-html5-3.2.0/b-print-3.2.0/r-3.0.3/datatables.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-9">
            <h1>Listes des repartitions</h1>
        </div>
        <div class="col-md-3">
            <a href="{{ route('liste-repartition.create') }}" class="btn btn-success">Ajouter une liste</a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <section class="py-4">
        <div class="container">
            <table class="table mt-4" id="Table">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Niveau d'étude</th>
                        <th>Session</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listes as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->niveau_etude }}</td>
                        <td>{{ $item->session }}</td>
                        <td>{{ ucfirst($item->description) }}</td>
                        <td>
                            <a href="{{ route('liste-repartition.edit', $item->id) }}" class="btn btn-warning"><i class="bi bi-pen"></i></a>
                            <a href="{{ route('liste-repartition.download', $item) }}" class="btn btn-secondary"><i class="bi bi-download"></i></a>
                            <form action="{{ route('liste-repartition.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Êtes-vous sûr?')"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

</div>
@endsection

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
