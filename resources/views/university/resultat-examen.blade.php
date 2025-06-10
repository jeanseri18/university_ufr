@extends('layouts.university')

@section('title', 'Résultat d\'examen | UFR')

@section('content')

<section class="my-5 py-5 ">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">Liste des resultats</small>
            <h2 class="mt-3">Resultats des examens</h2>
            <p class="mb-0">Accédez, ci-dessous, aux à vos resultats d'examens de fin d'années.</p>
        </div>
        <div class="row">
        @foreach($resultats as $doc)
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <img src="{{ asset('/assets/images/cover-resultat-exam.png') }}" alt="Image du résultat" class="card-img-top" style="max-height: 180px; object-fit: cover;">
                    <div class="card-body text-">
                        <h5 class="card-title">{{ $doc->titre }}</h5>
                        <p class="card-text">
                            {{ \Illuminate\Support\Str::limit($doc->description, 100) }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-secondary">{{ ucfirst($doc->niveau_etude) }}</span>
                            <span class="badge bg-info">{{ $doc->sessions }}</span>
                            <span class="badge bg-success">{{ ucfirst($doc->type) }}</span>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <a href="{{ asset('storage/' . $doc->pdf) }}" class="btn btn-primary btn-sm" target="_blank">
                                <i class="bi bi-box-arrow-up-right"></i> Consulter
                            </a>
                            <a href="{{ route('resultat-examen.download', $doc) }}" class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>

<section class="my- py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold text-muted">Procès-verbaux</small>
            <h2 class="mt-3">Liste des procès-verbaux</h2>
            <p class="mb-0">Accédez à la liste complète et definitives des différents procèsses verbaux de vos examens de fin de cycle.</p>
        </div>
        <div class="row">
            @foreach($procesVerbaux as $doc)
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <img src="{{ asset('/assets/images/cover-proces-verbal.png') }}" alt="Image du résultat" class="card-img-top" style="max-height: 180px; object-fit: cover;">
                    <div class="card-body text-">
                        <h5 class="card-title">{{ $doc->titre }}</h5>
                        <p class="card-text">
                            {{ \Illuminate\Support\Str::limit($doc->description, 100) }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-secondary">{{ ucfirst($doc->niveau_etude) }}</span>
                            <span class="badge bg-info">{{ $doc->sessions }}</span>
                            <span class="badge bg-success">{{ ucfirst($doc->type) }}</span>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <a href="{{ asset('storage/' . $doc->pdf) }}" class="btn btn-primary btn-sm" target="_blank">
                                <i class="bi bi-box-arrow-up-right"></i> Consulter
                            </a>
                            <a href="{{ route('resultat-examen.download', $doc) }}" class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection