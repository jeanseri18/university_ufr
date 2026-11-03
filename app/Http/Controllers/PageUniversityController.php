<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // Importer la façade DB
use App\Models\Mediatheque;
use App\Models\Job;
use App\Models\Event;
use App\Models\Actualite;
use App\Models\Annonce;
use App\Models\Document;
use App\Models\ListeRepartition;
use App\Models\New_event;
use App\Models\ResultatExamens;

class PageUniversityController extends Controller
{
    //
    public function welcome()
    {
        $actualites = Actualite::orderBy('created_at', 'desc')->limit(8)->get();
        $events = Event::orderBy('created_at', 'desc')->get();
        $new_events = New_event::orderBy('created_at', 'desc')->get();
        $mediatheques = Mediatheque::orderBy('created_at', 'desc')->limit(8)->get();
        $annonces = Annonce::orderBy('created_at', 'desc')->limit(8)->get();
        return view('welcome', compact('actualites', 'mediatheques', 'events', 'new_events', 'annonces'));
    }

    // public function actualite()
    // {
    //     $actualites = Actualite::orderBy('created_at', 'desc')->limit(10)->get();
    //     $events = Event::orderBy('created_at', 'desc')->limit(10)->get();
    //     $new_events = New_event::orderBy('created_at', 'desc')->limit(10)->get();
    //     $mediatheques = Mediatheque::orderBy('created_at', 'desc')->limit(10)->get();
    //     $annonces = Annonce::orderBy('created_at', 'desc')->limit(8)->get();

    //     return view('welcome', compact('actualites', 'mediatheques', 'events', 'new_events', 'annonces'));
    // }


    public function quiSommesNous()
    {
        return view('university.apropos.qui-sommes-nous');
    }

    public function larecherche()
    {
        return  view('university.apropos.larecherche');
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
        return view('university.apropos.filiere-pro', compact('filieres'));
    }

    public function filiereCla()
    {
        return view('university.apropos.filiere-classique');
    }

    public function alumnis()
    {
        return view('university.apropos.alumnis');
    }

    public function partenaire()
    {
        return view('university.partenaire.vie-sociale');
        return view('university.partenaire');
    }

    public function etudiant()
    {
        $docs = Document::where('type', 'guideetudiant') // ou 'guide etudiant' selon ce que tu stockes
            ->whereIn('foruser', ['etudiant', 'tout_le_monde'])
            ->orderBy('created_at', 'desc')
            ->get();

        $mediatheques = Mediatheque::orderBy('created_at', 'desc')->where('page_type', 'etudiant')->limit(8)->get();

        return view('university.etudiant', compact('docs', 'mediatheques'));
    }


    public function resultatExamen()
    {
        // dd('resulta examen');
        $resultats = ResultatExamens::where('type', 'resultat-examen')
            ->orderBy('created_at', 'desc')
            ->get();

        $procesVerbaux = ResultatExamens::where('type', 'proces-verbal')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('university.etudiant.resultat-examen', compact('resultats', 'procesVerbaux'));
    }


    public function allactualite()
    {
        // dd('PAge actualité');
        $actualites = Actualite::orderBy('created_at', 'desc')->limit(300)->get();
        $jobs = Job::orderBy('created_at', 'desc')->limit(300)->get();
        $events = Event::orderBy('created_at', 'desc')->limit(300)->get();
        $mediatheques = Mediatheque::orderBy('created_at', 'desc')->limit(300)->get();

        return view('university.all-actualite', compact('actualites', 'jobs', 'mediatheques', 'events'));
    }

