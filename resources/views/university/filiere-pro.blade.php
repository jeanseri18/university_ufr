@extends('layouts.university')

@section('title', 'Programmes internationaux | UFR')

@push('styles')
    <style>
        .faq-container {
    max-width: 700px;
    margin: 0 auto;
}

.faq-item {
    border-bottom: 1px solid #ddd;
    padding: 10px 0;
}

.faq-question {
    font-weight: bold;
    cursor: pointer;
    position: relative;
    padding-right: 20px;
}

.faq-question::after {
    content: "+";
    position: absolute;
    right: 0;
    font-weight: bold;
}

.faq-question.active::after {
    content: "-";
}

.faq-answer {
    display: none;
    padding: 10px 0;
    color: #555;
}

    </style>
@endpush

@section('content')



<section class="my-xl-9 my-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-5 col-lg-6 col-12" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="mb-4">
                    <small class="text-uppercase ls-md fw-semibold">Pourquoi venir à l'UFR ?</small>
                    <h2 class="h1 mt-4 mb-3">Une formation d'excellence en sciences économiques et gestion</h2>
                    <p class="mb-3">L'UFR Sciences Économiques et Gestion propose des formations de qualité, adaptées aux besoins du marché et aux évolutions des disciplines. Nous mettons l'accent sur l'innovation, l'expertise académique et l'accompagnement individualisé pour garantir la réussite de nos étudiants.</p>
                    <p class="mb-0">Nos programmes sont conçus pour vous fournir les compétences nécessaires à une carrière réussie dans les secteurs économiques, financiers, et managériaux. Rejoignez une institution de renom qui vous ouvre de nombreuses opportunités professionnelles.</p>
                </div>

                <a href="/qui-sommes-nous" class="icon-link icon-link-hover">
                    En savoir plus sur l'UFR
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                    </svg>
                </a>
            </div>
            <div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
                <div class="row g-4" data-cues="slideInUp" data-delay="1000" data-disabled="true">
                    <div class="col-lg-6 col-md-6 col-12" data-cue="slideInUp" data-delay="1000" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 1000ms; animation-direction: normal; animation-fill-mode: both;">
                        <a href="#!">
                            <div class="rounded-3 card-lift" style="background-image: url('{{asset('assets/images/image1.jpg')}}') background-repeat: no-repeat; height: 386px; background-size: cover"></div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12" data-cue="slideInUp" data-delay="1000" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 1200ms; animation-direction: normal; animation-fill-mode: both;">
                        <a href="#!">
                            <div class="mb-4 rounded-3 card-lift" style="background-image: url('{{asset('assets/images/image2.jpg')}}'); background-repeat: no-repeat; height: 180px; background-size: cover"></div>
                        </a>
                        <a href="#!">
                            <div class="mb-2 rounded-3 card-lift" style="background-image: url('{{asset('assets/images/image3.jpg')}}'); background-repeat: no-repeat; height: 180px; background-size: cover"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-lg-8 pb-lg-10 py-5  bg-opacity-10 position-relative" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
    <div class="container pb-lg-10">
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <h2 class="mb-0">Filières professionnelles</h2>
                </div>
            </div>
        </div>
        <div class="row gy-3">
            <div class="col-lg-4" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="card card-lift shadow-sm border-0 bg-primary text-white ">
                    <div class="card-body d-flex flex-column gap-5 p-5">
                        <div>
                            <h3>Licence</h3>
                            <p>Explorez nos programmes de Licence conçus pour une solide base académique .</p>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('licence.pro')}}" class="d-flex flex-row gap-2">
                                <span class="btn btn-icon btn-secondary btn-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"></path>
                                    </svg>
                                </span>
                                <span class="link-white">Découvrir le programme Licence</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="card card-lift shadow-sm border-0 bg-primary text-white">
                    <div class="card-body d-flex flex-column gap-5 p-5">
                        <div>
                            <h3>Master</h3>
                            <p>Avancez dans votre parcours académique avec nos formations spécialisées de Master.</p>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('master.pro')}}" class="d-flex flex-row gap-2">
                                <span class="btn btn-icon btn-secondary btn-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"></path>
                                    </svg>
                                </span>
                                <span class="link-white">Explorer le programme Master</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="card card-lift shadow-sm border-0 bg-primary text-white">
                    <div class="card-body d-flex flex-column gap-5 p-5">
                        <div>
                            <h3>Doctorat</h3>
                            <p>Poursuivez votre carrière académique avec nos programmes de Doctorat.</p>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('doctorat.pro')}}" class="d-flex flex-row gap-2">
                                <span class="btn btn-icon btn-secondary btn-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"></path>
                                    </svg>
                                </span>
                                <span class="link-white">En savoir plus sur le programme Doctorat</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br><br>

