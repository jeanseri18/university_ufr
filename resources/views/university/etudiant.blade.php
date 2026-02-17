@extends('layouts.university')

@section('title', 'Ecoles doctorales | UFR')

@push('styles')
<style>
    .header-bg {
        color:white; 
        background: linear-gradient(to right, #2B6635, #2B6635);
        height: 26em;
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
                        Etudiant
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">VIE À L'UNIVERSITÉ</h1>
                    <p class="pe-lg-10 mb-5">
                        Vous venez d’être recruté ou vous avez été promu ? Vous avez certaines démarches administratives à faire au niveau de l’Université Félix Houphouët Boigny, du Ministère de l’Enseignement Supérieur et de la Recherche Scientifique (MESRS) et du Ministère de la Fonction Publique (MFP)
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <!-- Image ou autre contenu -->
            </div>
        </div>
    </div>
</section>



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
                                background-image: url(image/7I8A9583.jpg);
                                background-repeat: no-repeat;
                                height: 386px;
                                background-size: cover;
                            "></div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <a href="#!">
                            <div class="mb-4 rounded-3 card-lift" style="
                                background-image: url(image/7I8A9612.jpg);
                                background-repeat: no-repeat;
                                height: 180px;
                                background-size: cover;
                            "></div>
                        </a>
                        <a href="#!">
                            <div class="mb-2 rounded-3 card-lift" style="
                                background-image: url(image/7I8A9863.jpg);
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
                <a href="image/7I8A9576.jpg" class="glightbox rounded-3">
                    <div class="rounded-3 card-lift"
                        style="background-image: url(image/7I8A9576.jpg); background-repeat: no-repeat; height: 350px; background-size: cover">
                    </div>
                </a>
            </div>

            <!-- Image 2 -->
            <div class="col-lg-4 col-md-4 col-12">
                <a href="image/7I8A9632.jpg" class="glightbox rounded-3">
                    <div class="rounded-3 card-lift"
                        style="background-image: url(image/7I8A9632.jpg); background-repeat: no-repeat; height: 350px; background-size: cover">
                    </div>
                </a>
            </div>

            <!-- Image 3 -->
            <div class="col-lg-4 col-md-4 col-12">
                <a href="image/7I8A9863.jpg" class="glightbox rounded-3">
                    <div class="rounded-3 card-lift"
                        style="background-image: url(image/7I8A9863.jpg); background-repeat: no-repeat; height: 350px; background-size: cover">
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
                    <img src="image/7I8A9696.jpg" class="card-img-top" alt="Accompagnement 1">
                    <div class="card-body">
                        <h5 class="card-title">Mentorat académique</h5>
                        <p class="card-text">Bénéficiez de l'accompagnement de mentor(e)s expérimentés pour vous guider dans votre parcours académique et vous aider à atteindre vos objectifs.</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card shadow border-0">
                    <img src="image/7I8A9894.jpg" class="card-img-top" alt="Accompagnement 2">
                    <div class="card-body">
                        <h5 class="card-title">Ateliers pratiques</h5>
                        <p class="card-text">Participez à nos ateliers pratiques sur la gestion du temps, la prise de notes et la préparation aux examens. Ces sessions sont animées par des expertes.</p>
                        <a href="#" class="btn btn-primary">Rejoindre un atelier</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card shadow border-0">
                    <img src="image/7I8A9600.jpg" class="card-img-top" alt="Accompagnement 3">
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
<section class="my-5 py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold text-muted">Ressources en ligne</small>
            <h2 class="mt-3">Liens utiles - Université Félix Houphouët-Boigny</h2>
            <p class="mb-0">Voici une sélection de liens pour vous accompagner tout au long de votre parcours universitaire à l'Université Félix Houphouët-Boigny d'Abidjan (Cocody). Ces ressources sont conçues pour faciliter vos démarches administratives, vos études et vous aider à réussir.</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="http://www.ufhb.edu.ci/" class="card text-decoration-none text-dark shadow-sm border-0">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-house-door-fill fs-3 text-primary me-3"></i>
                        <div>
                            <h5 class="card-title mb-1">Site officiel de l'UFRSEG</h5>
                            <p class="card-text mb-0">Accédez à toutes les informations concernant les formations, inscriptions, et actualités de l'Université Félix Houphouët-Boigny de Cocody.</p>
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
                            <p class="card-text mb-0">Découvrez les informations relatives aux études en France, y compris les procédures administratives et les démarches pour obtenir un visa étudiant.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="https://www.etudiant.gouv.fr/" class="card text-decoration-none text-dark shadow-sm border-0">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-bookmark-check-fill fs-3 text-primary me-3"></i>
                        <div>
                            <h5 class="card-title mb-1">Site officiel des étudiants</h5>
                            <p class="card-text mb-0">Retrouvez toutes les informations essentielles pour les étudiants : inscription, bourse, logement et autres démarches administratives.</p>
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
                            <p class="card-text mb-0">Une plateforme utile pour vous aider à choisir votre orientation scolaire et universitaire grâce à des outils et conseils pratiques.</p>
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
                                1/ Je souhaite connaître les orientations possibles en Sciences Économiques 
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseOne"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Notre site recense la liste de toutes nos formations, dans les filières classiques tout comme dans les filières professionnelles. Vous pouvez cliquer sur la rubrique « Filières Classiques » pour avoir toutes les informations sur nos filières classiques ou sur la rubrique « Filières professionnelles » pour avoir toutes les informations sur nos filières professionnelles.
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
                                2/ Je suis au Lycée et je souhaite suivre une formation en Sciences Économiques, quelle est la procédure à suivre ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseTwo"
                            class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Étape 1 : vous rendre sur notre site internet pour voir l’ensemble des formations disponibles <br> <br>
                                Étape 2 : si vous êtes intéressé(e) par une filière classique, vous devez vous rendre sur le site du Ministère de l’Enseignement Supérieur pour connaître les critères et les procédures d’orientation <br> <br>
                                Étape 3 : si vous êtes intéressé(e) par une filière professionnelle, vous devez vous mettre en contact avec le Secrétariat des filières de l’UFRSEG.<br> <br>
                                Tel : 01 01 15 47 47 ; Email : profilseg@gmail.com
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
                                3/ Je suis diplômé(e ) d’une autre UFR de l’université et je souhaite faire des études en Sciences Économiques, quelle est la procédure à suivre ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseThree"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Étape 1 : vous rendre sur notre site internet pour voir l’ensemble des formations disponibles <br> <br>
                                Étape 2 : si vous êtes intéressé par une filière classique, vous devez vous rendre à la Scolarité Centrale, c’est ce service qui se charge de toutes les questions relatives aux inscriptions. <br> <br>
                                Étape 3 : si vous êtes intéressé par une filière professionnelle, vous devez vous mettre en contact avec le Secrétariat des filières de l’UFRSEG. <br> <br>
                                Tel : 01 01 15 47 47 ; Email : profilseg@gmail.com
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
                                4/ Je suis un(e) travailleur(se) et je souhaite faire des études en Sciences Économiques, quelle est la procédure à suivre ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseFour"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Étape 1 : vous rendre sur notre site internet pour voir l’ensemble des formations disponibles <br> <br>
                                Étape 2 : si vous êtes intéressé par une filière classique, vous devez vous rendre à la Scolarité Centrale, c’est ce service qui se charge de toutes les questions relatives aux inscriptions.<br> <br>
                                Étape 3 : si vous êtes intéressé par une filière professionnelle, vous devez vous mettre en contact avec le Secrétariat des filières de l’UFRSEG. <br> <br>
                                Tel : 01 01 15 47 47 ; Email : profilseg@gmail.com
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
                                5/ Je ne vois pas nom sur les listes de présence / les listes de répartition des examens
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseFive"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Bien vérifier la liste et d’autres listes, si possible
                                Si le nom ne figure toujours pas, vérifiez le statut de votre inscription et portez une réclamation au niveau de la scolarité Centrale de l’Université Félix Houphouët Boigny
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
                                6/ Je n’arrive pas à payer les frais d’inscription sur la plateforme Trésor Pay
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseSix"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Vous devez faire une réclamation au niveau de la Scolarité Centrale de l’Université Félix Houphouët Boigny
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
                                7/ Je n’arrive pas à finaliser mon inscription
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseSix"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Vous devez faire une réclamation au niveau de la Scolarité Centrale de l’Université Félix Houphouët Boigny
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
                                8/ Je n’arrive pas à obtenir mes identifiants Team pour suivre les cours en ligne
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseSix"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Vous devez vous rendre à l’UFR, plus précisément au bureau 8 pour déposer une réclamation. 
                                NB : L’UFR ne propose par de formation entièrement en ligne. Les cours en ligne concernent uniquement certaines Unités d’Enseignement (UE) pour les niveaux Licence 3 et Master (I et II) 
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
                                9/ La présence aux Travaux Dirigés (TD) est-elle obligatoire ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseSix"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                La présence au TD est obligatoire et est contrôlée grâce à une liste de présence. Par ailleurs, à la fin de chaque session de Travaux Dirigés ; une note de contrôle continu est délivrée et elle compte pour 40% de la moyenne
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
                                10/ Je ne vois pas mon nom sur les listes de répartition d’étudiant(e)s pour les examens
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseSix"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Étape 1 : vérifier toutes les listes <br>
                                Étape 2 : vérifier le statut de l’inscription <br>
                                Étape 3 : Faire une réclamation à la Scolarité Centrale
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
                                11/ Pour une UE de 2 ECUE, j’ai eu 10 dans une ECUE et 5 dans l’autre, que faire ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseSix"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Étape 1 : vous devez uniquement reprendre l’ECUE dans laquelle vous n’avez pas eu la moyenne à la deuxième session <br>
                                Étape 2 : si vous validez cette ECUE, l’UE est considérée comme validée <br>
                                Étape 3 : si vous ne validez pas cette ECUE, l’UE est considérée comme non validée et vous devez la reprendre l’année prochaine <br>
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
                                12/ Les résultats des examens sont sortis mais mon nom ne figure pas et/ou je n’ai pas de note
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseSix"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Si vous êtes dans cette situation, vous devez déposer une réclamation à la commission des examens. Les calendriers et les procédures des réclamations sont publiés à chaque session d’examens.
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
                                13/ Les résultats des examens sont sortis mais il y a une erreur sur mon nom, mon genre…
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseSix"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Si vous êtes dans cette situation, vous devez déposer une réclamation à la commission des examens. Les calendriers et les procédures des réclamations sont publiés à chaque session d’examens.
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
                                14/ Comment s’habiller pour venir à l’université ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseSix"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                A l’université, il n’y a pas d’uniforme mais cela ne veut pas dire que vous devez venir habillé n’importe comment. Veuillez privilégier les tenues correctes et les chaussures fermées.
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
                                15/ Y a-t-il des listes de fournitures ?
                                <span class="chevron-arrow"><i
                                        class="bi bi-chevron-down"></i></span>
                            </a>
                        </h2>
                        <div id="collapseSix"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="mt-3">
                                Il n’y a pas de liste de fournitures en début d’année mais il est essentiel d’avoir de quoi prendre ses cours et faire ses travaux dirigés correctement. Vous devez donc avoir des stylos, des cahiers, une calculatrice, des crayons….
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<section class="bg-light">

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
                        <img src="image/7I8A9767.jpg" alt="Profil Étudiante" class="rounded-circle me-3" width="80" height="80">
                        <div>
                            <h5 class="mb-0">Marie L.</h5>
                            <small class="text-muted">Étudiante en ressources humaine</small>
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
                        <img src="image/7I8A9884.jpg" alt="Profil Étudiante" class="rounded-circle me-3" width="80" height="80">
                        <div>
                            <h5 class="mb-0">Sophie M.</h5>
                            <small class="text-muted">Étudiante en banque</small>
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
                        <img src="image/7I8A9751.jpg" alt="Profil Étudiante" class="rounded-circle me-3" width="80" height="80">
                        <div>
                            <h5 class="mb-0">Fatou D.</h5>
                            <small class="text-muted">Étudiante en economie</small>
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
</section>




<section class="">
    <div class="container my-lg-8">
        <div class="row">
            <div class="col-xl-6 col-md-12 col-12">
                <div class="mb-lg-8 mb-6">
                    <h2 class="h1 fw-bold">
                        Mediatheque
                        <!--u class="text-warning"><span class="text-primary">education webinars</span></u-->
                    </h2>
                    <!--p class="lead mb-0">Online webinars are amazing opportunities to have fun and learn.</p-->
                </div>
            </div>
        </div>
        <div class="table-responsive-xl pb-6 row"> 
            @if ($mediatheques->isEmpty())
                <div class="col-12">
                    <div class="alert alert-info text-center" role="alert">
                        Aucune ressource disponible pour le moment. Revenez bientôt !
                    </div>
                </div>
            @endif
            @foreach ($mediatheques as $media)

                <div class="col-md-3">
                    <div class="card mb-4 mb-xl-0 card-hover border">
                        <a href="#!">
                            @php
                                $extension = pathinfo(Storage::url($media->fichier), PATHINFO_EXTENSION);
                            @endphp

                            @if (in_array($extension, ['jpg', 'jpeg', 'png']))
                                <img src="{{ asset('storage/' . $media->fichier) }}" alt="webinar-1"
                                    class="img-fluid w-100 rounded-top-3">
                            @elseif (in_array($extension, ['mp4']))
                                <a href="{{ asset('storage/' . $media->fichier) }}" target="_blank">
                                    <video src="{{ asset('storage/' . $media->fichier) }}" style="width: 100%; height: auto;"></video>
                                </a>
                            @else

                            @endif
                        </a>
                        <div class="card-body">
                            <h3 class="mb-4 text-truncate">
                                <a href="#!" class="text-inherit">{{ $media->titre }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



@endsection


@push('script')
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
@endpush