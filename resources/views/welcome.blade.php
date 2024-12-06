@extends('layouts.university')
<style>
.card-custom {
    min-height: 300px;
    /* Ajustez cette valeur selon vos besoins */

    flex-direction: column;
    justify-content: space-between;
}

.bg-slide1 {
    background: linear-gradient(#0C3396B8, #000000F1), url('../../assets/images/backhome.png') no-repeat right;
    background-size: auto;
    background-position: right;
    height: 610px;
    background-size: cover;

}

.bg-slide2 {
    background: linear-gradient(#0C3396B8, #000000F1), url('../../assets/images/formationorg/handsome-young-businessman.jpg') no-repeat right;
    background-size: auto;
    background-position: right;
    height: 610px;

    background-size: cover;
}

.bg-slide3 {
    background: linear-gradient(#0C3396B8, #000000F1), url('../../assets/images/about/geeksui-img-3.jpg') no-repeat right;
    background-size: auto;
    background-position: right;
    height: 610px;
    background-size: cover;
}

.bg-spacing {
    margin-left: 15%;
    margin-top: 5%;
    margin-right: 15%;
}

.my-slider .card-img-top {
    width: 100%;
    height: 200px;
    /* Hauteur fixe pour toutes les images */
    object-fit: cover;
    /* Couvrir le conteneur sans déformation */
}

.card {
    overflow: hidden;
    /* Éviter que les images débordent du conteneur */
}

.item {
    display: flex;
    justify-content: center;
    /* Centrer les éléments horizontalement */
    align-items: center;
    /* Centrer les éléments verticalement */
}

.card-img-top {
    width: 100%;
    height: 200px;
    /* Hauteur fixe pour toutes les images */
    object-fit: cover;
    /* Couvrir le conteneur sans déformation */
}

#certifCarouselControls {
    display: flex;
    justify-content: space-between;
    position: absolute;
    width: 100%;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
}

#certifCarouselControls .prev,
#certifCarouselControls .next {
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    padding: 10px;
    cursor: pointer;
}
</style>
@section('title', 'Acceuil | Bem executive school')

@section('content')
<section class="bg-light d-flex align-items-center justify-content-center" style="background-image: url('assets/accueilback.png'); 
           background-size: cover; 
           background-position: center; 
           height: 600px;">
    <div class="container ">
        <div class="col-md-2" style="background-color: #3CA45D; color: white; padding: 10px;">
            Actualité
        </div>
        <div class="col-md-10"></div>

        <div class="col-md-12" style="background-color: #FFFFFF74; color: black; padding: 20px;">
            <p style="font-size: 30px;">
                The Impact of Technology on the Workplace: How Technology is Changing
            </p>
            <br>
            <p style="font-size: 13px;">
                Administration, Janvier 2024
            </p>
        </div>
    </div>
</section>

<section class="">
    <div class="container my-lg-8">
        <div class="row">
            <div class="col-xl-10 col-md-10 col-10">
                <div class="mb-lg-10 mb-6">
                    <h2 class="h1 fw-bold">
                        Communiqué
                        <u class="text-warning"><span class="text-primary"> et documents officiels
                            </span></u>
                    </h2>
                    <p class="mb-0">Restez informé des annonces officielles et des informations essentielles émanant de
                        l’université.

                    </p>
                </div>
            </div>
            <div class="col-xl-2 col-md-2 col-2">
                <div class="mb-lg-2 mb-6">
                    <h2 class="h3 fw-bold btn-primary btn">
                        voir plus
                        <!--u class="text-warning"><span class="text-primary">education webinars</span></u-->
                    </h2>

                    </p>
                </div>

            </div>
        </div>
        <div class="table-responsive-xl pb-6 row">
            <div class="col-md-3">
                <div class="card mb-4 mb-xl-0 card-hover border">
                    <a href="#!">
                        <img src="../../assets/images/education/edu-webinar-1.jpg" alt="webinar-1"
                            class="img-fluid w-100 rounded-top-3">
                    </a>
                    <div class="card-body">
                        <h3 class="mb-4 text-truncate">
                            <a href="#!" class="text-inherit">Education Edition Deployment And Set Up</a>
                        </h3>
                        <div class="mb-4">
                            <div class="mb-3 lh-1">

                                <span>Dans le cadre de ses activités de soutien à la recherche et à l’innovation
                                    en...</span>
                            </div>
                            <div class="lh-1">

                                <span>poste le 10 janv</span>
                            </div>
                        </div>
                        <a href="#!" class="btn btn-light-primary text-primary">Continuer la lecture</a>
                    </div>
                </div>
            </div>
        <div class="col-md-3">
            <div class="card mb-4 mb-xl-0 card-hover border">
                <a href="#!">
                    <img src="../../assets/images/education/edu-webinar-1.jpg" alt="webinar-1"
                        class="img-fluid w-100 rounded-top-3">
                </a>
                <div class="card-body">
                    <h3 class="mb-4 text-truncate">
                        <a href="#!" class="text-inherit">Education Edition Deployment And Set Up</a>
                    </h3>
                    <div class="mb-4">
                        <div class="mb-3 lh-1">

                            <span>Dans le cadre de ses activités de soutien à la recherche et à l’innovation
                                en...</span>
                        </div>
                        <div class="lh-1">

                            <span>poste le 10 janv</span>
                        </div>
                    </div>
                    <a href="#!" class="btn btn-light-primary text-primary">Continuer la lecture</a>
                </div>
            </div>
        </div>
    <div class="col-md-3">
        <div class="card mb-4 mb-xl-0 card-hover border">
            <a href="#!">
                <img src="../../assets/images/education/edu-webinar-1.jpg" alt="webinar-1"
                    class="img-fluid w-100 rounded-top-3">
            </a>
            <div class="card-body">
                <h3 class="mb-4 text-truncate">
                    <a href="#!" class="text-inherit">Education Edition Deployment And Set Up</a>
                </h3>
                <div class="mb-4">
                    <div class="mb-3 lh-1">

                        <span>Dans le cadre de ses activités de soutien à la recherche et à l’innovation en...</span>
                    </div>
                    <div class="lh-1">

                        <span>poste le 10 janv</span>
                    </div>
                </div>
                <a href="#!" class="btn btn-light-primary text-primary">Continuer la lecture</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-4 mb-xl-0 card-hover border">
            <a href="#!">
                <img src="../../assets/images/education/edu-webinar-1.jpg" alt="webinar-1"
                    class="img-fluid w-100 rounded-top-3">
            </a>
            <div class="card-body">
                <h3 class="mb-4 text-truncate">
                    <a href="#!" class="text-inherit">Education Edition Deployment And Set Up</a>
                </h3>
                <div class="mb-4">
                    <div class="mb-3 lh-1">

                        <span>Dans le cadre de ses activités de soutien à la recherche et à l’innovation en...</span>
                    </div>
                    <div class="lh-1">

                        <span>poste le 10 janv</span>
                    </div>
                </div>
                <a href="#!" class="btn btn-light-primary text-primary">Continuer la lecture</a>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="" style="background-color:#E7EEEA;padding-top: 30px;
padding-bottom: 30px;">
    <div class="container my-lg-8">
        <div class="row">
            <div class="col-xl-10 col-md-10 col-10">
                <div class="mb-lg-10 mb-6">
                    <h2 class="h1 fw-bold">
                        Agenda
                        <!--u class="text-warning"><span class="text-primary">education webinars</span></u-->
                    </h2>
                    <p class="mb-0">Soyez à l’affût des dates clés, conférences, et activités marquantes qui
                        enrichissent notre communauté universitaire.

                    </p>
                </div>

            </div>
            <div class="col-xl-2 col-md-2 col-2">
                <div class="mb-lg-2 mb-6">
                    <h2 class="h3 fw-bold btn-primary btn">
                        voir plus
                        <!--u class="text-warning"><span class="text-primary">education webinars</span></u-->
                    </h2>

                    </p>
                </div>

            </div>
        </div>
        <div class="table-responsive-xl pb-6">
            <div class="col">
                <div class="card mb-4 mb-xl-0 card-hover border">
                    <!--a href="#!">
                                        <img src="../../assets/images/education/edu-webinar-1.jpg" alt="webinar-1" class="img-fluid w-100 rounded-top-3">
                                    </a-->
                    <div class="card-body">
                        <h3 class="mb-4 text-truncate">
                            <a href="#!" class="text-inherit">Education Edition Deployment And Set Up</a>
                        </h3>
                        <div class="mb-4">
                            <div class="mb-3 lh-1">
                                <span class="me-1">
                                    <i class="bi bi-calendar-check"></i>
                                </span>
                                <span>Thu, November 10, 2023</span>
                            </div>
                            <div class="lh-1">
                                <span class="align-text-top me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                        class="bi bi-clock" viewBox="0 0 16 16">
                                        <path
                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                        </path>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                        </path>
                                    </svg>
                                </span>
                                <span>6:00 PM – 8:00 PM GMT</span>
                            </div>
                        </div>
                        <a href="#!" class="btn btn-light-primary text-primary">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
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
            <div class="col-md-3">
                <div class="card mb-4 mb-xl-0 card-hover border">
                    <a href="#!">
                        <img src="../../assets/images/education/edu-webinar-1.jpg" alt="webinar-1"
                            class="img-fluid w-100 rounded-top-3">
                    </a>
                    <div class="card-body">
                        <h3 class="mb-4 text-truncate">
                            <a href="#!" class="text-inherit">Education Edition Deployment And Set Up</a>
                        </h3>
                        
                    </div>
                </div>
            </div>
        <div class="col-md-3">
            <div class="card mb-4 mb-xl-0 card-hover border">
                <a href="#!">
                    <img src="../../assets/images/education/edu-webinar-1.jpg" alt="webinar-1"
                        class="img-fluid w-100 rounded-top-3">
                </a>
                <div class="card-body">
                    <h3 class="mb-4 text-truncate">
                        <a href="#!" class="text-inherit">Education Edition Deployment And Set Up</a>
                    </h3>
                    
                </div>
            </div>
        </div>
    <div class="col-md-3">
        <div class="card mb-4 mb-xl-0 card-hover border">
            <a href="#!">
                <img src="../../assets/images/education/edu-webinar-1.jpg" alt="webinar-1"
                    class="img-fluid w-100 rounded-top-3">
            </a>
            <div class="card-body">
                <h3 class="mb-4 text-truncate">
                    <a href="#!" class="text-inherit">Education Edition Deployment And Set Up</a>
                </h3>
                
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-4 mb-xl-0 card-hover border">
            <a href="#!">
                <img src="../../assets/images/education/edu-webinar-1.jpg" alt="webinar-1"
                    class="img-fluid w-100 rounded-top-3">
            </a>
            <div class="card-body">
                <h3 class="mb-4 text-truncate">
                    <a href="#!" class="text-inherit">Education Edition Deployment And Set Up</a>
                </h3>
                           </div>
        </div>
    </div>
    </div></section>
<!-- Hero Section -->

<!-- Inclure le CSS de Tiny Slider -->

<!-- Inclure le CSS de Tiny Slider -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">

<!-- Inclure le JS de Tiny Slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    tns({
        container: '#my-slider',
        responsive: {
            640: {
                items: 2,
            },

            768: {
                items: 3,
            }
        },

        slideBy: 'page',
        autoplay: false,
        nav: false,
        autoplayButtonOutput: false,

        controlsContainer: '#my-sliderControls',
    });

    tns({
        container: '#eventCarousel',
        responsive: {
            640: {
                items: 2,
            },

            768: {
                items: 3,
            }
        },

        slideBy: 'page',
        autoplay: false,
        nav: false,
        autoplayButtonOutput: false,

        controlsContainer: '#eventCarouselControls',
    });
});
</script>


@endsection