<div style="background-color:#E7EEEA; padding: 20px;">
    <div class="container">
    <h1 style="color:#2B6635">ADMISSION</h1>
    L'admission dans une filière professionnelle passe par un processus composé de 3 étapes : <br><br>
    La première étape consiste en une étude de dossiers et elle est suivie d'une seconde étape qui consiste en un test écrit. 
    Les candidats retenus à la suite de ces deux étapes doivent se présenter à un test oral devant un jury constitué d'enseignants
     et de professionnels de la discipline.

    <br></br>
    </br>
    <div class="row">
        <div class="col-md-6">
            <div class="card d-flex align-items-right justify-content-center text-right p-3"
                 style="height:450px; background-color:#435053; color: white;">
                <h3 class="text-right text-white ">Le dépôt des dossiers :</h3>
                <p>Chaque filière dispose d'un calendrier de recrutement. Lorsque ce dernier est lancé, 
                    cette dernière confectionne des pochettes de candidatures que les candidats peuvent retirer à l'UFR.
                    <br>
                    Les tarifs des pochettes sont les suivants :
                    <br>
                    <ul>
                        <li>15 000 fcfa pour les filières locales</li>
                        <li>25 000 fcfa pour les filières de localisées </li>
                        <li>25 000 fcfa pour la filière DESCOGEF</li>
                    </ul>
                    <a href="#" class="icon-link icon-link-hover" style="color: white;">
                        En savoir plus
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg>
                    </a>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card d-flex align-items-right justify-content-center text-right p-3"
                 style="height:450px; background-color:#435053; color: white;">
                <h3 class="text-right text-white">Inscriptions et réinscription :</h3>
                <p>Une fois sélectionné dans la filière de son choix, le candidat doit procéder à une inscription administrative 
                    auprès de la Scolarité Centrale de l'université Félix Houphouët-Boigny et il doit s'acquitter 
                    des frais de scolarité auprès du service comptable de l'UFR.
                </p>
                <p>
                    À la fin de chaque année académique, la filière publie les résultats et délivre les bulletins aux étudiant(e)s.  
                    Une fois leurs résultats obtenus, les étudiant(e)s effectuent leur réinscription administrative auprès de la 
                    Scolarité Centrale de l'université Félix Houphouët-Boigny et paient leurs frais de scolarité auprès du service comptable de l'UFRSEG.
                </p>
                <p>
                    À la fin du cursus, les candidats qui ont validé tous leurs semestres peuvent faire la demande de leurs diplômes auprès de la Scolarité 
                    Centrale de l'université Félix Houphouët-Boigny.
                </p>

                   <a href="#" class="icon-link icon-link-hover" style="color: white;">
                    En savoir plus sur l'UFR
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div><br>
 <center>   <a href="#" class="btn btn-primary mt-3 align-items-center justify-content-center">Découvrir la vie à UFR</a></center>
 <br></div>
</div>



