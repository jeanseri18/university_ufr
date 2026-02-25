@extends('layouts.university')

@section('title', 'Ecoles doctorales | UFR')

@section('content')

<section class="py-lg-8 py-5 header-bg" style="">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-6 mb-lg-0">
                <div>
                    <h4 class="text-white mb-4">
                        <i class="bi bi-chevron-compact-right text-white rounded-circle "></i>
                        Enseignant
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">PROCEDURE ADMINISTRATIVE</h1>
                    <p class="pe-lg-10 mb-5">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos 
                        doloremque nisi ad dolores illum eum voluptas unde quia ea placeat mollitia 
                        voluptate veniam accusantium, provident dolor! A earum asperiores consequuntur!
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <!-- Image ou autre contenu -->
            </div>
        </div>
    </div>
</section>



<section class="bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">Procédures Administratives</small>
            <h2 class="mt-3">Accédez aux procédures administratives essentielles</h2>
            {{-- <p class="mb-0">Retrouvez ici les informations et règlements concernant les institutions publiques et universitaires.</p> --}}
            <p class="mb-0">
                Vous venez d’être recruté ou vous avez été promu ? Vous avez certaines démarches administratives à faire au niveau de l’Université 
                Félix Houphouët Boigny, du Ministère de l’Enseignement Supérieur et de la Recherche Scientifique (MESRS) et du Ministère de la Fonction 
                Publique (MFP)
            </p>
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