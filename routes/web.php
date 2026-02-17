<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DocumentController;



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

Route::get('/detail/filieres-pro/{id}', [FiliereController::class, 'showDetailFilierPro'])->name('detail-filiere.pro');

Route::get('/licence-pro', [FiliereController::class, 'showLicencePro'])->name('licence.pro');
Route::get('/master-pro', [FiliereController::class, 'showMasterPro'])->name('master.pro');
Route::get('/doctorat-pro', [FiliereController::class, 'showDoctoratPro'])->name('doctorat.pro');



Route::get('/events', [EventController::class, 'index'])->name('event.index');
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store'])->name('event.store');
Route::get('/events/{event}/edit', [EventController::class, 'edit']);
Route::post('/events/{event}', [EventController::class, 'update']);
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('event.destroy');
Route::get('/api/events', [EventController::class, 'getEvents']);


// Route pour afficher la liste des documents
Route::get('documents', [DocumentController::class, 'index'])->name('documents.index');

// Route pour afficher le formulaire de création d'un document
Route::get('documents/create', [DocumentController::class, 'create'])->name('documents.create');

// Route pour sauvegarder un document
Route::post('documents', [DocumentController::class, 'store'])->name('documents.store');

// Route pour afficher les détails d'un document spécifique
Route::get('documents/{id}', [DocumentController::class, 'show'])->name('documents.show');




require __DIR__.'/web/front.php';

Route::group(['prefix' => 'admin'], function () {
    require __DIR__.'/web/dashboard.php';
});