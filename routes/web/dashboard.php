<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\ResultatExamenControler;
use App\Http\Controllers\ParlonsEcoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MediathequeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\AnnonceController;
use App\Http\Controllers\UserController;



/*****************************************************************************************************************************************
**                                                                                                                                      **
**                               PROFESSEUR ROUTE                                                                                       ** 
**                                                                                                                                      **
*****************************************************************************************************************************************/  
Route::get('/professeurs', [ProfesseurController::class, 'index'])->name('professeurs.index');
Route::get('/professeurs/create', [ProfesseurController::class, 'create'])->name('professeurs.create');
Route::post('/professeurs', [ProfesseurController::class, 'store'])->name('professeurs.store');
Route::delete('/professeurs/{id}', [ProfesseurController::class, 'destroy'])->name('professeurs.destroy');



/*****************************************************************************************************************************************
**                                                                                                                                      **
**                               RESULTAT D'EXAMEN ROUTE                                                                                ** 
**                                                                                                                                      **
*****************************************************************************************************************************************/  
Route::get('/resultat-examen', [ResultatExamenControler::class, 'resultatExamenIndex'])->name('resultat-examen.index');
Route::get('/resultat-examen/create', [ResultatExamenControler::class, 'resultatExamenCreate'])->name('resultat-examen.create');
Route::post('/resultat-examen', [ResultatExamenControler::class, 'resultatExamenStore'])->name('resultat-examen.store');
Route::get('/resultat-examen/{id}/edit', [ResultatExamenControler::class, 'resultatExamenEdit'])->name('resultat-examen.edit');
Route::post('/resultat-examen/{id}', [ResultatExamenControler::class, 'resultatExamenUpdate'])->name('resultat-examen.update');
Route::delete('/resultat-examen/{id}', [ResultatExamenControler::class, 'resultatExamenDestroy'])->name('resultat-examen.destroy');
Route::get('/resultat-examen/{id}/download/', [ResultatExamenControler::class, 'resultatExamenDownloadPdf'])->name('resultat-examen.download');



/*****************************************************************************************************************************************
**                                                                                                                                      **
**                               PARLONS ECONOMIE ROUTE                                                                                 ** 
**                                                                                                                                      **
*****************************************************************************************************************************************/  
Route::get('/parlons-eco', [ParlonsEcoController::class, 'index'])->name('parlons-eco.index');
Route::get('/parlons-eco/create', [ParlonsEcoController::class, 'create'])->name('parlons-eco.create');
Route::post('/parlons-eco', [ParlonsEcoController::class, 'store'])->name('parlons-eco.store');



/*****************************************************************************************************************************************
**                                                                                                                                      **
**                               ANNONCE ALERTE ROUTE                                                                                       ** 
**                                                                                                                                      **
*****************************************************************************************************************************************/  
Route::get('/annonce', [AnnonceController::class, 'index'])->name('annonce.index');
Route::get('/annonce/create', [AnnonceController::class, 'create'])->name('annonce.create');
Route::post('/annonce/store', [AnnonceController::class, 'store'])->name('annonce.store');
Route::get('/annonce/{id}/edit', [AnnonceController::class, 'edit'])->name('annonce.edit');
Route::post('/annonce/update', [AnnonceController::class, 'update'])->name('annonce.update');
Route::delete('/annonce/{id}', [AnnonceController::class, 'destroy'])->name('annonce.destroy');
Route::get('/annonce/{id}/download', [AnnonceController::class, 'download'])->name('annonce.download');



Route::get('/home', [DashboardController::class, 'index'])->name('home');

//route pour creer un evenement
Route::get('/events/new_create', [EventController::class, 'new_event_create']);
Route::post('/events/add', [EventController::class, 'new_event_store'])->name('new.event.store');
Route::get('/new_events', [EventController::class, 'new_index'])->name('new_event.index');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');


Route::get('/mediatheque', [MediathequeController::class, 'index'])->name('mediatheque.index');
Route::get('/mediatheque/create', [MediathequeController::class, 'create'])->name('mediatheque.create');
Route::post('/mediatheque', [MediathequeController::class, 'store'])->name('mediatheque.store');
Route::delete('/mediatheque/{id}', [MediathequeController::class, 'destroy'])->name('mediatheque.destroy');

// Liste des actualités
Route::get('/actualites', [ActualiteController::class, 'index'])->name('actualites.index');

// Formulaire pour ajouter une actualité
Route::get('/actualites/create', [ActualiteController::class, 'create'])->name('actualites.create');

// Enregistrer une nouvelle actualité
Route::post('/actualites', [ActualiteController::class, 'store'])->name('actualites.store');

// Formulaire pour modifier une actualité
Route::get('/actualites/{actualite}/edit', [ActualiteController::class, 'edit'])->name('actualites.edit');

// Mettre à jour une actualité
Route::put('/actualites/{actualite}', [ActualiteController::class, 'update'])->name('actualites.update');

// Supprimer une actualité
Route::delete('/actualites/{actualite}', [ActualiteController::class, 'destroy'])->name('actualites.destroy');




// Route pour lister les utilisateurs
Route::get('users', [UserController::class, 'index'])->name('users.index');

// Route pour afficher le formulaire de création d'un utilisateur
Route::get('users/create', [UserController::class, 'create'])->name('users.create');

// Route pour enregistrer un utilisateur
Route::post('users', [UserController::class, 'store'])->name('users.store');


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('change-password', [AuthController::class, 'showChangePasswordForm'])->name('change.password.form');
Route::post('change-password', [AuthController::class, 'changePassword'])->name('change.password');
