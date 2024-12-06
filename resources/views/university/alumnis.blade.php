@extends('layouts.university')

@section('title', 'Ecoles doctorales | UFR')

@section('content')
<section class="py-8">
  <div class="container">
    <div class="row">
      <div class="offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 col-md-12 col-12">
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
    </div>
  </div>
</section>

@endsection