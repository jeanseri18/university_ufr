@extends('layouts.university')

@section('title', 'Opportunités et Mobilité Personnel Administratif | UFR')

@push('styles')
   <style>
    .header-bg {
        color:white; 
        background: linear-gradient(to right, #2B6635, #2B6635); 
        height: 26em
    }

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
    }
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

@endpush
@section('content')

<section class="py-lg-8 py-5 header-bg" style="">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-6 mb-lg-0">
                <div>
                    <h4 class="text-white mb-4">
                        <i class="bi bi-chevron-compact-right text-white rounded-circle "></i>
                        Personnel Administratif  
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">OPPORTUNITÉS ET MOBILITÉ</h1>
                    <p class="pe-lg-10 mb-5 text-white">
                        Découvrez les opportunités de recrutement, les dispositifs de formation et les possibilités de mobilité qui accompagnent l'évolution professionnelle du personnel administratif.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <!-- Image ou autre contenu -->
            </div>
        </div>
    </div>
</section>


<section class="my-5 py-5">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-8">
                <span class="text-uppercase ls-md fw-semibold text-success">Évolution professionnelle</span>
                <h2 class="mt-3 mb-3">Opportunités pour le personnel administratif</h2>
                <p class="mb-0 text-muted">Construisez votre parcours au sein de l'université grâce à des offres, des formations et des missions adaptées à vos compétences.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <article class="card h-100 border-0 shadow-sm card-lift"><div class="card-body p-4">
                    <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-4" style="width: 56px; height: 56px;"><i class="bi bi-briefcase fs-3 text-white"></i></div>
                    <h3 class="h4 mb-3">Postes à pourvoir</h3><p class="text-muted">Consultez les offres internes et candidatez aux fonctions correspondant à votre profil et à vos ambitions.</p>
                    <a href="#" class="fw-semibold text-success text-decoration-none">Voir les offres <i class="bi bi-arrow-right ms-1"></i></a>
                </div></article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="card h-100 border-0 shadow-sm card-lift"><div class="card-body p-4">
                    <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-4" style="width: 56px; height: 56px;"><i class="bi bi-mortarboard fs-3 text-white"></i></div>
                    <h3 class="h4 mb-3">Développement des compétences</h3><p class="text-muted">Accédez à des ateliers, certifications et parcours de formation pour renforcer vos savoir-faire professionnels.</p>
                    <a href="#" class="fw-semibold text-success text-decoration-none">Découvrir les formations <i class="bi bi-arrow-right ms-1"></i></a>
                </div></article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="card h-100 border-0 shadow-sm card-lift"><div class="card-body p-4">
                    <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-4" style="width: 56px; height: 56px;"><i class="bi bi-person-check fs-3 text-white"></i></div>
                    <h3 class="h4 mb-3">Accompagnement de carrière</h3><p class="text-muted">Bénéficiez d'un accompagnement personnalisé pour valoriser vos compétences et préparer vos prochaines étapes.</p>
                    <a href="#" class="fw-semibold text-success text-decoration-none">Être accompagné <i class="bi bi-arrow-right ms-1"></i></a>
                </div></article>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container py-lg-4">
        <div class="row align-items-end mb-5">
            <div class="col-lg-8">
                <span class="text-uppercase ls-md fw-semibold text-success">Mobilité professionnelle</span>
                <h2 class="mt-3 mb-3">Élargissez vos horizons</h2>
                <p class="mb-0 text-muted">La mobilité permet de découvrir de nouveaux services, métiers et environnements, tout en mettant vos expériences au service de l'université.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-6"><article class="card border-0 shadow-sm h-100"><div class="card-body p-4 p-lg-5">
                <span class="badge text-bg-success mb-3">Mobilité interne</span><h3 class="h4 mb-3">Changer de service ou de fonction</h3>
                <p class="text-muted mb-4">Explorez les possibilités de mutation ou de réorientation au sein des différentes composantes de l'université.</p>
                <ul class="list-unstyled mb-4"><li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Mutations entre services</li><li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Recrutements sur postes ouverts</li><li><i class="bi bi-check-circle-fill text-success me-2"></i>Échanges de missions</li></ul>
                <a href="#" class="btn btn-success">Consulter la mobilité interne</a>
            </div></article></div>
            <div class="col-lg-6"><article class="card border-0 shadow-sm h-100"><div class="card-body p-4 p-lg-5">
                <span class="badge text-bg-success mb-3">Mobilité externe</span><h3 class="h4 mb-3">Collaborer au-delà de l'UFR</h3>
                <p class="text-muted mb-4">Participez à des dispositifs nationaux ou internationaux favorisant l'échange, l'apprentissage et la coopération.</p>
                <ul class="list-unstyled mb-4"><li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Programmes inter-universitaires</li><li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Mobilités administratives partenaires</li><li><i class="bi bi-check-circle-fill text-success me-2"></i>Projets et missions temporaires</li></ul>
                <a href="#" class="btn btn-outline-success">Découvrir les mobilités externes</a>
            </div></article></div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="rounded-4 bg-success text-white p-4 p-lg-5 d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-4">
            <div>
                <span class="text-white-70 text-uppercase ls-md fw-semibold">Besoin d'informations ?</span>
                <h2 class="h3 mt-2 mb-2 text-white">Préparez votre prochain projet professionnel</h2>
                <p class="mb-0 text-white-60">Les ressources humaines vous accompagnent dans votre démarche de mobilité et d'évolution de carrière.</p>
            </div>
            <a href="#" class="btn btn-light flex-shrink-0 px-4">Contacter les RH</a>
        </div>
    </div>
</section>

@endsection
