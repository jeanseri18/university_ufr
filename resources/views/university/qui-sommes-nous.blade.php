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
<div style="margin:60px;">

    <div class="">

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
                                    <h3>Bienvenue</h3>

                                    <big>"</big>Dès sa création <span class="text-primary"> l'UFR</span>

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

    <div class=" ">

        <br><br>
        <br>
        <div class="row  justify-content-center">
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


<br>  <center>
                            <h1 class="display-5 fw-bold Justify-content-center">Organigramme</h1>
                        </center><br><br>


        </div>
    </div>
    <br>

</div>
<section class="py-8 bg-gray-200" >
  <div class="container my-lg-8">
    <!-- row -->
    <div class="row justify-content-center text-center">
      <div class="col-md-9 col-12">
        <!-- heading -->
        <h2 class="display-4">Consultez vos résultats d'examen</h2>
        <p class="lead px-lg-8 mb-6">Accédez facilement et rapidement à vos résultats d'examen. Cliquez ci-dessous pour commencer.</p>
        <!-- button -->
        <div class="d-grid d-md-block">
          <a href="../results.html" class="btn btn-primary mb-2 mb-md-0">Voir mes résultats</a>
          <a href="../support.html" class="btn btn-info">Assistance aux étudiants</a>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection