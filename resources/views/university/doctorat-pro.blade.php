@extends('layouts.university')

@section('title', 'Master pro | UFR')

@section('content')


<section class="my-5 py-5 ">
    <div class="container">
        <div class="text-center mb-5">
            <small class="text-uppercase ls-md fw-semibold">Nos Doctorats</small>
            <h2 class="mt-3">Explorez nos filières professionnelles</h2>
            <p class="mb-0">Découvrez les formations qui vous ouvriront les portes de votre futur professionnel. Chaque programme est conçu pour vous donner les compétences et connaissances nécessaires pour exceller dans votre domaine.</p>
        </div>
        <div class="row g-4">
            <!-- Filière Développement Web -->
            @foreach($filieres as $filiere)
            <div class="col-md-4 col-12">
                <div class="card shadow border-0">
                    <img src="{{ $filiere->image }}" class="card-img-top" alt="Développement Web">
                    <div class="card-body">
                        <h5 class="card-title">                <strong>{{ $filiere->titre }}</strong><br>
                        </h5>
                        <p class="card-text">{{ Str::limit($filiere->objectifs, 200) }}</p>
                        <a href="{{ route('detail-filiere.pro', $filiere->id) }}" class="btn btn-primary">Découvrir cette filière</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Filière Marketing Digital -->

        </div>
    </div>
</section>


@endsection
