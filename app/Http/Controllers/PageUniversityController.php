<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // Importer la façade DB
use App\Models\Mediatheque;
use App\Models\Job;
use App\Models\Event;
use App\Models\Actualite;

class PageUniversityController extends Controller
{
    //

   
    public function welcome()
    {
        $actualites = Actualite::orderBy('created_at', 'desc')->limit(10)->get();
        $events = Event::orderBy('created_at', 'desc')->limit(10)->get();
        $mediatheques = Mediatheque::orderBy('created_at', 'desc')->limit(10)->get();
        return view('welcome', compact('actualites','mediatheques','events'));
    }

    public function quiSommesNous()
    {
        return view('university.qui-sommes-nous');
    }

    public function larecherche()
    {
        return  view('university.larecherche');
    }

    public function filierePro()
    {
           // Récupérer les filières de type Licence et de catégorie classique depuis la base de données
           $filieres = DB::table('filieres')
           ->where('type', 'Licence')
           ->where('categorie', 'filiere pro')
           ->get();
// Définir 20 images en dur
$images = [
    'image/7I8A9751.jpg',
    'image/7I8A9878.jpg',
    'image/7I8A9914.jpg',
    'image/7I8A9894.jpg',
    'image/7I8A9623.jpg',
    'image/7I8A9928.jpg',
    'image/licence7.jpg',
    'image/licence8.jpg',
    'image/licence9.jpg',
    'image/licence10.jpg',
    'image/licence11.jpg',
    'image/licence12.jpg',
    'image/licence13.jpg',
    'image/licence14.jpg',
    'image/licence15.jpg',
    'image/licence16.jpg',
    'image/licence17.jpg',
    'image/licence18.jpg',
    'image/licence19.jpg',
    'image/licence20.jpg'
];

// Assigner les images aux filières en fonction de l'index
foreach ($filieres as $index => $filiere) {
    if (isset($images[$index])) {
        $filiere->image = $images[$index];
    } else {
        $filiere->image = 'images/default-image.jpg'; // Image par défaut
    }
}
// Passer les données à la vue
        return view('university.filiere-pro', compact('filieres'));
    }

    public function filiereCla()
    {
        return view('university.filiere-classique');
    }

    public function alumnis()
    {
        return view('university.alumnis');
    }
    public function actualité()
    {
        $actualites = Actualite::orderBy('created_at', 'desc')->limit(10)->get();
        $events = Event::orderBy('created_at', 'desc')->limit(10)->get();
        $mediatheques = Mediatheque::orderBy('created_at', 'desc')->limit(10)->get();
   
        return view('welcome', compact('actualites','mediatheques','events',));
    }
    public function partenaire()
    {
        return view('university.partenaire');
    }
    public function etudiant()
    {
        return view('university.etudiant');
    }

    public function allactualite()
    {
        $actualites = Actualite::orderBy('created_at', 'desc')->limit(300)->get();
        $jobs = Job::orderBy('created_at', 'desc')->limit(300)->get();
        $events = Event::orderBy('created_at', 'desc')->limit(300)->get();
        $mediatheques = Mediatheque::orderBy('created_at', 'desc')->limit(300)->get();
    
        return view('university.all-actualite', compact('actualites', 'jobs', 'mediatheques', 'events'));
    }
    
    
    public function detailactulite(Actualite $actualite)
    {
        return view('university.detail-actualite', compact('actualite'));
    }
}