    public function agenda(Request $request)
    {
        // Récupérer le mot-clé de la recherche
        $search = $request->input('search');

        // Récupérer les événements, appliquer la recherche si nécessaire et paginer les résultats
        $events = Event::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%$search%")
                ->orWhere('description', 'like', "%$search%");
        })
            ->orderBy('created_at', 'desc')
            ->paginate(10);  // Nombre d'événements par page

        return view('university.agenda', compact('events'));
    }

    public function evenement(Request $request)
    {
        // Récupérer le mot-clé de la recherche
        $search = $request->input('search');

        // Récupérer les événements, appliquer la recherche si nécessaire et paginer les résultats
        $events = New_event::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%$search%")
                ->orWhere('description', 'like', "%$search%");
        })
            ->orderBy('created_at', 'desc')
            ->paginate(10);  // Nombre d'événements par page

        return view('university.evenement', compact('events'));
    }

    public function listofstudent(Request $request)
    {
        // Récupérer le mot-clé de la recherche
        $search = $request->input('search');

        // Récupérer les événements, appliquer la recherche si nécessaire et paginer les résultats
        $docs = Document::whereIn('foruser', ['etudiant', 'tout_le_monde'])
            ->when($search, function ($query, $search) {
                return $query->where('titre', 'like', "%$search%")
                    ->orWhere('details', 'like', "%$search%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);  // Nombre d'événements par page

        return view('university.listofstudent', compact('docs'));
    }

    public function detailactulite(Actualite $actualite)
    {
        return view('university.detail-actualite', compact('actualite'));
    }


    // public function personnel()
    // {
    //     $actualites = Actualite::whereIn('foruser', ['personnel_administratif', 'tout_le_monde'])
    //         ->orderBy('created_at', 'desc')
    //         ->limit(8)
    //         ->get();

    //     $events = Event::whereIn('foruser', ['personnel_administratif', 'tout_le_monde'])
    //         ->orderBy('created_at', 'desc')
    //         ->limit(12)
    //         ->get();
            
    //     $docs = Document::where('type', 'guideenseignant') // ou 'guide etudiant' selon ce que tu stockes
    //         ->whereIn('foruser', ['personnel_administratif', 'tout_le_monde'])
    //         ->orderBy('created_at', 'desc')
    //         ->get();

    //     return view('university.personnel-administratif.personnel-admin', compact('actualites', 'events', 'docs'));
    // }

    public function personnelAdministratifVieSociale()
    {
        $medias = Mediatheque::orderBy('created_at', 'desc')->where('page_type', 'partenaire')->limit(8)->get();

        return view('university.personnel-administratif.vie-sociale', compact('medias'));
    }

    public function parlonsEco()
    {
        return view('university.etudiant.parlons-eco');
    }

    public function opportunitesMobilite()
    {
        return view('university.etudiant.opportunites-mobilite');
    }

    public function opportunitesListe(Request $request)
    {
        // Récupérer le mot-clé de la recherche
        // $search = $request->input('search');

        // // Récupérer les jobs, appliquer la recherche si nécessaire et paginer les résultats
        // $jobs = Job::when($search, function ($query, $search) {
        //     return $query->where('title', 'like', "%$search%")
        //         ->orWhere('description', 'like', "%$search%");
        // })
        //     ->orderBy('created_at', 'desc')
        //     ->paginate(10);  // Nombre de jobs par page

        // return view('university.opportunites-liste', compact('jobs'));
        return view('university.etudiant.opportunites-liste');
    }

    public function mobiliteListe(Request $request)
    {
        return view('university.etudiant.mobilite-liste');
    }

    public function agendaEtudiant()
    {
        $events = Event::orderBy('created_at', 'desc')->get();

        return view('university.etudiant.agenda-etudiant', compact('events'));
    }

    public function opportunitesMobiliteEnseignant()
    {
        return view('university.enseignant-opportunites-mobilite');
    }

    public function opportunitesListeEnseignant(Request $request)
    {
        return view('university.enseignant-opportunites-liste');
    }

    public function mobiliteListeEnseignant(Request $request)
    {
        return view('university.enseignant-mobilite-liste');
    }

    public function enseignantCoursTd()
    {
        return view('university.enseignant.enseignant-cours-td');
    }

    function listeRepartition() {
        $listes = ListeRepartition::orderBy('created_at', 'desc')->where('type_page', 'etudiant')->get();
        return view('university.etudiant.liste-repartition', compact('listes'));
    }

    function partenaireVieSociale() 
    {
        // $actualites = Actualite::whereIn('foruser', ['enseignant', 'tout_le_monde'])
        // ->orderBy('created_at', 'desc')
        // ->limit(8)
        // ->get();

        // // dd($actualites);
    
        // $events = Event::whereIn('foruser', ['enseignant', 'tout_le_monde'])
        //     ->orderBy('created_at', 'desc')
        //     ->limit(12)
        //     ->get();
        //     $docs = Document::where('type', 'guideenseignant') // ou 'guide etudiant' selon ce que tu stockes
        //     ->whereIn('foruser', ['enseignant', 'tout_le_monde'])
        //     ->orderBy('created_at', 'desc')
        //     ->get();

        $mediatheques = Mediatheque::whereIn('page_type', ['enseignant'])
            ->orderBy('created_at', 'desc')
            ->get();

        // $mediatheques = Mediatheque::orderBy('created_at', 'desc')->where('page_type', 'partenaire')->limit(8)->get();

        return view('university.partenaire.vie-sociale', compact('mediatheques'));
    }

    ///////////////////////////

    public function personnelAdministratifAgenda()
    {
        $events = Event::orderBy('created_at', 'desc')->get();

        return view('university.personnel-administratif.agenda', compact('events'));
    }

    public function personnelAdministratifProcedure()
    {
        return view('university.personnel-administratif.procedure-administrative');
    }

    public function personnelAdministratifPromotions()
    {
        return view('university.personnel-administratif.promotions');
    }

    public function personnelAdministratifOpportunitesMobilite()
    {
        return view('university.personnel-administratif.opportunites-mobilite');
    }

    public function enseignantVieSociale()
    {
        $actualites = Actualite::whereIn('foruser', ['enseignant', 'tout_le_monde'])
        ->orderBy('created_at', 'desc')
        ->limit(8)
        ->get();

        // dd($actualites);
    
        $events = Event::whereIn('foruser', ['enseignant', 'tout_le_monde'])
            ->orderBy('created_at', 'desc')
            ->limit(12)
            ->get();
            $docs = Document::where('type', 'guideenseignant') // ou 'guide etudiant' selon ce que tu stockes
            ->whereIn('foruser', ['enseignant', 'tout_le_monde'])
            ->orderBy('created_at', 'desc')
            ->get();

        $mediatheques = Mediatheque::whereIn('page_type', ['enseignant'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('university.enseignant.vie-sociale', compact('actualites', 'events', 'docs', 'mediatheques'));
    }

    public function partenaireProcedureAdministrative()
    {
        return view('university.partenaire.procedure-administrative');
    }

    public function partenaireListe()
    {
        return view('university.partenaire.liste');
    }

    public function partenaireOpportunitesMobilite()
    {
        return view('university.partenaire.opportunites-mobilite');
    }

}
