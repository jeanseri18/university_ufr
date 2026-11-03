@extends('layouts.university')

@section('title', 'Espace Personnel Administratif et Technique | UFR')

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
<script>
    function toggleAnswer(id) {
        var answer = document.getElementById(id);
        answer.style.display = (answer.style.display === "none" || answer.style.display === "") ? "block" : "none";
    }
</script>

<section class="py-lg-8 py-5 header-bg" style="">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-6 mb-lg-0">
                <div>
                    <h4 class="text-white mb-4">
                        <i class="bi bi-chevron-compact-right text-white rounded-circle "></i>
                        Personnel Administratif  
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">PROCEDURES ADMINISTRATIVES</h1>
                    <p class="pe-lg-10 mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus 
                        culpa a explicabo ea repellat aspernatur atque porro alias odit ex 
                        recusandae ut commodi sapiente repudiandae corporis aliquid doloribus, 
                        quasi deserunt ?
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
        {{-- <div class="row mb-5">
            <div class="col-lg-8">
                <span class="text-uppercase fw-semibold text-success ls-md">Guides pratiques</span>
                <h2 class="mt-2 mb-3">Toutes les procédures administratives</h2>
                <p class="text-muted mb-0">Retrouvez les démarches courantes, les pièces à préparer et les contacts utiles pour déposer votre demande.</p>
            </div>
        </div> --}}

        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-3 p-lg-4">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-7">
                        <label for="procedure-search" class="visually-hidden">Rechercher une procédure</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                            <input id="procedure-search" type="search" class="form-control border-start-0" placeholder="Rechercher une procédure, un document…">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <label for="procedure-category" class="visually-hidden">Filtrer par catégorie</label>
                        <select id="procedure-category" class="form-select">
                            <option value="all">Toutes les catégories</option>
                            <option value="personnel">Gestion du personnel</option>
                            <option value="finances">Finances et budgets</option>
                            <option value="logistique">Logistique</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6 procedure-card" data-category="personnel">
                <article class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="badge bg-success-subtle text-success px-3 py-2">Personnel</span>
                            <span class="text-muted small"><i class="bi bi-clock me-1"></i>5 jours</span>
                        </div>
                        <h4 class="h5">Demande d’absence</h4>
                        <p class="text-muted mb-4">Déposer une demande de congé ou d’autorisation d’absence et suivre sa validation.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Formulaire de demande</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Pièce justificative</li>
                        </ul>
                        <button class="btn btn-outline-success mt-auto" type="button" data-bs-toggle="collapse" data-bs-target="#absence-details">
                            Voir les étapes <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </div>
                    <div class="collapse border-top" id="absence-details">
                        <div class="card-body p-4 pt-3">
                            <ol class="mb-0 ps-3">
                                <li class="mb-2">Compléter le formulaire</li>
                                <li class="mb-2">Joindre les justificatifs</li>
                                <li>Transmettre au responsable hiérarchique</li>
                            </ol>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6 procedure-card" data-category="finances">
                <article class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="badge bg-warning-subtle text-warning-emphasis px-3 py-2">Finances</span>
                            <span class="text-muted small"><i class="bi bi-clock me-1"></i>10 jours</span>
                        </div>
                        <h4 class="h5">Remboursement de mission</h4>
                        <p class="text-muted mb-4">Obtenir le remboursement des frais engagés dans le cadre d’une mission professionnelle.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Ordre de mission</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Factures et justificatifs</li>
                        </ul>
                        <button class="btn btn-outline-success mt-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mission-details">
                            Voir les étapes <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </div>
                    <div class="collapse border-top" id="mission-details">
                        <div class="card-body p-4 pt-3">
                            <ol class="mb-0 ps-3">
                                <li class="mb-2">Préparer le dossier de frais</li>
                                <li class="mb-2">Faire viser la demande par le service</li>
                                <li>Déposer les justificatifs à la comptabilité</li>
                            </ol>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6 procedure-card" data-category="logistique">
                <article class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="badge bg-info-subtle text-info-emphasis px-3 py-2">Logistique</span>
                            <span class="text-muted small"><i class="bi bi-clock me-1"></i>3 jours</span>
                        </div>
                        <h4 class="h5">Réservation de matériel</h4>
                        <p class="text-muted mb-4">Réserver du matériel informatique, audiovisuel ou mobilier pour un événement ou une activité.</p>
                        <ul class="list-unstyled small text-muted mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Bon de réservation</li>
                            <li><i class="bi bi-check-circle text-success me-2"></i>Dates et lieu d’utilisation</li>
                        </ul>
                        <button class="btn btn-outline-success mt-auto" type="button" data-bs-toggle="collapse" data-bs-target="#material-details">
                            Voir les étapes <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </div>
                    <div class="collapse border-top" id="material-details">
                        <div class="card-body p-4 pt-3">
                            <ol class="mb-0 ps-3">
                                <li class="mb-2">Choisir le matériel</li>
                                <li class="mb-2">Indiquer les besoins et la période</li>
                                <li>Attendre la confirmation du service</li>
                            </ol>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <div class="alert alert-light border d-flex align-items-center mt-5 mb-0 p-4" role="alert">
            <i class="bi bi-info-circle-fill text-success fs-3 me-3"></i>
            <div>
                <strong>Vous ne trouvez pas la procédure recherchée ?</strong>
                <div class="small text-muted">Contactez le service administratif ou consultez votre responsable de service.</div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const search = document.getElementById('procedure-search');
                const category = document.getElementById('procedure-category');
                const cards = document.querySelectorAll('.procedure-card');

                function filterProcedures() {
                    const query = search.value.toLowerCase().trim();
                    const selectedCategory = category.value;

                    cards.forEach(function (card) {
                        const matchesCategory = selectedCategory === 'all' || card.dataset.category === selectedCategory;
                        const matchesSearch = card.textContent.toLowerCase().includes(query);
                        card.classList.toggle('d-none', !(matchesCategory && matchesSearch));
                    });
                }

                search.addEventListener('input', filterProcedures);
                category.addEventListener('change', filterProcedures);
            });
        </script>

    </div>
</section>

@endsection
