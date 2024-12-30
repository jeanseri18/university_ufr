@extends('layouts.university')

@section('title', 'Ecoles doctorales | UFR')

@section('content')
<br>
<section class="my-xl-9 my-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-5 col-lg-6 col-12">
                <div class="mb-4">
                    <small class="text-uppercase ls-md fw-semibold">Nouvelle Bachelière</small>
                    <h2 class="h1 mt-4 mb-3">Préparez votre avenir universitaire avec succès</h2>
                    <p class="mb-3">
                        En tant que nouvelle bachelière, vous entrez dans une phase passionnante de votre vie.
                        Nous sommes là pour vous accompagner avec des conseils, des ressources, et des opportunités
                        qui vous aideront à réussir cette transition vers l'université.
                    </p>
                    <p class="mb-0">
                        Découvrez comment naviguer dans ce nouvel environnement, développer vos compétences et
                        profiter pleinement de votre vie universitaire.
                    </p>
                </div>

                <a href="./guide-bacheliere.html" class="icon-link icon-link-hover">
                    En savoir plus
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </a>
            </div>
            <div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6 col-12">
                        <a href="#!">
                            <div class="rounded-3 card-lift" style="
                                background-image: url(https://fakeimg.pl/300x200/808080/ffffff/?text=Prof+1);
                                background-repeat: no-repeat;
                                height: 386px;
                                background-size: cover;
                            "></div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <a href="#!">
                            <div class="mb-4 rounded-3 card-lift" style="
                                background-image: url(https://fakeimg.pl/300x200/808080/ffffff/?text=Prof+1);
                                background-repeat: no-repeat;
                                height: 180px;
                                background-size: cover;
                            "></div>
                        </a>
                        <a href="#!">
                            <div class="mb-2 rounded-3 card-lift" style="
                                background-image: url(https://fakeimg.pl/300x200/808080/ffffff/?text=Prof+1);
                                background-repeat: no-repeat;
                                height: 180px;
                                background-size: cover;
                            "></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<section>
    <div class="container">
        <div class="row border-top border-bottom">
            <div class="col-md-4 border-end-md border-bottom border-bottom-md-0">
                <div class="text-center py-lg-5 p-4">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-book text-primary" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.586 3.444-.586 1.38 0 2.63.276 3.244.638a.5.5 0 0 0 .528 0c.615-.362 1.865-.638 3.244-.638 1.29 0 2.559.216 3.444.586A.5.5 0 0 1 15 3.293V14.5a.5.5 0 0 1-.757.429c-.885-.37-2.154-.586-3.443-.586-1.38 0-2.63.276-3.244.638a.5.5 0 0 1-.528 0c-.615-.362-1.865-.638-3.244-.638-1.29 0-2.559.216-3.444.586A.5.5 0 0 1 1 14.5V3.293a.5.5 0 0 1 .243-.465Z"/>
                        </svg>
                    </div>
                    <div>
                        <h4>Guides et Conseils</h4>
                        <p class="mb-0">Découvrez nos guides sur la gestion du temps, la préparation académique et bien plus encore.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border-end-md border-bottom border-bottom-md-0">
                <div class="text-center py-lg-5 p-4">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill-check text-primary" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            <path d="M6.216 14a.5.5 0 0 1-.464-.314C5.078 12.07 3.362 11 2 11a.5.5 0 0 1 0-1c1.691 0 3.754 1.15 4.582 3.229A.5.5 0 0 1 6.216 14Z"/>
                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708L12.707 9l-1.646-1.646a.5.5 0 0 1 .708-.708L13 7.793l2.146-2.147a.5.5 0 0 1 .708 0Z"/>
                        </svg>
                    </div>
                    <div>
                        <h4>Soutien personnalisé</h4>
                        <p class="mb-0">Nous offrons un accompagnement pour répondre à vos questions et besoins spécifiques.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center py-lg-5 p-4">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-calendar-event text-primary" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h.5A1.5 1.5 0 0 1 15 2.5v11A1.5 1.5 0 0 1 13.5 15h-11A1.5 1.5 0 0 1 1 13.5v-11A1.5 1.5 0 0 1 2.5 1H3V.5a.5.5 0 0 1 .5-.5ZM2 4v9.5a.5.5 0 0 0 .5.5H5V4H2Zm11 0H6v10h7.5a.5.5 0 0 0 .5-.5V4ZM7 7.5v1h1v-1H7ZM9 7.5v1h1v-1H9Zm1 2.5H9v1h1v-1Zm-3-1H7v1h1v-1ZM5 7.5H4v1h1v-1Z"/>
                        </svg>
                    </div>
                    <div>
                        <h4>Événements et Ateliers</h4>
                        <p class="mb-0">Participez à des ateliers pratiques et à des rencontres pour développer vos compétences.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="text-center mb-8">
                    <small class="text-uppercase ls-md fw-semibold">La vie à l'université</small>
                    <h1 class="mb-3 mt-3">Vivre pleinement son expérience universitaire</h1>
                    <p class="mb-0 px-lg-6">
                        La vie à l'université est un mélange d'opportunités, d'apprentissage et de nouvelles expériences. 
                        En tant qu'étudiant, vous avez l'opportunité de rencontrer des gens venus de tous horizons, 
                        de participer à des événements passionnants, et de développer des compétences professionnelles 
                        tout en profitant d'un environnement stimulant.
                    </p>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <!-- Image 1 -->
            <div class="col-lg-4 col-md-4 col-12">
                <a href="https://fakeimg.pl/300x200/808080/ffffff/?text=Prof+1" class="glightbox rounded-3">
                    <div class="rounded-3 card-lift"
                        style="background-image: url(https://fakeimg.pl/300x200/808080/ffffff/?text=Prof+1); background-repeat: no-repeat; height: 350px; background-size: cover">
                    </div>
                </a>
            </div>

            <!-- Image 2 -->
            <div class="col-lg-4 col-md-4 col-12">
                <a href="https://fakeimg.pl/300x200/808080/ffffff/?text=Prof+1" class="glightbox rounded-3">
                    <div class="rounded-3 card-lift"
                        style="background-image: url(https://fakeimg.pl/300x200/808080/ffffff/?text=Prof+1); background-repeat: no-repeat; height: 350px; background-size: cover">
                    </div>
                </a>
            </div>

            <!-- Image 3 -->
            <div class="col-lg-4 col-md-4 col-12">
                <a href="https://fakeimg.pl/300x200/808080/ffffff/?text=Prof+1" class="glightbox rounded-3">
                    <div class="rounded-3 card-lift"
                        style="background-image: url(https://fakeimg.pl/300x200/808080/ffffff/?text=Prof+1); background-repeat: no-repeat; height: 350px; background-size: cover">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="my-5 py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">Accompagnement</small>
            <h2 class="mt-3">Un accompagnement personnalisé pour réussir</h2>
            <p class="mb-0">Nos programmes d'accompagnement sont conçus pour vous aider à chaque étape de votre parcours académique. Profitez de notre réseau d'anciennes étudiantes et de mentors pour vous guider.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 col-12">
                <div class="card shadow border-0">
                    <img src="https://fakeimg.pl/400x250/808080/ffffff/?text=M1" class="card-img-top" alt="Accompagnement 1">
                    <div class="card-body">
                        <h5 class="card-title">Mentorat académique</h5>
                        <p class="card-text">Bénéficiez de l'accompagnement de mentor(e)s expérimentés pour vous guider dans votre parcours académique et vous aider à atteindre vos objectifs.</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card shadow border-0">
                    <img src="https://fakeimg.pl/400x250/808080/ffffff/?text=M2" class="card-img-top" alt="Accompagnement 2">
                    <div class="card-body">
                        <h5 class="card-title">Ateliers pratiques</h5>
                        <p class="card-text">Participez à nos ateliers pratiques sur la gestion du temps, la prise de notes et la préparation aux examens. Ces sessions sont animées par des expertes.</p>
                        <a href="#" class="btn btn-primary">Rejoindre un atelier</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card shadow border-0">
                    <img src="https://fakeimg.pl/400x250/808080/ffffff/?text=M3" class="card-img-top" alt="Accompagnement 3">
                    <div class="card-body">
                        <h5 class="card-title">Réseau d'anciennes étudiantes</h5>
                        <p class="card-text">Rejoignez notre réseau d'anciennes étudiantes et bénéficiez de leurs conseils et de leur soutien tout au long de vos études.</p>
                        <a href="#" class="btn btn-primary">Rejoindre le réseau</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5 py-5 ">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">Ressources et Téléchargements</small>
            <h2 class="mt-3">Téléchargez nos ressources essentielles</h2>
            <p class="mb-0">Accédez aux documents importants pour votre parcours académique, tels que des guides, des formulaires, et des informations sur nos programmes.</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">Guide de l'étudiante</h5>
                        <p class="card-text">Téléchargez notre guide complet pour vous accompagner dans vos démarches administratives et académiques.</p>
                        <a href="assets/guide_etudiante.pdf" class="btn btn-primary" download>
                            <i class="bi bi-download"></i> Télécharger
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">Fiche d'inscription</h5>
                        <p class="card-text">Téléchargez et remplissez la fiche d'inscription pour vous inscrire à nos programmes académiques.</p>
                        <a href="assets/fiche_inscription.pdf" class="btn btn-primary" download>
                            <i class="bi bi-download"></i> Télécharger
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">Calendrier Académique</h5>
                        <p class="card-text">Consultez notre calendrier académique pour connaître les dates importantes de l'année universitaire.</p>
                        <a href="assets/calendrier_academique.pdf" class="btn btn-primary" download>
                            <i class="bi bi-download"></i> Télécharger
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manuel de l'étudiant(e)</h5>
                        <p class="card-text">Obtenez un accès direct à notre manuel de l'étudiant(e) pour découvrir les règles et attentes de notre établissement.</p>
                        <a href="assets/manuel_etudiant.pdf" class="btn btn-primary" download>
                            <i class="bi bi-download"></i> Télécharger
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">Charte de l'étudiant(e)</h5>
                        <p class="card-text">Téléchargez la charte qui définit les engagements et responsabilités des étudiant(e)s au sein de notre établissement.</p>
                        <a href="assets/charte_etudiant.pdf" class="btn btn-primary" download>
                            <i class="bi bi-download"></i> Télécharger
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">Brochure des Programmes</h5>
                        <p class="card-text">Découvrez l'ensemble de nos programmes académiques en téléchargeant notre brochure complète.</p>
                        <a href="assets/brochure_programmes.pdf" class="btn btn-primary" download>
                            <i class="bi bi-download"></i> Télécharger
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5 py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold text-muted">Ressources en ligne</small>
            <h2 class="mt-3">Liens utiles</h2>
            <p class="mb-0">Voici une sélection de liens qui vous aideront dans votre parcours universitaire. Explorez les ressources pour faciliter vos démarches et réussir vos études.</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="https://www.etudiant.gouv.fr/" class="card text-decoration-none text-dark shadow-sm border-0">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-bookmark-check-fill fs-3 text-primary me-3"></i>
                        <div>
                            <h5 class="card-title mb-1">Site officiel des étudiants</h5>
                            <p class="card-text mb-0">Retrouvez toutes les informations essentielles pour les étudiants, de l'inscription à la bourse, en passant par le logement.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="https://www.campusfrance.org/" class="card text-decoration-none text-dark shadow-sm border-0">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-globe2 fs-3 text-primary me-3"></i>
                        <div>
                            <h5 class="card-title mb-1">Campus France</h5>
                            <p class="card-text mb-0">Tout savoir sur les études en France, avec des informations sur les démarches administratives, les visas, et plus encore.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="https://www.legifrance.gouv.fr/" class="card text-decoration-none text-dark shadow-sm border-0">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-file-earmark-text fs-3 text-primary me-3"></i>
                        <div>
                            <h5 class="card-title mb-1">Légifrance</h5>
                            <p class="card-text mb-0">Accédez à tous les textes législatifs, décrets et arrêtés officiels en France, une ressource importante pour les étudiantes en droit.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="https://www.orientation.com/" class="card text-decoration-none text-dark shadow-sm border-0">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-person-check-fill fs-3 text-primary me-3"></i>
                        <div>
                            <h5 class="card-title mb-1">Orientation.com</h5>
                            <p class="card-text mb-0">Une plateforme complète pour vous aider à choisir votre orientation scolaire, avec des outils et des conseils pour réussir.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<br>
<!--FAQ pour Nouvelles Bachelières-->
<section class="mb-xl-9 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                <div class="text-center mb-7">
                    <h2>Questions Fréquemment Posées</h2>
                    <p class="mb-0">
                        Vous ne trouvez pas la réponse à votre question ?
                        <br />
                        Contactez notre 
                        <a href="#" class="text-primary">support</a>.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                <div class="accordion" id="accordionExample">
                    <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                            <a href="#"
                                class="text-reset d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="false"
                                aria-controls="collapseOne">
                                Quels sont les services offerts pour les nouvelles bachelières ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseOne"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Nous offrons des conseils d'orientation, des formations, et un accompagnement personnalisé pour aider les nouvelles bachelières à réussir leur transition vers l'université ou le monde professionnel.
                            </div>
                        </div>
                    </div>

                    <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                            <a href="#"
                                class="text-reset d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="true"
                                aria-controls="collapseTwo">
                                Comment puis-je m'inscrire à vos programmes ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseTwo"
                            class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Vous pouvez vous inscrire via notre formulaire en ligne disponible sur notre site. Si vous avez besoin d’aide, notre équipe est là pour vous guider.
                            </div>
                        </div>
                    </div>
                    <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                            <a href="#"
                                class="text-reset d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree">
                                Offrez-vous des bourses ou des aides financières ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseThree"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Oui, nous travaillons avec des partenaires pour offrir des bourses et des aides financières aux étudiantes méritantes et en besoin.
                            </div>
                        </div>
                    </div>
                    <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                            <a href="#"
                                class="text-reset d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFour"
                                aria-expanded="false"
                                aria-controls="collapseFour">
                                Proposez-vous un accompagnement personnalisé ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseFour"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Absolument. Chaque étudiante bénéficie d’un accompagnement adapté à ses objectifs académiques et professionnels.
                            </div>
                        </div>
                    </div>
                    <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                            <a href="#"
                                class="text-reset d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseFive"
                                aria-expanded="false"
                                aria-controls="collapseFive">
                                Quels sont les critères pour participer ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseFive"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Nos programmes sont ouverts à toutes les bachelières, avec une priorité pour celles récemment diplômées ou en transition vers l’enseignement supérieur.
                            </div>
                        </div>
                    </div>
                    <div class="border mb-2 rounded-3 p-3">
                        <h2 class="h5 mb-0">
                            <a href="#"
                                class="text-reset d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseSix"
                                aria-expanded="false"
                                aria-controls="collapseSix">
                                Offrez-vous des ateliers en ligne ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseSix"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Oui, nous organisons des ateliers et des sessions de coaching en ligne pour permettre un accès facile à toutes nos participantes, quel que soit leur lieu de résidence.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" bg-light">
<br>
<br>

    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">Témoignages</small>
            <h2 class="mt-3">Ce que disent nos étudiantes</h2>
            <p class="mb-0">Découvrez comment nos programmes ont aidé nos anciennes étudiantes à réussir leur parcours universitaire.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card h-100 p-4 border-0 shadow">
                    <div class="d-flex align-items-center mb-4">
                        <img src="https://fakeimg.pl/80x80/808080/ffffff/?text=E1" alt="Profil Étudiante" class="rounded-circle me-3" width="80" height="80">
                        <div>
                            <h5 class="mb-0">Marie L.</h5>
                            <small class="text-muted">Étudiante en Médecine</small>
                        </div>
                    </div>
                    <p>
                        "Grâce aux conseils et ateliers proposés, j'ai pu choisir une orientation qui me correspond et me préparer à mes études avec sérénité."
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card h-100 p-4 border-0 shadow">
                    <div class="d-flex align-items-center mb-4">
                        <img src="https://fakeimg.pl/80x80/808080/ffffff/?text=E2" alt="Profil Étudiante" class="rounded-circle me-3" width="80" height="80">
                        <div>
                            <h5 class="mb-0">Sophie M.</h5>
                            <small class="text-muted">Étudiante en Informatique</small>
                        </div>
                    </div>
                    <p>
                        "L'accompagnement personnalisé m'a permis de m'intégrer rapidement à la vie universitaire et de réussir mes premières années d'études."
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card h-100 p-4 border-0 shadow">
                    <div class="d-flex align-items-center mb-4">
                        <img src="https://fakeimg.pl/80x80/808080/ffffff/?text=E3" alt="Profil Étudiante" class="rounded-circle me-3" width="80" height="80">
                        <div>
                            <h5 class="mb-0">Fatou D.</h5>
                            <small class="text-muted">Étudiante en Droit</small>
                        </div>
                    </div>
                    <p>
                        "Je recommande vivement ces programmes à toutes les nouvelles bachelières. L'équipe est toujours disponible pour répondre à nos besoins."
                    </p>
                </div>
            </div>
        </div>
        <br>
        <br>
        </div>
</section><section class="bg-dark text-white py-5">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">Nos Campus</small>
            <h2 class="mt-3">Trouvez nos campus</h2>
            <p class="mb-0">Nos établissements sont répartis dans plusieurs villes. Utilisez la carte interactive ci-dessous pour en savoir plus.</p>
        </div>
        <!-- Ajout de l'attribut aria-label pour l'accessibilité -->
        <div id="map" style="height: 400px;" aria-label="Carte interactive des campus"></div>
    </div>
</section>

<!-- Script pour initialiser la carte -->
<script>
    // Initialisation de la carte avec une vue sur Paris
    var map = L.map('map').setView([48.8566, 2.3522], 13); // Remplacez les coordonnées par celles de votre campus principal

    // Ajout des tuiles OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    // Ajout du marqueur pour le campus principal
    L.marker([48.8566, 2.3522]).addTo(map) // Remplacez par les coordonnées de votre campus
        .bindPopup("<b>Campus principal</b><br>Paris, France").openPopup();

    // Exemple d'ajout d'un deuxième campus
    L.marker([45.7640, 4.8357]).addTo(map) // Exemple pour Lyon, ajustez les coordonnées
        .bindPopup("<b>Campus Lyon</b><br>Lyon, France");
</script>


@endsection