<section class="pattern-square bg-opacity-10">
    <div class="container position-relative z-1 py-xl-9 py-6">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12">

                <h2 class="h1 mb-4">Discutez de votre avenir académique en Sciences Économiques et Gestion</h2>

                <div class="row align-items-center g-5">
                    <div class="col-lg-6 col-12 order-2" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        <div class="me-xl-7">
                            <div class="mb-5">
                                {{-- <h2 class="h1 mb-4">Discutez de votre avenir académique en Sciences Économiques et Gestion</h2> --}}
                                <p class="mb-0">Prenez rendez-vous pour une consultation gratuite avec nos conseillers spécialisés. Que vous soyez en licence ou en master, nous sommes là pour vous guider dans votre choix de formation et vous aider à planifier vos études avec succès.</p>
                            </div>
                            {{-- <div class="mb-5">
                                <ul class="list-unstyled">
                                    <li class="mb-2 d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                        </svg>
                                        <span class="ms-1">Vous ne savez pas quel programme choisir ?</span>
                                    </li>
                                    <li class="mb-2 d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                        </svg>
                                        <span class="ms-1">Vous avez besoin de conseils sur vos choix de spécialisation ?</span>
                                    </li>
                                    <li class="mb-2 d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                        </svg>
                                        <span class="ms-1">Vous avez des questions sur le programme de stage ou l'insertion professionnelle ?</span>
                                    </li>
                                </ul>
                            </div> --}}

                            {{-- <div class="d-md-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center mb-3 mb-md-0 small">
                                    <div class="d-flex align-items-center">
                                        <img src="assets/images/avatar/avatar-7.jpg" alt="Avatar" class="avatar avatar-lg rounded-circle">
                                        <div class="ms-3">
                                            <h5 class="mb-0">Dr. Abiba TOURÉ </h5>
                                            <small class="me-4">Responsable des admissions</small>
                                            <small>Servicecommunication-ufrseg@ufhb.edu.ci</small>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="mailto:admissions@university.com" class="btn btn-outline-secondary">Contactez-nous par e-mail</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2" data-cue="slideInRight" data-show="true" style="animation-name: slideInRight; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        
                        <div class="mb-5">
                                <ul class="list-unstyled">
                                    <li class="mb-2 d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                        </svg>
                                        <span class="ms-1">Vous ne savez pas quel programme choisir ?</span>
                                    </li>
                                    <li class="mb-2 d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                        </svg>
                                        <span class="ms-1">Vous avez besoin de conseils sur vos choix de spécialisation ?</span>
                                    </li>
                                    <li class="mb-2 d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                        </svg>
                                        <span class="ms-1">Vous avez des questions sur le programme de stage ou l'insertion professionnelle ?</span>
                                    </li>
                                </ul>
                            </div>
                        
                        {{-- <div class="card shadow-sm">
                            <div class="card-body">
                                <form class="row needs-validation g-3" novalidate="">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h3 class="mb-0">Réservez un appel de consultation gratuit</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label for="ScheduleFirstnameInput" class="form-label">
                                            Prénom
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="ScheduleFirstnameInput" required="">
                                        <div class="invalid-feedback">Veuillez entrer votre prénom.</div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label for="scheduleLastnameInput" class="form-label">
                                            Nom
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="scheduleLastnameInput" required="">
                                        <div class="invalid-feedback">Veuillez entrer votre nom.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="scheduleEmailInput" class="form-label">
                                            E-mail
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="email" class="form-control" id="scheduleEmailInput" required="">
                                        <div class="invalid-feedback">Veuillez entrer votre adresse e-mail.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="scheduleTextarea" class="form-label">Message</label>
                                        <textarea class="form-control" id="scheduleTextarea" placeholder="Écrivez-nous" rows="3" required=""></textarea>
                                        <div class="invalid-feedback">Veuillez écrire un message.</div>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Réservez votre consultation</button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div style="background-color:#E7EEEA; padding: 20px;">
    <div class="container">
    <h1 style="color:#2B6635"><center>Foire Aux Qestions</center></h1>
   
    <div class="faq-container">
    <div class="faq-item">
        <div class="faq-question">1. Je souhaite connaître les orientations possibles en Sciences Économiques</div>
        <div class="faq-answer">Notre site recense la liste de toutes nos formations, dans les filières classiques tout comme dans les filières professionnelles. Vous pouvez cliquer sur la rubrique « Filières Classiques » pour avoir toutes les informations sur nos filières classiques ou sur la rubrique « Filières professionnelles » pour avoir toutes les informations sur nos filières professionnelles.</div>
    </div>

    <div class="faq-item">
        <div class="faq-question">2. Je suis au Lycée et je souhaite suivre une formation en Sciences Économiques, quelle est la procédure à suivre ?</div>
        <div class="faq-answer">
            Étape 1 : vous rendre sur notre site internet pour voir l’ensemble des formations disponibles <br><br>
            Étape 2 : si vous êtes intéressé par une filière classique, vous devez vous rendre sur le site du ministère de l’Enseignement Supérieur pour connaître les critères et les procédures d’orientation <br><br>
            Étape 3 : si vous êtes intéressé par une filière professionnelle, vous devez vous mettre en contact avec le Secrétariat des filières de l’UFRSEG. Tel : 01 01 15 47 47 ; Email : profilseg@gmail.com <br><br>
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">3. Je suis diplômé d’une autre UFR de l’université et je souhaite faire des études en Sciences Économiques, quelle est la procédure à suivre ?</div>
        <div class="faq-answer">
            Étape 1 : vous rendre sur notre site internet pour voir l’ensemble des formations disponibles <br><br>
            Étape 2 : si vous êtes intéressé par une filière classique, vous devez vous rendre à la Scolarité Centrale, c’est ce service qui se charge de toutes les questions relatives aux inscriptions.<br><br>
            Étape 3 : si vous êtes intéressé par une filière professionnelle, vous devez vous mettre en contact avec le Secrétariat des filières de l’UFRSEG. Tel : 01 01 15 47 47 ; Email : profilseg@gmail.com <br><br>
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">4. Je suis un(e) travailleur(se) et je souhaite faire des études en Sciences Économiques, quelle est la procédure à suivre ?</div>
        <div class="faq-answer">
            Étape 1 : vous rendre sur notre site internet pour voir l’ensemble des formations disponibles <br><br>
            Étape 2 : si vous êtes intéressé par une filière classique, vous devez vous rendre à la Scolarité Centrale, c’est ce service qui se charge de toutes les questions relatives aux inscriptions.<br><br>
            Étape 3 : si vous êtes intéressé par une filière professionnelle, vous devez vous mettre en contact avec le Secrétariat des filières de l’UFRSEG. Tel : 01 01 15 47 47 ; Email : profilseg@gmail.com<br><br>
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">5. Je ne vois pas nom sur les listes de présence / les listes de répartition des examens</div>
        <div class="faq-answer">
            Bien vérifier la liste et d’autres liste si possible <br><br>
            Si le nom ne figure toujours pas, vérifiez le statut de votre inscription et portez une réclamation au niveau de la scolarité Centrale de l’Université Félix Houphouët Boigny
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">6. Je n’arrive pas à payer les frais d’inscription sur la plateforme Trésor Pay</div>
        <div class="faq-answer">
            Vous devez faire une réclamation au niveau de la Scolarité Centrale de l’Université Félix Houphouët Boigny
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">7. Je n’arrive pas à payer les frais d’inscription sur la plateforme Trésor Pay</div>
        <div class="faq-answer">
            Vous devez faire une réclamation au niveau de la Scolarité Centrale de l’Université Félix Houphouët Boigny
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">8. Je n’arrive pas à obtenir mes identifiants Team pour suivre les cours en ligne</div>
        <div class="faq-answer">
            Vous devez vous rendre à l’UFR, plus précisément au bureau 8 pour déposer une réclamation.
            NB : L’UFR ne propose par de formation entièrement en ligne. Les cours en ligne concernent uniquement certaines Unités d’Enseignement (UE) pour les niveaux Licence 3 et Master (I et II)
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">9. La présence aux Travaux Dirigés (TD) est-elle obligatoire ?</div>
        <div class="faq-answer">
            La présence au TD est obligatoire et est contrôlée grâce à une liste de présence. Par ailleurs, à la fin de chaque session de Travaux Dirigés ; 
            une note de contrôle continu est délivrée et elle compte pour 40% de la moyenne
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">10. Je ne vois pas mon nom sur les listes de répartition d’étudiant(e)s pour les examens</div>
        <div class="faq-answer">
            Étape 1 : vérifier toutes les listes <br><br>
            Étape 2 : vérifier le statut de l’inscription <br><br>
            Étape 3 : Faire une réclamation à la Scolarité Centrale <br><br>
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">11. Pour une UE de 2 ECUE, j’ai eu 10 dans une ECUE et 5 dans l’autre, que faire ?</div>
        <div class="faq-answer">
            Étape 1 : vous devez uniquement reprendre l’ECUE dans laquelle vous n’avez pas eu la moyenne à la deuxième session <br><br>
            Étape 2 : si vous validez cette ECUE, l’UE est considérée comme validée <br><br>
            Étape 3 : si vous ne validez pas cette ECUE, l’UE est considérée comme non validée et vous devez la reprendre l’année prochaine<br><br>
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">12. Les résultats des examens sont sortis mais mon nom ne figure pas et/ou je n’ai pas de note</div>
        <div class="faq-answer">
            Si vous êtes dans cette situation, vous devez déposer une réclamation à la commission des examens. Les calendriers et les procédures des réclamations sont publiés à chaque session d’examens.
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question">13. Les résultats des examens sont sortis mais il y a une erreur sur mon nom, mon genre</div>
        <div class="faq-answer">
            Si vous êtes dans cette situation, vous devez déposer une réclamation à la commission des examens. Les calendriers et les procédures des réclamations sont publiés à chaque session d'examen.
        </div>
    </div>

</div>




    <br></br>
</div>

{{-- <section class="my-5 py-5 ">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">Nos Filières Professionnelles</small>
            <h2 class="mt-3">Explorez nos filières professionnelles</h2>
            <p class="mb-0">Découvrez les formations qui vous ouvriront les portes de votre futur professionnel. Chaque programme est conçu pour vous donner les compétences et connaissances nécessaires pour exceller dans votre domaine.</p>
        </div>
        <div class="row g-4">
        @foreach($filieres as $filiere)
            <div class="col-md-4 col-12">
                <div class="card shadow border-0">
                    <img src="{{ $filiere->image }}" class="card-img-top" alt="Développement Web">
                    <div class="card-body">
                        <h5 class="card-title">                <strong>{{ $filiere->titre }}</strong><br>
                        </h5>
                        <p class="card-text">{{ Str::limit($filiere->objectifs, 200) }}</p>
                        <a href="{{ route('detail.classique', $filiere->id) }}" class="btn btn-primary">Découvrir cette filière</a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section> --}}


@endsection

@push('scripts') 
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const questions = document.querySelectorAll('.faq-question');

            questions.forEach(question => {
                question.addEventListener('click', function () {
                    const isActive = question.classList.contains('active');

                    // Fermer tous les autres
                    questions.forEach(q => {
                        q.classList.remove('active');
                        q.nextElementSibling.style.display = 'none';
                    });

                    // Ouvrir si ce n'était pas déjà ouvert
                    if (!isActive) {
                        question.classList.add('active');
                        question.nextElementSibling.style.display = 'block';
                    }
                });
            });
        });
    </script>

@endpush 