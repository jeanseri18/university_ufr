<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageUniversityController;
use App\Http\Controllers\ProfesseurController;

/*****************************************************************************************************************************************
**                                                                                                                                      **
**                               PAGES ACCUEIL & APROPOS ROUTE                                                                          ** 
**                                                                                                                                      **
*****************************************************************************************************************************************/  
Route::group(['prefix' => '/'], function () {
    Route::get('/', [PageUniversityController::class, 'welcome'])->name('welcome');
    Route::get('/qui-sommes-nous', [PageUniversityController::class, 'quiSommesNous'])->name('welcome.qui-sommes-nous');
    Route::get('/larecherche', [PageUniversityController::class, 'larecherche'])->name('larecherche');
    Route::get('/filiere-pro', [PageUniversityController::class, 'filierePro'])->name('filierePro');
    Route::get('/filiere-classique', [PageUniversityController::class, 'filiereCla'])->name('filiereCla');
    Route::get('/alumnis', [PageUniversityController::class, 'alumnis'])->name('alumnis');
    // Route::get('/actualite', [PageUniversityController::class, 'actualite'])->name('actualité');
    // Route::get('/partenaire', [PageUniversityController::class, 'partenaire'])->name('partenaire');
    Route::get('/etudiant', [PageUniversityController::class, 'etudiant'])->name('etudiant');
    Route::get('/all-actualite', [PageUniversityController::class, 'allactualite'])->name('all.actualite');
    Route::get('/etudiant/agenda', [PageUniversityController::class, 'agenda'])->name('etudiant.agenda');
    Route::get('/etudiant/listetresultas', [PageUniversityController::class, 'listofstudent'])->name('etudiant.listofstudent');
    Route::get('/detail-actulite/{actualite}', [PageUniversityController::class, 'detailactulite'])->name('detail.actualite');

});


/*****************************************************************************************************************************************
**                                                                                                                                      **
**                                  PAGES ETUDIANT ROUTE                                                                                ** 
**                                                                                                                                      **
*****************************************************************************************************************************************/  
Route::group(['prefix' => 'etudiant'], function () {
    Route::get('/agenda', [PageUniversityController::class, 'agendaEtudiant'])->name('etudiant.agenda');
    Route::get('/parlons-economie', [PageUniversityController::class, 'parlonsEco'])->name('etudiant.parlons-eco');
    Route::get('/opportunites-mobilite', [PageUniversityController::class, 'opportunitesMobilite'])->name('etudiant.opportunites.mobilite');
    Route::get('/opportunites/liste', [PageUniversityController::class, 'opportunitesListe'])->name('etudiant.opportunites.liste');
    Route::get('/mobilite/liste', [PageUniversityController::class, 'mobiliteListe'])->name('etudiant.mobilite.liste');
    Route::get('/resultat-examen/liste', [PageUniversityController::class, 'resultatExamen'])->name('etudiant.resultat-examen');
    Route::get('/liste-repartition', [PageUniversityController::class, 'listeRepartition'])->name('etudiant.liste-repartition');
});


/*****************************************************************************************************************************************
**                                                                                                                                      **
**                                  PAGES ENSEIGNANT ROUTE                                                                              ** 
**                                                                                                                                      **
*****************************************************************************************************************************************/  
Route::group(['prefix' => 'enseignant'], function () {
    // Route::get('/vie-sociale', [ProfesseurController::class, 'enseignant'])->name('enseignant');
    Route::get('/vie-sociale', [PageUniversityController::class, 'enseignantVieSociale'])->name('enseignant.vie-sociale');
    Route::get('/enseignant-event', [ProfesseurController::class, 'calendrier'])->name('enseignant.calendrier');
    Route::get('/enseignant-list', [ProfesseurController::class, 'liste'])->name('enseignant.liste');
    Route::get('/enseignant-procedure', [ProfesseurController::class, 'procedure'])->name('enseignant.procedure');
    Route::get('/enseignant-cames', [ProfesseurController::class, 'cames'])->name('enseignant.cames');
    Route::get('/enseignant-rejoindre', [ProfesseurController::class, 'rejoindre'])->name('enseignant.rejoindre');

    // Route::get('/agenda', [PageUniversityController::class, 'agendaEnseignant'])->name('enseignant.agenda');
    // Route::get('/parlons-eco', [PageUniversityController::class, 'parlonsEcoEnseignant'])->name('enseignant.parlons-eco');
    Route::get('/opportunites-mobilite', [PageUniversityController::class, 'opportunitesMobiliteEnseignant'])->name('enseignant.opportunites.mobilite');
    Route::get('opportunites/liste', [PageUniversityController::class, 'opportunitesListeEnseignant'])->name('enseignant.opportunites.liste');
    Route::get('/mobilite/liste', [PageUniversityController::class, 'mobiliteListeEnseignant'])->name('enseignant.mobilite.liste');
    Route::get('/cours-td', [PageUniversityController::class, 'enseignantCoursTd'])->name('enseignant.cours.td');
    
});


/*****************************************************************************************************************************************
**                                                                                                                                      **
**                                  PAGES PARTENAIRE ROUTE                                                                              ** 
**                                                                                                                                      **
*****************************************************************************************************************************************/  
Route::group(['prefix' => 'partenaire'], function () {
    Route::get('/', [PageUniversityController::class, 'partenaire'])->name('partenaire');
    Route::get('/liste', [PageUniversityController::class, 'partenaireListe'])->name('partenaire.liste');
    Route::get('/procedure-administrative', [PageUniversityController::class, 'partenaireProcedureAdministrative'])->name('partenaire.procedure-administrative');
    Route::get('/opportunites-mobilite', [PageUniversityController::class, 'partenaireOpportunitesMobilite'])->name('partenaire.opportunites.mobilite');
    Route::get('/vie-sociale', [PageUniversityController::class, 'partenaireVieSociale'])->name('partenaire.vie-sociale');
    Route::get('/agenda', [PageUniversityController::class, 'partenaireAgenda'])->name('partenaire.agenda');
});


/*****************************************************************************************************************************************
**                                                                                                                                      **
**                                  PAGES PERSONNEL ADMINISTRATIF ROUTE                                                                 ** 
**                                                                                                                                      **
*****************************************************************************************************************************************/  
Route::group(['prefix' => 'personnel-administratif'], function () {
    Route::get('/', [PageUniversityController::class, 'personnelAdministratifVieSociale'])->name('personnel-administratif.vie-sociale');
    Route::get('/agenda', [PageUniversityController::class, 'personnelAdministratifAgenda'])->name('personnel-administratif.agenda');
    Route::get('/procedure-administrative', [PageUniversityController::class, 'personnelAdministratifProcedure'])->name('personnel-administratif.procedure');
    Route::get('/promotions', [PageUniversityController::class, 'personnelAdministratifPromotions'])->name('personnel-administratif.promotions');
    Route::get('/opportunites-mobilite', [PageUniversityController::class, 'personnelAdministratifOpportunitesMobilite'])->name('personnel-administratif.opportunites.mobilite');
});