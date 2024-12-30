@extends('layouts.university')

@section('title', 'Programmes internationaux | UFR')

@section('content')
<style>
.cards {
    margin: 10px;
    width: 30%;
    /* Ajustez cette valeur selon vos besoins */
}

.card-container {
    margin: 20px;
    /* Ajouter du padding pour l'intérieur des cartes */
    border: 1px solid white;
    /* Optionnel: ajouter une bordure pour mieux voir les cartes */
    border-radius: 8px;
    /* Optionnel: ajouter des coins arrondis */
}
</style>
<section class="bg-light"
    style="    background: linear-gradient(#040B11A3,#0A0B0B9D), url('assets/accueilback.png') no-repeat right; background-size: auto; background-position: right;height:550px">

    <div class="container ">
        <div>
            <BR>
            <BR>
            <BR>
            <BR>
            <div class="row py-8s align-items-center gy-8">
                <div class="col-xl-7 col-lg-7 rounded-4" style="background:#FFFFFFA3;">
                    <div class="container"><br><br>
                        <span class="text-primary fw-semibold">Bienvenue à l'ufr</span>
                        <h1 class="display-3 my-3" style="color:black;">Rejoignez un écosystème créatif
                        </h1>
                        <p class="mb-5" style="color:black;">

                            UFR est un lieu où des talents du monde entier se forment, s’inspirent et se mettent en
                            action afin de développer leur capacité à contribuer au monde. Vous voulez trouver de
                            nouvelles approches à vos défis business et recrutements ?
                        </p><br><br>
                    </div>
                </div>
            </div>
</section>
<br><br>
<div class="container ">
    <div class="row mb-8 justify-content-center">
        <div class="col-lg-8 col-md-12 col-12 text-center">
            <!-- caption -->
            <span class="text-primary mb-3 d-block text-uppercase fw-semibold ls-xl"> Nos Partenariats Entreprises :
            </span>
            <h2 class="mb-2 display-4 fw-bold"> Un investissement stratégique</h2>
            <p class="lead mb-0">


            </p>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 card cards">
            <!-- features -->
            <div class="card-container">
                <!-- icon -->
                <div class="display-4 text-primary">
                    <i class="fe fe-settings"></i>
                </div>
                <!-- para -->
                <div class="mt-4">
                    <h3>Devenir partenaire</h3>
                    <p class="fs-4 mb-0">
                        Rejoignez UFR et contribuez à la formation de nos étudiants en proposant des stages, projets ou
                        en parrainant des événements.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12  card cards">
            <!-- features -->
            <div class="card-container">
                <!-- icon -->
                <div class="display-4 text-primary">
                    <i class="fe fe-user"></i>
                </div>
                <!-- para -->
                <div class="mt-4">
                    <h3>Avantage</h3>
                    <p class="fs-4 mb-0">
                        Gagnez en visibilité, accédez à des talents prometteurs, et participez à l'élaboration de
                        programmes adaptés à votre secteur.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 card cards">
            <!-- features -->
            <div class="card-container">
                <!-- icon -->
                <div class="display-4 text-primary">
                    <i class="fe fe-award"></i>
                </div>
                <!-- para -->
                <div class="mt-4">
                    <h3>Comment ça marche ?</h3>
                    <p class="fs-4 mb-0">
                        Remplissez le formulaire en ligne. Notre équipe vous contactera pour définir les modalités de
                        votre partenariat.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<!--div class="col-xl-12  col-md-12 col-12">
    <div class="bg-white ">
        <div class="container mt-lg-6">
            <div class="row mb-6 justify-content-center">
                <div class="col-lg-12 col-md-12 col-12 text-left">
                    <h2 class=" mb-0 d-block  fw-semibold ls-xl"></h2>
                </div>
            </div>
            <div class="table-responsive-lg">
                <div class="row flex-nowrap">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4 text-center">
                            <img src="../../assets/partners/unnamed 1.png" alt="logo" height="70px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4 text-center">
                            <img src="../../assets/partners/MTN-Logo 1.png" alt="logo" height="70px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4 text-center">
                            <img src="../../assets/partners/Logo-NSIA-BANK 1.png" alt="logo" height="70px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4 text-center">
                            <img src="../../assets/partners/logo-coris-bank 1.png" alt="logo" height="70px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4 text-center">
                            <img src="../../assets/partners/images.png" alt="logo" height="70px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4 text-center">
                            <img src="../../assets/partners/the-pan-african-bank-ecobank-logo-11563959485cpume2ktri-removebg-preview 1.png"
                                alt="logo" height="70px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->

<br><br>
<section class=" bg-primary" style="color:white">
    <div class="container my-lg-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 ">
                <br><br><br>
                <font class=" fw-bold " style="color:white;font-size:60px">
                    <center> L’EXCELLENCE DE NOS PARTENARIATS</center>
                </font>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 ">
                <p class="lead">
                    <center>Nous sommes fiers de notre engagement envers l'excellence à travers nos partenariats.
                    </center>
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="border-top pt-4 mt-6 mb-5">
                    <center>
                        <h1 class="display-3 fw-bold mb-0" style="color:white">+10</h1>
                        <p class="text-uppercase">Événements Parrainés</p>
                    </center>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="border-top pt-4 mt-6 mb-5">
                    <center>
                        <h1 class="display-3 fw-bold mb-0" style="color:white"> +150</h1>
                        <p class="text-uppercase">Entreprises Partenaires</p>
                    </center>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="border-top pt-4 mt-6 mb-5">
                    <center>
                        <h1 class="display-3 fw-bold mb-0" style="color:white">+150</h1>
                        <p class="text-uppercase">Projets Collaboratifs Réalisés</p>
                    </center>
                </div>
            </div>
        </div>
        
    </div>
