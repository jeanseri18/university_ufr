<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\PageUniversityController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\ActualiteController;

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

Route::get('/filieres', [FiliereController::class, 'index'])->name('filieres.index'); // Afficher toutes les filières
Route::get('/filieres/create', [FiliereController::class, 'create'])->name('filieres.create'); // Afficher le formulaire de création
Route::post('/filieres', [FiliereController::class, 'store'])->name('filieres.store'); // Enregistrer une nouvelle filière
Route::get('/filieres/{id}', [FiliereController::class, 'show'])->name('filieres.show'); // Afficher une filière spécifique
Route::get('/filieres/{id}/edit', [FiliereController::class, 'edit'])->name('filieres.edit'); // Afficher le formulaire d'édition
Route::put('/filieres/{id}', [FiliereController::class, 'update'])->name('filieres.update'); // Mettre à jour une filière
Route::delete('/filieres/{id}', [FiliereController::class, 'destroy'])->name('filieres.destroy'); // Supprimer une filière

Route::get('/licence-classique', [FiliereController::class, 'ShowLicenceClassique'])->name('licence.classique');
Route::get('/master-classique', [FiliereController::class, 'ShowMasterClassique'])->name('master.classique');
Route::get('/doctorat-classique', [FiliereController::class, 'ShowDoctoratClassique'])->name('doctorat.classique');
Route::get('/detail/filieres/{id}', [FiliereController::class, 'showpublic'])->name('detail.classique');

Route::get('/qui-sommes-nous', [PageUniversityController::class, 'quiSommesNous'])->name('quiSommesNous');
Route::get('/larecherche', [PageUniversityController::class, 'larecherche'])->name('larecherche');
Route::get('/filiere-pro', [PageUniversityController::class, 'filierePro'])->name('filierePro');
Route::get('/filiere-classique', [PageUniversityController::class, 'filiereCla'])->name('filiereCla');
Route::get('/alumnis', [PageUniversityController::class, 'alumnis'])->name('alumnis');
Route::get('/actualité', [PageUniversityController::class, 'actualité'])->name('actualité');
Route::get('/partenaire', [PageUniversityController::class, 'partenaire'])->name('partenaire');
Route::get('/etudiant', [PageUniversityController::class, 'etudiant'])->name('etudiant');


Route::get('/', function () {
    return view('welcome');
});


// Route pour lister les utilisateurs
Route::get('users', [UserController::class, 'index'])->name('users.index');

// Route pour afficher le formulaire de création d'un utilisateur
Route::get('users/create', [UserController::class, 'create'])->name('users.create');

// Route pour enregistrer un utilisateur
Route::post('users', [UserController::class, 'store'])->name('users.store');


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('change-password', [AuthController::class, 'showChangePasswordForm'])->name('change.password.form');
Route::post('change-password', [AuthController::class, 'changePassword'])->name('change.password');

// Route protégée (page d'accueil ou autre)
Route::get('home', function () {
    return view('dashboard');
})->name('home')->middleware('auth');
