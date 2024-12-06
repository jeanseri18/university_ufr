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
use App\Http\Controllers\PageUniversityController;

Route::get('/qui-sommes-nous', [PageUniversityController::class, 'quiSommesNous'])->name('quiSommesNous');
Route::get('/larecherche', [PageUniversityController::class, 'larecherche'])->name('larecherche');
Route::get('/filiere-pro', [PageUniversityController::class, 'filierePro'])->name('filierePro');
Route::get('/alumnis', [PageUniversityController::class, 'alumnis'])->name('alumnis');
Route::get('/actualité', [PageUniversityController::class, 'actualité'])->name('actualité');
Route::get('/partenaire', [PageUniversityController::class, 'partenaire'])->name('partenaire');


Route::get('/', function () {
    return view('welcome');
});