</section>
<section class="py-xl-9 py-5 ">
    <div class="container">
        <div class="row no-gutters">
            <!-- Colonne avec image -->
            <div class="col-md-6">
                <br>

                <img src="https://fakeimg.pl/300x200/808080/ffffff/?text=Prof+1" class="card-img w-100" style="  background-size: cover;background-color:gray"
                    alt="Image">

            </div>
            <!-- Colonne avec texte -->
            <div class="col-md-6">
                <div class="card-body"><br>
                    <h5 class="card-title"><span class="text-primary">Don</span></h5>
                    <h2 class="card-title display-3">Besion de Financement</h2>
                    <br>
                    <ul class="list-unstyled " style="font-size:14PX">

                    <li class="mb-2">
    <span class="ms-2">
        A travers la Chaire UNESCO ou le CUFOP, vous disposez de multiples options pour les formations continues à l’Université Félix Houphouët-Boigny (UFHB), conçues pour répondre aux exigences de votre évolution professionnelle et aux défis du marché actuel.<br><br>
        Que vous souhaitiez actualiser vos compétences en tant que professionnel aguerri, acquérir de nouvelles expertises pour explorer des perspectives de carrière inédites, ou investir dans le développement des talents de votre équipe, l’UFHB met à votre disposition des programmes personnalisés et adaptés à vos besoins spécifiques.<br><br>
        Avec une approche axée sur l’innovation, l’excellence académique et l’application pratique, ces formations offrent un tremplin idéal pour faire avancer votre carrière tout en apportant une valeur ajoutée tangible à votre organisation.
    </span>
</li>



                    </ul>
                </div>
            </div>
        </div>

<br><div class="bg-primary py-6 px-6 px-xl-0 rounded-4">
  <div class="row align-items-center">
    <!-- Texte et bouton -->
    <div class="offset-xl-1 col-xl-5 col-md-6 col-12">
      <div>
        <h2 class="h1 text-white mb-3">Partagez vos opportunités avec nous</h2>
        <p class="text-white-50 fs-4">
          Publiez des offres d'emploi, de stage ou toute autre opportunité pour nos étudiants et diplômés.
          Rejoignez notre réseau de partenaires dès aujourd'hui !
        </p>
        <button class="btn btn-secondary">Poster une offre</button>
      </div>
    </div>
    <!-- Image -->
    <div class="col-xl-6 col-md-6 col-12">
      <div class="text-center d-none d-md-block">
        <img src="../../assets/images/partnership/job-posting.png" alt="Poster une offre" class="img-fluid">
      </div>
    </div>
  </div>
</div>
            </div>
</section>
<br>

<section class="py-xl-9 py-5 bg-gray-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="mb-7 mb-md-0 me-lg-7" data-cue="fadeIn" data-show="true"
                    style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="mb-4">
                        <h2 class="mb-3">Pourquoi devenir Partenaire ?</h2>
                        <p class="mb-0">

                            Nos entreprises partenaires bénéficient de multiples avantages qui renforcent leur
                            compétitivité :</p>
                    </div>

                    <a href="#!" class="btn btn-outline-primary">Service client</a>
                    <span class="ms-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone text-primary" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                            </path>
                        </svg>
                    </span>
                    <span class="ms-2 text-primary">(000) 123-4567</span>
                </div>
            </div>
            <div class="col-lg-7 col-md-6" data-cue="fadeIn" data-show="true"
                style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">

                <div class="py-4 border-bottom">
                    <h4 class="mb-3"> Accès privilégié à nos talents :</h4>
                    <p class="mb-0">
                        Identifiez et recrutez des professionnels formés à haut niveau pour répondre aux besoins de
                        votre organisation. </p>
                </div>
                <div class="py-4 border-bottom">
                    <h4 class="mb-3"> Co-développement de solutions innovantes :</h4>
                    <p class="mb-0">
                        Participez à la création de programmes de formation adaptés aux réalités de votre industrie et
                        aux enjeux stratégiques de votre entreprise. </p>
                </div>
                <div class="py-4 border-bottom">
                    <h4 class="mb-3"> Visibilité et réseau : </h4>
                    <p class="mb-0">
                        Profitez de notre réseau international de décideurs, d'experts et de leaders d'opinion pour
                        renforcer votre influence et vos opportunités de croissance. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class=" py-8 container rounded-4">
    <div class="">
        <span class="fw-semibold display-2">Contact</span>
        <h2 class="h1 mt-3 mb-0 text-white"> Visibilité et réseau : </h2>

    </div>
    <div class="card">
        <div class="card-body p-6">
            <div>
                <h3 class="mb-4">En collaborant avec UFR, vous rejoignez un réseau de leaders qui façonnent l'avenir des
                    affaires et du management. Ensemble, nous développons des solutions qui transforment non seulement
                    vos équipes, mais aussi votre organisation dans son ensemble.
                </h3>
                <form>
                    <div class="row">
                        <div class="col-xl-6 col-12">
                            <div class="mb-3">
                                <label for="contactName" class="form-label">
                                    Nom
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="" id="contactName" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="mb-3">
                                <label for="contactPhone" class="form-label">
                                    Téléphone
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="" id="contactPhone" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="mb-3">
                                <label for="contactWhatsNumber" class="form-label">
                                    Numéro Whatsapp
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="" id="contactWhatsNumber"
                                    required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="mb-3">
                                <label for="contactEmail" class="form-label">
                                    Email
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="email" class="form-control" placeholder="" id="contactEmail" required="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="contactsubject" class="form-label">Objet</label>
                                <input type="text" class="form-control" placeholder="" id="contactsubject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="contactMessage" class="form-label">Message</label>
                                <textarea rows="3" class="form-control" placeholder="" id="contactMessage"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Envoyer la demande</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<br><br><br>



@endsection