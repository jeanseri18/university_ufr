@extends('layouts.university')

@section('title', 'Qui sommes nous | UFR')

@section('content')

<!--section class="" 
    style="
    background: linear-gradient(#000000B0, #000000A8), url('assets/accueilback.png') no-repeat right;
 
           background-size: cover; 
           background-position: center; 
           height: 400px; 
           padding: 30px;">
           <br><br><br><br><br><br><br>
    <p class="display-3" style="width: 500px; 
              height:100px; 
              color: black; 
              
              background-color: white; padding: 20px;
            ">
        Qui sommes nous
    </p>
</section-->

<br><br>
<div style="">

    <div class="container">

        <div class="card">
            <div class="row no-gutters">
                <!-- Colonne avec image -->

                <!-- Colonne avec texte -->
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><span class="text-primary">Presentation</span></h5>
                        <h2 class="card-title display-3">Mot du doyen</h2>
                        <ul class="list-unstyled " style="font-size:14PX">
                            <li class="mb-2">

                                <span class="ms-2">
                                    <h3> Chers étudiants, chers collègues, chers partenaires,
                                    </h3>

                                    C’est avec un immense honneur et une profonde fierté que je m’adresse à vous en tant
                                    que doyen de<span class="text-primary"> l’UFR Sciences Économiques et
                                        Gestion</span>. Notre unité de formation a pour vocation de former des leaders
                                    compétents, visionnaires et capables d’apporter des solutions innovantes aux défis
                                    économiques et managériaux de notre époque.
                                    Au cœur de notre mission se trouve un engagement constant envers l’excellence
                                    académique et l’innovation. À travers des programmes diversifiés, adaptés aux
                                    réalités du monde professionnel, nous nous efforçons de préparer nos étudiants à
                                    devenir des acteurs majeurs du développement économique, tant à l’échelle locale
                                    qu’internationale.
                                    Nos enseignants, chercheurs et collaborateurs travaillent avec passion et rigueur
                                    pour offrir un environnement d’apprentissage stimulant, où les savoirs théoriques se
                                    conjuguent aux compétences pratiques. Nous croyons fermement que l’éducation est la
                                    clé de la transformation sociale et économique, et c’est pourquoi nous mettons tout
                                    en œuvre pour offrir un cadre d’apprentissage de qualité, soutenu par des
                                    partenariats stratégiques avec le secteur privé et les institutions publiques.
                                    Aux étudiants, je vous encourage à faire preuve de détermination, de curiosité et de
                                    créativité dans votre parcours académique. Sachez que vous êtes au cœur de nos
                                    préoccupations, et que tout est mis en place pour vous accompagner dans votre
                                    réussite.
                                    À mes collègues et partenaires, je tiens à exprimer ma gratitude pour votre
                                    engagement et votre soutien indéfectibles. Ensemble, nous continuerons à bâtir une
                                    UFR forte, reconnue pour son excellence et son impact positif sur la société.
                                    Avançons ensemble, unis par notre ambition commune de bâtir un avenir meilleur.
                                    Professeur [Nom du Doyen]
                                    Doyen de l’UFR Sciences Économiques et Gestion
                                </span>
                            </li>
                            <li class="mb-2">

                                <span class="ms-2"></span>
                            </li>


                        </ul>
                    </div>

                </div>
                <div class="col-md-6" style="  background-color:gray">
                    <br>

                    <!--img src="" class="card-img w-100" style="  background-size: cover; background-color:gray"
                        alt="Image"-->

                </div>
            </div>
        </div>

    </div>

    <div class=" container">

        <br><br>
        <br>
        <div class="row  justify-content-center" >
            <div class="col-lg-12 col-md-12">
                <div class="row align-items-center">

                    <!-- heading -->
                    <div class="col-lg-12 col-md-12 col-12 mb-1 ">
                        <center>
                            <h1 class="display-5 fw-bold Justify-content-center">Notre mission</h1>
                        </center><br>
                    </div>

                </div>
                <!-- row -->
                <div class="row">
                    <!-- Première carte -->
                    <div class="col-lg-4 col-md-4 col-12 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="display-4 text-primary mb-3">
                                    <i class="fe fe-award"></i>
                                </div>
                                <h3 class="fw-semibold mb-2">Accompagnement sur mesure</h3>
                                <p class=" mb-0" sstyle="font-size:14px">Nous comprenons que chaque leader est
                                    unique. Nos programmes sont conçus pour s'adapter à vos objectifs et aux défis
                                    spécifiques de votre secteur. Bénéficiez d'un accompagnement personnalisé pour
                                    maximiser
                                    votre impact dans un environnement en constante évolution.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Deuxième carte -->
                    <div class="col-lg-4 col-md-4 col-12 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="display-4 text-primary mb-3">
                                    <i class="fe fe-user"></i>
                                </div>
                                <h3 class="fw-semibold mb-4">Partenaires académiques de renom</h3>
                                <p class=" mb-0" style="font-size:14px">Nous collaborons avec des institutions de classe
                                    mondiale. Ces
                                    partenariats vous garantissent un accès aux meilleures pratiques et aux dernières
                                    innovations dans le management et le leadership, assurant une formation de qualité
                                    internationale. <br><br></p>
                            </div>
                        </div>
                    </div>

                    <!-- Troisième carte -->
                    <div class="col-lg-4 col-md-4 col-12 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="display-4 text-primary mb-3">
                                    <i class="fe fe-users"></i>
                                </div>
                                <h3 class="fw-semibold mb-2">Expertise Reconnue</h3>
                                <p class=" mb-0" style="font-size:14px">BEM Executive Education bénéficie d'une solide
                                    réputation dans le
                                    domaine de la formation des managers, cadres et dirigeants. Nos programmes sont
                                    conçus
                                    par des experts et constamment mis à jour pour répondre aux besoins du
                                    marché.<br><br></p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Bouton -->

                </div>
                <br>


            </div>
        </div>


        <br>
        <section class="bg-primary text-white py-5 rounded">
            <div class="container text-left">
                <h1 class="display-5 fw-bold text-white">Organigramme</h1>
            </div>

            <div class="org-chart">
                <!-- Niveau 1 -->
                <div class="org-level">
                    <div class="org-box">Doyen</div>
                </div>

                <div class="line"></div>

                <!-- Niveau 2 -->
                <div class="org-level">
                    <div class="org-box">Vice-Doyen</div>
                    <div class="org-box">Responsable Administratif</div>
                </div>

                <div class="line"></div>

                <!-- Niveau 3 -->
                <div class="org-level">
                    <div class="org-box">Chef de Département A</div>
                    <div class="org-box">Chef de Département B</div>
                    <div class="org-box">Chef de Département C</div>
                </div>
            </div>
        </section>
        </div>
        <style>
        .org-chart {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .org-level {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .org-box {
            padding: 15px 30px;
            background-color: #2b6635;
            border: 1px solid white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s, transform 0.3s;
            color: white;
            cursor: pointer;
            font-weight: 500;
        }

        .org-box:hover {
            background-color: #193E1FFF;
            transform: scale(1.05);
        }

        .line {
            width: 3px;
            height: 30px;
            background-color: white;
            margin: 0 auto;
        }
        </style>
        <br><br>
        <section class=" " style="background-color:#E7EEEA"><br><br>
        <div class="container">
            <h3 class="text-left display-5 mb-4" style="color:#2b6635">Recontrez nos enseignants</h3>
            <div class="row">
                <!-- Professeur 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card border" style="background-color:#2b6635 ;color:white">
                        <a href="#!">
                            <img src="https://fakeimg.pl/300x200/808080/ffffff/?text=Prof+1" alt="professeur-1"
                                class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body text-center">
                            <h3 class="mb-2"><a href="#!" class="text-inherit text-white">Prof. Jean Dupont</a></h3>
                            <p class="text-muted mb-1">Professeur en Économie</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card border" style="background-color:#2b6635 ;color:white">
                        <a href="#!">
                            <img src="https://fakeimg.pl/300x200/808080/ffffff/?text=Prof+1" alt="professeur-1"
                                class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body text-center">
                            <h3 class="mb-2"><a href="#!" class="text-inherit text-white">Prof. Jean Dupont</a></h3>
                            <p class="text-muted mb-1">Professeur en Économie</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

  

    <!--section class="py-8 bg-gray-200">
        <div class="container my-lg-8">
           
            <div class="row justify-content-center text-center">
                <div class="col-md-9 col-12">
                  
                    <h2 class="display-4">Consultez vos résultats d'examen</h2>
                    <p class="lead px-lg-8 mb-6">Accédez facilement et rapidement à vos résultats d'examen. Cliquez
                        ci-dessous pour commencer.</p>
               
                    <div class="d-grid d-md-block">
                        <a href="../results.html" class="btn btn-primary mb-2 mb-md-0">Voir mes résultats</a>
                        <a href="../support.html" class="btn btn-info">Assistance aux étudiants</a>
                    </div>
                </div>
            </div>
        </div>
    </section-->
    </div>

    @endsection