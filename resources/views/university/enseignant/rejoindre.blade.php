@extends('layouts.university')

@section('title', 'Ecoles doctorales | UFR')

@section('content')
<style>
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
}</style>
<section class="py-lg-8 py-5" style="color:white; background: linear-gradient(to right, #2B6635, #2B6635);">
    <!-- container -->
    <div class="container ">
        <!-- row -->
        <div class="row align-items-center">
            <!-- col -->
            <div class="col-lg-8 mb-6 mb-lg-0">
                <div>
                    <!-- heading -->
                    <h5 class="text-white mb-4">
                        <i class="fe fe-check icon-xxs icon-shape bg-light-success text-white rounded-circle me-2"></i>
                        NOUS REJOINDRE
                    </h5>
                    <!-- heading -->
                    <h1 class="display-3 fw-bold mb-3 text-white">REJOINEZ NOUS MAINTENANT</h1>
                    <!-- para -->
                    <p class="pe-lg-10 mb-5">
                        •⁠  ⁠Enseignants vacataires (personnel d’administration extérieur à l’université, personnes ayant le doctorat et souhaitant postuler sans passer par les concours): CV + lettre de motivation<br>
                        •⁠  ⁠Enseignants permanents (Accès à partir des concours de la fonction publique)
                    </p>
                    <!-- btn -->
                    <a href="#" class="btn bg-black text-white "  style="background:black">Postuler Maintenant</a>
                </div>
            </div>
            <!-- col -->
            <div class="col-lg-6 d-flex ">
                <!-- images -->
               
            </div>
        </div>
    </div>
</section>


@endsection