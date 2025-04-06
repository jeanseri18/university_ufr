@extends('layouts.university')

@section('title', 'Espace Personnel Administratif et Technique | UFR')

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
    text-overflow: ellipsis; }
    .faq-container {
        max-width: 900px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .faq-item {
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 15px;
    }

    .faq-item h3 {
        color: #2B6635;
        cursor: pointer;
    }

    .faq-item p {
        display: none;
        color: #666;
        margin-top: 5px;
    }
</style>

<script>
    function toggleAnswer(id) {
        var answer = document.getElementById(id);
        answer.style.display = (answer.style.display === "none" || answer.style.display === "") ? "block" : "none";
    }
</script>
<section class="py-lg-8 py-5" style="color:white; background: linear-gradient(to right, #2B6635, #2B6635);">
    <div class="container my-lg-8">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-6 mb-lg-0">
                <div>
                    <h5 class="text-white mb-4">
                        <i class="fe fe-check icon-xxs icon-shape bg-light-success text-white rounded-circle me-2"></i>
                        NOUS REJOINDRE
                    </h5>
                    <h1 class="display-3 fw-bold mb-3 text-white">REJOIGNEZ-NOUS MAINTENANT</h1>
                    <p class="pe-lg-10 mb-5">
                        Profils d’enseignants : <br>
                        •⁠  ⁠Fonctionnaires <br>
                        •⁠  ⁠Contractuels
                    </p>
                    <a href="#" class="btn bg-black text-white" style="background:black">Postuler Maintenant</a>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <!-- Image ou autre contenu -->
            </div>
        </div>
    </div>
</section>


<section class=""><br>
    <div class="container my-lg-8">
        <div class="row">
            <div class="col-xl-9 col-md-9 col-9">
                <div class="mb-lg-9 mb-6">
                    <h2 class="h1 fw-bold">
                        Communiqué
                        <u class="text-warning"><span class="text-primary"> et documents officiels
                            </span></u>
                    </h2>
                    <p class="mb-0">Restez informé des annonces officielles et des informations essentielles émanant de
                        l’université.

                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-3">
                <div class="mb-lg-3 mb-6">
                                     <a href="{{ route('all.actualite') }}" class="text-xhite">   <h2 class="h3 fw-bold btn-primary btn">
    voir plus
                        <!--u class="text-warning"><span class="text-primary">education webinars</span></u-->
                    </h2></a>

                    </p>
                </div>

            </div>
        </div>
        <div class="table-responsive-xl pb-6 row">
    @foreach ($actualites as $actualite)
        <div class="col-md-3">
            <div class="card mb-4 mb-xl-0 card-hover border d-flex flex-column" style="height: 100%;>
                <!-- Image avec taille uniforme -->
                <a href="{{ route('detail.actualite', $actualite) }}">
                    <img src="{{ asset('storage/' . $actualite->image) }}" class="card-img-top rounded-top-3" alt="{{ $actualite->titre }}">
                </a>

                <div class="card-body d-flex flex-column">
                    <!-- Titre limité en largeur -->
                    <h3 class="mb-3 ">
                        <a href="{{ route('detail.actualite', $actualite) }}" class="text-inherit">
                            {{ Str::limit($actualite->titre, 65) }}
                        </a>
                    </h3>

                    <div class="mb-4">
                        <!-- Texte limité à 3 lignes -->
                        <p class="truncate-text text-muted">{{ Str::limit($actualite->detail, 100) }}</p>

                        <!-- Date en petit -->
                        <small class="text-muted">{{ \Carbon\Carbon::parse($actualite->date_ajoute)->format('d M Y') }}</small>
                    </div>

                    <a href="{{ route('detail.actualite', $actualite) }}" class="btn btn-light-primary text-primary">Continuer la lecture</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

    
    </div>
</section>


<section class="my-5 bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">PROCÉDURES ADMINISTRATIVES</small>
            <h2 class="mt-3">Accédez aux procédures administratives essentielles</h2>
            <p class="mb-0">Retrouvez ici les informations et règlements concernant les institutions publiques et universitaires.</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fonction Publique</h5>
                        <p class="card-text">Accédez au site officiel de la Fonction Publique pour toutes vos démarches.</p>
                        <a href="https://www.fonctionpublique.ci" class="btn btn-primary" target="_blank">
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
                        <a href="https://inscription.mesrs-ci.net/" class="btn btn-primary" target="_blank">
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



<section class="my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="text-center mb-5">
                    <small class="text-uppercase ls-md fw-semibold">VIE SOCIALE</small>
                    <h1 class="mb-3 mt-3">Célébrons les événements marquants</h1>
                    <p class="mb-0 px-lg-6">
                        La vie universitaire ne se limite pas aux études et à la recherche. 
                        C'est aussi un espace où nous célébrons ensemble les moments importants de nos enseignants : 
                        mariages, naissances et autres annonces marquantes.
                    </p>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <!-- Mariages -->
            <div class="col-lg-4 col-md-4 col-12">
                <a href="image/mariage.jpg" class="glightbox rounded-3">
                    <div class="rounded-3 card-lift"
                        style="background-image: url(image/mariage.jpg); background-repeat: no-repeat; height: 350px; background-size: cover">
                    </div>
                </a>
            </div>

            <!-- Naissances -->
            <div class="col-lg-4 col-md-4 col-12">
                <a href="image/naissance.jpg" class="glightbox rounded-3">
                    <div class="rounded-3 card-lift"
                        style="background-image: url(image/naissance.jpg); background-repeat: no-repeat; height: 350px; background-size: cover">
                    </div>
                </a>
            </div>

            <!-- Autres événements -->
            <div class="col-lg-4 col-md-4 col-12">
                <a href="image/autres_evenements.jpg" class="glightbox rounded-3">
                    <div class="rounded-3 card-lift"
                        style="background-image: url(image/autres_evenements.jpg); background-repeat: no-repeat; height: 350px; background-size: cover">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="my-5 bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">OPPORTUNITÉS ET MOBILITÉS</small>
            <h2 class="mt-3">Découvrez les opportunités académiques et professionnelles</h2>
            <p class="mb-0">Trouvez des informations sur les mobilités internationales, les bourses et les offres d'emploi pour le personnel administratif et technique.</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-12 text-center">
                <a href="#" class="btn btn-primary"><i class="bi bi-briefcase"></i> Voir les Opportunités</a>
            </div>
        </div>
    </div>
</section>

@endsection
