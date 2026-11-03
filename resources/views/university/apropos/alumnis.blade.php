@extends('layouts.university')

@section('title', 'Alumnis - Les anciens étudiants | UFR')


@push('styles')
    <style>
        .banner {
            /* background-image: url('{{ asset('images/university/banner-parlons-eco.jpg') }}');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 50px 0; */
            background-image: linear-gradient(to right, #4CAF50, #8BC34A);
            color: white;
            padding: 50px 20px;
            /* text-align: center; */
            border-radius: 10px;
            height: 300px;
        }

        .banner-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: white;
            font-size: 4.5rem;
            margin-bottom: 20px;
        }

        /* Styles pour le conteneur principal */
        .main-container {
            max-width: 1100px;
            margin: 0 auto;
        }

        /* Styles pour chaque bloc de section */
        .section-block {
            display: flex; /* Active Flexbox pour un alignement horizontal */
            align-items: center; /* Centre les éléments verticalement */
            gap: 30px; /* Ajoute un espace entre l'image et le texte */
            background-color: #fff;
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-bottom: 30px; /* Espace entre les deux blocs */
        }

        /* Styles pour l'inversion du layout */
        .reversed-layout {
            flex-direction: row-reverse; /* Inverse l'ordre de l'image et du texte */
            background-color: #f0f3f0; /* Couleur de fond pour le second bloc */
        }

        /* Styles des conteneurs d'image et de contenu */
        .image-container, .content-container {
            flex: 1; /* Permet aux deux conteneurs de prendre une part égale de l'espace */
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 1rem;
        }

        /* Styles du titre */
        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }

        /* Style du titre du second bloc */
        .green-title {
            color: #386641;
        }

        /* Styles du texte */
        .section-text {
            font-size: 1rem;
            color: #6c757d;
            line-height: 1.6;
        }

        /* Styles pour les petits écrans (tablettes et mobiles) */
        @media (max-width: 768px) {
            .section-block {
                flex-direction: column; /* Les blocs s'empilent verticalement */
                text-align: center;
                padding: 20px;
            }
        }

        .header-bg {
            color: white;
            background: linear-gradient(135deg, rgba(43, 102, 53, .96), rgba(56, 102, 65, .92)),
                        linear-gradient(to right, #2B6635, #386641);
            min-height: 26em;
            display: flex;
            align-items: center;
        }

        @media (max-width: 767.98px) {
            .header-bg { min-height: 22em; }
        }
    </style>
    <style>
        .alumni-directory { background: #f8faf8; }
        .alumni-card { transition: transform .2s ease, box-shadow .2s ease; }
        .alumni-card:hover { transform: translateY(-4px); box-shadow: 0 1rem 2rem rgba(43,102,53,.12)!important; }
        .alumni-avatar { width:58px; height:58px; border-radius:50%; display:grid; place-items:center; font-size:1.45rem; font-weight:700; flex-shrink:0; }
        .alumni-item.is-hidden { display:none; }
        .text-white-75 { color: rgba(255,255,255,.82); }
        #alumniNoResults { display:none; }
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
                        A propos
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">Notre réseau d'alumnis</h1>
                    <p class="fs-5 pe-lg-10 mb-5 text-white-75">
                        Rejoignez les anciens étudiants de l'UFR des Sciences Économiques et de Gestion, retrouvez vos camarades et participez à la dynamique de notre communauté.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <!-- Image ou autre contenu -->
            </div>
        </div>
    </div>
</section>


<section class="alumni-directory py-5 py-lg-8">
    <div class="container">
        <div class="row justify-content-between align-items-end mb-4 g-3">
            <div class="col-lg-7">
                <span class="badge rounded-pill text-bg-success mb-3 px-3 py-2">Communauté UFRG SEG</span>
                <h2 class="display-6 fw-bold text-dark mb-3">Retrouvez les anciens de notre faculté</h2>
                <p class="text-muted mb-0">Explorez le réseau des diplômés et restez connecté à l'UFR des Sciences Économiques et de Gestion.</p>
            </div>
            <div class="col-lg-auto">
                <button class="btn btn-success btn-md" type="button" data-bs-toggle="modal" data-bs-target="#alumniRegistrationModal">
                    <i class="bi bi-person-plus-fill me-2"></i>Inscrire un ancien étudiant
                </button>
            </div>
        </div>

        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-4">
                <div class="row g-3 align-items-end">
                    <div class="col-md-8">
                        <label class="form-label fw-semibold" for="alumniSearch">Nom, promotion ou département</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                            <input type="search" class="form-control" id="alumniSearch" placeholder="Ex. : Marie Kouassi, 2020, Économie">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold" for="departmentFilter">Département</label>
                        <select class="form-select form-select-lg" id="departmentFilter">
                            <option value="">Tous les départements</option>
                            <option>Économie</option>
                            <option>Gestion</option>
                            <option>Finance</option>
                            <option>Statistique</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <p class="fw-semibold mb-0"><span id="alumniCount">0</span> ancien(s) étudiant(s)</p>
            <button class="btn btn-link text-success text-decoration-none" id="resetFilters" type="button">Effacer les filtres</button>
        </div>

        <div class="row g-4" id="alumniList">
            <div class="col-12" id="alumniNoResults">
                <div class="text-center border rounded-4 bg-white p-5">
                    <i class="bi bi-search fs-1 text-success"></i>
                    <h3 class="h5 mt-3 mb-2">Aucun ancien étudiant trouvé</h3>
                    <p class="text-muted mb-0">Modifiez votre recherche ou effacez les filtres.</p>
                </div>
        </div>
        @forelse (($alumnis ?? collect()) as $alumni)
        <div class="col-md-6 col-lg-4 alumni-item" data-search="{{ strtolower(($alumni->name ?? $alumni['name']) . ' ' . ($alumni->promotion ?? $alumni['promotion']) . ' ' . ($alumni->department ?? $alumni['department'])) }}" data-department="{{ $alumni->department ?? $alumni['department'] }}">
            <article class="card h-100 border-0 shadow-sm alumni-card">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="alumni-avatar bg-success text-white me-3">{{ strtoupper(substr($alumni->name ?? $alumni['name'], 0, 1)) }}</div>
                        <div>
                            <h3 class="h5 mb-1">{{ $alumni->name ?? $alumni['name'] }}</h3>
                            <span class="text-success small fw-semibold">Promotion {{ $alumni->promotion ?? $alumni['promotion'] }}</span>
                        </div>
                    </div>
                    <p class="text-muted mb-2"><i class="bi bi-building me-2"></i>{{ $alumni->department ?? $alumni['department'] }}</p>
                    <p class="text-muted mb-0"><i class="bi bi-briefcase me-2"></i>{{ $alumni->profession ?? $alumni['profession'] ?? 'Profession non renseignée' }}</p>
                </div>
            </article>
        </div>
        @empty
            @foreach ([
                ['name' => 'Marie Kouassi', 'promotion' => '2020', 'department' => 'Économie', 'profession' => 'Analyste économique'],
                ['name' => 'Jean-Baptiste Koné', 'promotion' => '2019', 'department' => 'Gestion', 'profession' => 'Responsable administratif'],
                ['name' => 'Awa Traoré', 'promotion' => '2021', 'department' => 'Finance', 'profession' => 'Analyste financière'],
                ['name' => 'Moussa Diabaté', 'promotion' => '2018', 'department' => 'Statistique', 'profession' => 'Data analyst'],
                ['name' => 'Fatou Sylla', 'promotion' => '2022', 'department' => 'Gestion', 'profession' => 'Consultante en stratégie'],
                ['name' => 'Yao Serge N’Guessan', 'promotion' => '2017', 'department' => 'Économie', 'profession' => 'Chargé de développement']
            ] as $alumni)
                <div class="col-md-6 col-lg-4 alumni-item" data-search="{{ strtolower($alumni['name'] . ' ' . $alumni['promotion'] . ' ' . $alumni['department']) }}" data-department="{{ $alumni['department'] }}">
                    <article class="card h-100 border-0 shadow-sm alumni-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="alumni-avatar bg-success text-white me-3">{{ strtoupper(substr($alumni['name'], 0, 1)) }}</div>
                                <div>
                                    <h3 class="h5 mb-1">{{ $alumni['name'] }}</h3>
                                    <span class="text-success small fw-semibold">Promotion {{ $alumni['promotion'] }}</span>
                                </div>
                            </div>
                            <p class="text-muted mb-2"><i class="bi bi-building me-2"></i>{{ $alumni['department'] }}</p>
                            <p class="text-muted mb-0"><i class="bi bi-briefcase me-2"></i>{{ $alumni['profession'] }}</p>
                        </div>
                    </article>
                </div>
            @endforeach
        @endforelse
        </div>
    </div>
{{-- </section> --}}

  {{-- <section class="py-5 py-lg-8 bg-light">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-7">
          <span class="text-success fw-semibold">ENSEMBLE, ALLONS PLUS LOIN</span>
          <h2 class="display-6 fw-bold mt-2 mb-3">Nous soutenir</h2>
          <p class="lead text-muted mb-0">Votre soutien aide l'UFR à améliorer ses ressources, ses recherches et son environnement d'apprentissage.</p>
        </div>
        <div class="col-lg-5 text-lg-end">
          <a href="https://www.example.com/don" class="btn btn-success btn-lg px-4"><i class="bi bi-heart-fill me-2"></i>Faire un don en ligne</a>
        </div>
      </div>
    </div>
  </section> --}}

    <div class="modal fade" id="alumniRegistrationModal" tabindex="-1" aria-labelledby="alumniRegistrationTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollabl">
            <div class="modal-content border-0 rounded-4">
                <div class="modal-header border-0 pb-0">
                    <div>
                        <span class="text-success small fw-bold">REJOIGNEZ LE RÉSEAU</span>
                        <h2 class="modal-title h3 fw-bold" id="alumniRegistrationTitle">Inscription d'un ancien étudiant</h2>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <form id="alumniRegistrationForm" class="needs-validation" novalidate>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="alumniName">Nom complet *</label>
                                <input class="form-control" id="alumniName" name="name" required>
                                <div class="invalid-feedback">Veuillez indiquer votre nom.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="alumniEmail">Adresse e-mail *</label>
                                <input class="form-control" type="email" id="alumniEmail" name="email" required>
                                <div class="invalid-feedback">Veuillez saisir une adresse e-mail valide.</div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="alumniPromotion">Promotion *</label>
                                <input class="form-control" type="number" min="1950" max="{{ date('Y') }}" id="alumniPromotion" name="promotion" required>
                            </div>
                            <div class="col-md-8">
                                <label class="form-label" for="alumniDepartment">Département *</label>
                                <select class="form-select" id="alumniDepartment" name="department" required>
                                <option value="">Choisir un département</option>
                                <option>Économie</option><option>Gestion</option><option>Finance</option><option>Statistique</option>
                                </select>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="alumniPhone">Téléphone</label><input class="form-control" type="tel" id="alumniPhone" name="phone"></div>
                            <div class="col-md-6"><label class="form-label" for="alumniProfession">Profession actuelle</label><input class="form-control" id="alumniProfession" name="profession"></div>
                            <div class="col-12"><label class="form-label" for="alumniMessage">Message</label><textarea class="form-control" id="alumniMessage" name="message" rows="3"></textarea></div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 ">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success px-4">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast text-bg-success border-0" id="registrationToast" role="status">
            <div class="d-flex"><div class="toast-body">Votre inscription a été enregistrée. Bienvenue dans le réseau !</div><button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button></div>
        </div>
    </div>

</section>
@endsection



@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('alumniSearch');
    const departmentFilter = document.getElementById('departmentFilter');
    const items = [...document.querySelectorAll('.alumni-item')];
    const counter = document.getElementById('alumniCount');
    const noResults = document.getElementById('alumniNoResults');
    function normalize(value) {
        return value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    }
    function filterAlumnis() {
        const query = normalize(searchInput.value.trim());
        const department = departmentFilter.value;
        let visible = 0;
        items.forEach(function (item) {
        const show = normalize(item.dataset.search).includes(query) && (!department || item.dataset.department === department);
        item.classList.toggle('is-hidden', !show);
        if (show) visible++;
        });
        counter.textContent = visible;
        noResults.style.display = items.length && visible === 0 ? 'block' : 'none';
    }
    searchInput.addEventListener('input', filterAlumnis);
    departmentFilter.addEventListener('change', filterAlumnis);
    document.getElementById('resetFilters').addEventListener('click', function () { searchInput.value = ''; departmentFilter.value = ''; filterAlumnis(); });
    filterAlumnis();
    const form = document.getElementById('alumniRegistrationForm');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        event.stopPropagation();
        if (!form.checkValidity()) { form.classList.add('was-validated'); return; }

        const name = document.getElementById('alumniName').value.trim();
        const promotion = document.getElementById('alumniPromotion').value;
        const department = document.getElementById('alumniDepartment').value;
        const profession = document.getElementById('alumniProfession').value.trim();
        const emptyState = document.querySelector('#alumniList > .col-12:not(#alumniNoResults)');

        if (emptyState) emptyState.remove();

        const card = document.createElement('div');
        card.className = 'col-md-6 col-lg-4 alumni-item';
        card.dataset.search = normalize(name + ' ' + promotion + ' ' + department);
        card.dataset.department = department;
        card.innerHTML = '<article class="card h-100 border-0 shadow-sm alumni-card"><div class="card-body p-4"><div class="d-flex align-items-center mb-3"><div class="alumni-avatar bg-success text-white me-3"></div><div><h3 class="h5 mb-1"></h3><span class="text-success small fw-semibold"></span></div></div><p class="department text-muted mb-2"><i class="bi bi-building me-2"></i></p><p class="profession text-muted mb-0"><i class="bi bi-briefcase me-2"></i></p></div></article>';
        card.querySelector('.alumni-avatar').textContent = name.charAt(0).toUpperCase();
        card.querySelector('h3').textContent = name;
        card.querySelector('.text-success').textContent = 'Promotion ' + promotion;
        card.querySelector('.department').append(document.createTextNode(department));
        card.querySelector('.profession').append(document.createTextNode(profession || 'Profession non renseignée'));

        document.getElementById('alumniList').appendChild(card);
        items.push(card);
        filterAlumnis();

        bootstrap.Modal.getInstance(document.getElementById('alumniRegistrationModal')).hide();
        bootstrap.Toast.getOrCreateInstance(document.getElementById('registrationToast')).show();
        form.reset();
        form.classList.remove('was-validated');
    });
    });
</script>
@endpush
