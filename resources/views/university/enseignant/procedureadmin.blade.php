@extends('layouts.university')

@section('title', 'Ecoles doctorales | UFR')

@section('content')

<section class="my-5 bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">Procédures Administratives</small>
            <h2 class="mt-3">Accédez aux procédures administratives essentielles</h2>
            <p class="mb-0">Retrouvez ici les informations et règlements concernant les institutions publiques et universitaires.</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fonction Publique</h5>
                        <p class="card-text">Accédez au site officiel de la Fonction Publique pour toutes vos démarches.</p>
                        <a href="https://www.fonctionpublique.gouv.ci/index.php/front-page/navigator/accueil#" class="btn btn-primary" target="_blank">
                            <i class="bi bi-box-arrow-up-right"></i> Consulter
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">MESRS</h5>
                        <p class="card-text">Visitez le site du Ministère de l'Enseignement Supérieur et de la Recherche Scientifique.</p>
                        <a href="https://www.enseignement.gouv.ci/accueil" class="btn btn-primary" target="_blank">
                            <i class="bi bi-box-arrow-up-right"></i> Consulter
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">UFHB</h5>
                        <p class="card-text">Accédez aux ressources et services administratifs de l'Université Félix Houphouët-Boigny.</p>
                        <a href="https://w.univ-fhb.edu.ci/" class="btn btn-primary" target="_blank">
                            <i class="bi bi-box-arrow-up-right"></i> Consulter
                        </a>
                    </div>
                </div>
            </div>
            @foreach($docs as $doc)
        <div class="col-md-4 col-12 mb-4">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $doc->titre }}</h5>
                    <p class="card-text">
                        {{ \Illuminate\Support\Str::limit($doc->details, 100) }}
                    </p>
                    <a href="{{ asset('storage/' . $doc->fichier) }}" class="btn btn-primary" target="_blank">
                        <i class="bi bi-box-arrow-up-right"></i> Consulter
                    </a>
                </div>
            </div>
        </div>
    @endforeach
            
        </div>
    </div>
</section>

@endsection