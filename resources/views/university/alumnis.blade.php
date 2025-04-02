@extends('layouts.university')

@section('title', 'Ecoles doctorales | UFR')

@section('content')

  <div class="col-md-8">
    <section class="py-8">
      <div class="container">
        <div class="text-center mb-3">
          <h1 class="display-2 fw-bold">Rechercher un Ancien Étudiant</h1>
          <p class="lead">
            Retrouvez facilement un ancien étudiant grâce à notre base de données. 
            Entrez son nom ou d'autres informations pour le localiser.
          </p>
        </div>
        <!-- Form -->
        <form class="row px-md-8 mx-md-8 needs-validation" novalidate="">
          <div class="mb-3 col-12 col-md-8 ps-0 ms-2 ms-md-0">
            <label class="form-label visually-hidden" for="alumniSearch">Nom ou Information</label>
            <input type="text" class="form-control" placeholder="Nom, promotion ou département" id="alumniSearch" name="alumniSearch" required="">
            <div class="invalid-feedback">Veuillez entrer un nom ou une information valide</div>
          </div>
          <div class="mb-3 col-auto ps-0">
            <button class="btn btn-primary" type="submit">Rechercher</button>
          </div>
        </form>
      </div>
    </section>

    <!-- Section Nous soutenir -->
    <section class="py-8 bg-light">
      <div class="container">
        <div class="text-center mb-3">
          <h1 class="display-2 fw-bold">Nous soutenir</h1>
          <p class="lead">
            Soutenez l'UFR en effectuant un don. Votre contribution nous permettra de renforcer les ressources et d'améliorer l'environnement d'apprentissage pour nos étudiants et enseignants.
          </p>
        </div>
        <div class="text-center mt-4">
          <p class="text-muted">Vous pouvez aussi faire un don directement via notre plateforme en ligne en cliquant sur le bouton ci-dessous.</p>
          <a href="https://www.example.com/don" class="btn btn-primary">Faire un Don en Ligne</a>
        </div>
      </div>
    </section>

@endsection
