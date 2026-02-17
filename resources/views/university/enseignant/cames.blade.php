@extends('layouts.university')

@section('title', 'Ecoles doctorales | UFR')

@section('content')
<style>
    .card-img-top {
    width: 100%;
    height: 200px; /* Hauteur uniforme */
    object-fit: cover; /* Coupe l’image pour qu’elle garde le bon ratio */
}

.card-body {
    min-height: 180px; /* Assure une hauteur uniforme des cartes */
}

.truncate-text {
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Nombre max de lignes */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}</style>

<section class="my-5 bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">CAMES</small>
            <h2 class="mt-3">Accédez aux informations du CAMES</h2>
            <p class="mb-0">
                Le Conseil Africain et Malgache pour l’Enseignement Supérieur (CAMES) est l’institution qui gère l’avancement des enseignant(e)s et leurs inscriptions sur les différentes listes d’aptitude.
                <br>
                L’enseignant démarre sa carrière universitaire en tant qu’Assistant des Universités et appartient à la catégorie des rangs B. Le pallier suivant est celui de Maître-Assistant des Universités 
                (Rang B) qu’il doit franchir en soumettant son dossier au programme des Comités Consultatifs Interafricains (CCI) organisé par le CAMES.
                <br>
                Une fois Maître-Assistant, l’enseignant doit atteindre le pallier suivant qui est celui de Maître-Assistant (Rang A). Pour ce faire, deux voies d’offrent à lui : la voie courte qui est celle 
                du concours d’Agrégation et la voie longue qui est celle du programme CCI. Une fois Maître de Conférence, l’enseignant se prépare pour le dernier pallier qui est celui de Professeur Titulaire 
                (Rang A) en soumettant son dossier aux CCI.
                <br>
                L’accès à chaque pallier s’accompagne de procédures administratives à remplir.
            </p>
            {{-- <p class="mb-0">Retrouvez les procédures et réglementations du CAMES concernant les CTS, l'agrégation et les démarches administratives.</p> --}}
        </div>
        <div class="row">
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">CTS</h5>
                        <p class="card-text">Découvrez les Comités Techniques Spécialisés (CTS) et leurs fonctions dans le CAMES.</p>
                        <a href="https://www.lecames.org/cts" class="btn btn-primary" target="_blank">
                            <i class="bi bi-box-arrow-up-right"></i> Consulter
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">Agrégation</h5>
                        <p class="card-text">Informez-vous sur le concours d'agrégation du CAMES et les conditions de participation.</p>
                        <a href="https://www.lecames.org/agregation" class="btn btn-primary" target="_blank">
                            <i class="bi bi-box-arrow-up-right"></i> Consulter
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">Procédures Administratives</h5>
                        <p class="card-text">Accédez aux procédures administratives officielles du CAMES.</p>
                        <a href="https://www.lecames.org/procedures-administratives" class="btn btn-primary" target="_blank">
                            <i class="bi bi-box-arrow-up-right"></i> Consulter
                        </a>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>

@endsection