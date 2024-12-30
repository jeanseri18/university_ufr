@extends('layouts.university')

@section('title', 'Programmes internationaux | UFR')

@section('content')


<section class="my-5 py-5 ">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">Nos Filières Professionnelles</small>
            <h2 class="mt-3">Explorez nos filières professionnelles</h2>
            <p class="mb-0">Découvrez les formations qui vous ouvriront les portes de votre futur professionnel. Chaque programme est conçu pour vous donner les compétences et connaissances nécessaires pour exceller dans votre domaine.</p>
        </div>
        <div class="row g-4">
            <!-- Filière Développement Web -->
            <div class="col-md-3 col-12">
                <div class="card shadow border-0">
                    <img src="https://fakeimg.pl/400x250/808080/ffffff/?text=Dev+Web" class="card-img-top" alt="Développement Web">
                    <div class="card-body">
                        <h5 class="card-title">Développement Web</h5>
                        <p class="card-text">Apprenez à créer des sites web dynamiques et interactifs avec des technologies modernes telles que HTML, CSS, JavaScript et plus encore. Maîtrisez le développement front-end et back-end.</p>
                        <a href="filiere-web.html" class="btn btn-primary">Découvrir cette filière</a>
                    </div>
                </div>
            </div>
            <!-- Filière Marketing Digital -->
            <div class="col-md-3 col-12">
                <div class="card shadow border-0">
                    <img src="https://fakeimg.pl/400x250/808080/ffffff/?text=Marketing+Digital" class="card-img-top" alt="Marketing Digital">
                    <div class="card-body">
                        <h5 class="card-title">Marketing Digital</h5>
                        <p class="card-text">Explorez le monde du marketing digital, des réseaux sociaux à la gestion de campagnes publicitaires en ligne. Apprenez à utiliser les outils pour optimiser la visibilité des entreprises sur Internet.</p>
                        <a href="filiere-marketing.html" class="btn btn-primary">Explorer cette filière</a>
                    </div>
                </div>
            </div>
            <!-- Filière Gestion de Projet -->
            <div class="col-md-3 col-12">
                <div class="card shadow border-0">
                    <img src="https://fakeimg.pl/400x250/808080/ffffff/?text=Gestion+Projet" class="card-img-top" alt="Gestion de Projet">
                    <div class="card-body">
                        <h5 class="card-title">Gestion de Projet</h5>
                        <p class="card-text">Acquérez les compétences pour planifier, exécuter et contrôler des projets. Apprenez à travailler avec des équipes et à gérer les ressources et les risques pour assurer le succès des projets.</p>
                        <a href="filiere-gestion-projet.html" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <!-- Filière Ressources Humaines -->
            <div class="col-md-3 col-12">
                <div class="card shadow border-0">
                    <img src="https://fakeimg.pl/400x250/808080/ffffff/?text=Ressources+Humaines" class="card-img-top" alt="Ressources Humaines">
                    <div class="card-body">
                        <h5 class="card-title">Ressources Humaines</h5>
                        <p class="card-text">Maîtrisez les compétences clés pour gérer les talents d'une organisation : recrutement, formation, gestion des conflits et gestion de la performance des employés.</p>
                        <a href="filiere-rh.html" class="btn btn-primary">Découvrir cette filière</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection