@extends('layouts.university')

@section('title', 'Liste des enseignants | UFR')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/university/parlons-eco.css') }}">
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


        .profile-card {
            display: flex; /* Active Flexbox pour aligner les deux sections côte à côte */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: 0 auto;
            padding: 30px;
            gap: 40px; /* Espace entre les deux sections */
            align-items: flex-start; /* Alignement en haut */
        }

        .left-section {
            flex-shrink: 0; /* Empêche cette section de se réduire */
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .profile-photo img {
            width: 200px; /* Taille de l'image */
            height: 200px;
            object-fit: cover; /* Recadre l'image pour qu'elle remplisse l'espace */
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            text-align: left;
        }

        .name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #386641; /* La couleur verte de l'exemple */
            margin: 0 0 5px;
        }

        .title {
            font-size: 1.1rem;
            font-weight: normal;
            color: #555;
            margin: 0 0 20px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .contact-item .icon {
            font-size: 1.2rem;
            margin-right: 10px;
            color: #386641;
        }

        .contact-item .info {
            color: #333;
        }

        .right-section {
            flex-grow: 1; /* Permet à cette section de prendre tout l'espace restant */
        }

        .bio-text {
            font-size: 1.1rem;
            color: #6c757d;
            line-height: 1.6;
            font-style: italic; /* Texte en italique comme sur la maquette */
        }

        .divider {
            border: 0;
            height: 1px;
            background-color: #ccc;
            margin: 40px auto;
            max-width: 900px;
        }

        /* Rendre le design responsive pour les petits écrans */
        @media (max-width: 768px) {
            .profile-card {
                flex-direction: column; /* Empile les sections verticalement */
                align-items: center;
            }

            .left-section, .right-section {
                width: 100%;
                text-align: center;
            }

            .contact-info {
                text-align: center;
            }

            .contact-item {
                justify-content: center;
            }
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
                        Enseignant
                    </h4>
                    <h1 class="display-3 fw-bold mb-3 text-white">LISTE DES ENSEIGNANTS</h1>
                    <p class="pe-lg-10 mb-5">
                        L’enseignant-chercheur est un érudit spécialisé dans une discipline qui constitue le lien 
                        entre la recherche scientifique, le monde industriel et la société. En Côte d’ivoire, 
                        l’enseignant-chercheur est un universitaire de haut niveau (titulaire d’un doctorat) qui 
                        assure la formation et la recherche au sein des institutions d’enseignement supérieur. Il est 
                        fonctionnaire et est recruté par le Ministère de l’Enseignement Supérieur et de la Recherche Scientifique (MESRS).
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <!-- Image ou autre contenu -->
            </div>
        </div>
    </div>
</section>

<section class="my-5 py-0 ">
    <div class="container">
        {{-- <div class="banner mb-4">
            <h1 class="display-4 banner-title">Liste des enseignants <br></h1>
            <p class="lead">
                L’enseignant-chercheur est un érudit spécialisé dans une discipline qui constitue le lien 
                entre la recherche scientifique, le monde industriel et la société. En Côte d’ivoire, 
                l’enseignant-chercheur est un universitaire de haut niveau (titulaire d’un doctorat) qui 
                assure la formation et la recherche au sein des institutions d’enseignement supérieur. Il est 
                fonctionnaire et est recruté par le Ministère de l’Enseignement Supérieur et de la Recherche Scientifique (MESRS).
            </p>
        </div> --}}


        <div class="row mt-6 mb-5 justify-content-center">
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/assets/test-ufr.png') }}" height="236px" width="auto" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="" style="padding-left: 40px">
                                    <h3 class="card-title">Dr. KONÉ Salif (Maître de Conférences)</h3>
                                    <h5 class="card-title">Directeur de l'UFR SEG</h5>
                                    <hr class="">
                                    <p class="card-text"> 
                                        <i class="bi bi-phone"></i> (+225) 01 0335 5803 <br>
                                        <i class="bi bi-envelope"></i> salifkon@yahoo.fr <br>
                                        {{-- <i class="bi bi-geo-alt"></i> Université de cocody <br> --}}
                                        <i class="bi bi-briefcase"></i> Commerce international, integration regionale
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/assets/komenan.png') }}" height="236px" width="auto" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-content" style="padding-left: 40px">
                                    <h3 class="card-title">Dr. KOBENAN A. Narcisse (Maître Assistant)</h3>
                                    <h5 class="card-title">Directeur Adjoint en charge de la Pédagogie</h5>
                                    <hr class="">
                                    <p class="card-text"> 
                                        <i class="bi bi-phone"></i> (+225) (+225) 01 0335 5803 <br>
                                        <i class="bi bi-envelope"></i> komenan.narcisse@ufhb.edu.ci <br>
                                        <i class="bi bi-geo-alt"></i> Université de cocody <br>
                                        <i class="bi bi-briefcase"></i> Economie de l'environnement et des ressources Naturelles
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row mt-6 mb-5 justify-content-center">
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/assets/fofana-cesar.png') }}" height="236px" width="auto" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="" style="padding-left: 40px">
                                    <h3 class="card-title">Dr. FOFANA Andon Cesar (Maître Assistant)</h3>
                                    <h5 class="card-title">Directeur Adjoint en charge de la Recherche</h5>
                                    <hr class="">
                                    <p class="card-text"> 
                                        <i class="bi bi-phone"></i> (+225) 01 0335 5803 <br>
                                        <i class="bi bi-envelope"></i> andon.fofana16@ufhb.edu.ci <br>
                                        <i class="bi bi-geo-alt"></i> Université de cocody <br>
                                        <i class="bi bi-briefcase"></i> GESTION/ COMPTABILITE
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/assets/profile-prof.jpeg') }}" height="236px" width="auto" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-content" style="padding-left: 40px">
                                    <h3 class="card-title">Dr. BROU BOSSON Marcellin (Maître de Conférences Agrégé)</h3>
                                    <h5 class="card-title">Chef du Département des Sciences Économiques</h5>
                                    <hr class="">
                                    <p class="card-text"> 
                                        <i class="bi bi-phone"></i> (+225) 01 0335 5803 <br>
                                        <i class="bi bi-envelope"></i> exemple@domaine.tdl <br>
                                        <i class="bi bi-geo-alt"></i> Université de cocody <br>
                                        <i class="bi bi-briefcase"></i> Spécialité enseignée
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-6 mb-5 justify-content-center">
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/assets/profile-prof.jpeg') }}" height="236px" width="auto" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="" style="padding-left: 40px">
                                    <h3 class="card-title">Dr. KONATE Fati( Maître de Conférences Agrégée)</h3>
                                    <h5 class="card-title">Cheffe du Département des Sciences de Gestion </h5>
                                    <hr class="">
                                    <p class="card-text"> 
                                        <i class="bi bi-phone"></i> (+225) 01 0335 5803 <br>
                                        <i class="bi bi-envelope"></i> nom.prénom@example.tld <br>
                                        <i class="bi bi-geo-alt"></i> Université de cocody <br>
                                        <i class="bi bi-briefcase"></i> Spécialité enseignée
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('/assets/mtoure.png') }}" height="236px" width="auto" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-content" style="padding-left: 40px">
                                    <h3 class="card-title">Dr. TOURÉ Kany Abiba Nelly Carla (Maître Assistante)</h3>
                                    <h5 class="card-title">Responsable Service Communication UFRSEG</h5>
                                    <hr class="">
                                    <p class="card-text"> 
                                        <i class="bi bi-phone"></i> (+225) 07 9990 4345 <br>
                                        <i class="bi bi-envelope"></i> servicecommunication-ufrseg@ufhb.edu.ci <br>
                                        <i class="bi bi-geo-alt"></i> Université de cocody <br>
                                        <i class="bi bi-briefcase"></i> Economie de l'environnement
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <hr class="divider"> --}}

    </div>
</section>


@endsection
