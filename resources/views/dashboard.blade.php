@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 text-start">Tableau de Bord</h1>

    <div class="row">
        <!-- successrmations principales -->
        <div class="col-md-4">
            <div class="card bg-success text-white p-3">
                <div class="text-start">
                    <h3>Actualités</h3>
                    <p>{{ $actualites }} articles</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white p-3">
                <div class="text-start">
                    <h3>Documents</h3>
                    <p>{{ $documents }} fichiers</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white p-3">
                <div class="text-start">
                    <h3>Événements</h3>
                    <p>{{ $events }} événements</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card bg-success text-white p-3">
                <div class="text-start">
                    <h3>Filières</h3>
                    <p>{{ $filieres }} programmes</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white p-3">
                <div class="text-start">
                    <h3>Médiathèque</h3>
                    <p>{{ $mediatheques }} fichiers</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white p-3">
                <div class="text-start">
                    <h3>Offres d'emploi</h3>
                    <p>{{ $jobs }} offres</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Affichage des visiteurs -->
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card bg-success text-white p-3">
                <div class="text-start">
                    <h3>Visiteurs Journaliers</h3>
                    <p>{{ $visiteursJournalier }} visiteurs aujourd'hui</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white p-3">
                <div class="text-start">
                    <h3>Visiteurs Mensuel</h3>
                    <p>{{ $visiteursMensuels }} visiteurs cette année</p>
                </div>
            </div>
        </div>

    <!-- Graphique des visiteurs -->

    <div class="col-md-4">
            <div class="card bg-success text-white p-3">
                <div class="text-start">
            <h3>Visiteurs Annuels</h3>
            <p>{{ $visiteursAnnuel }} visiteurs cette année</p>
            </div>
        </div>
    </div>
</div>

@endsection
