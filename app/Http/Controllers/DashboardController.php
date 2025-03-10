<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;
use App\Models\Document;
use App\Models\Event;
use App\Models\Filiere;
use App\Models\Mediatheque;
use App\Models\Job;
use App\Models\Visiteur; // Import du modèle Visiteur
use Carbon\Carbon; // Import de Carbon pour gérer les dates

class DashboardController extends Controller
{
    public function index()
    {
        // Récupération des données pour le dashboard
        $actualites = Actualite::count();
        $documents = Document::count();
        $events = Event::count();
        $filieres = Filiere::count();
        $mediatheques = Mediatheque::count();
        $jobs = Job::count();

        // Récupérer le nombre de visiteurs par mois (pour afficher le graphique mensuel)
        $visiteursParMois = Visiteur::selectRaw('MONTH(created_at) as mois, COUNT(*) as total')
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy('mois')
            ->orderBy('mois')
            ->get();

        // Structure des mois
        $months = ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'];
        // Initialisation du tableau des visiteurs avec des zéros
        $visitors = array_fill(0, 12, 0);

        // Remplir le tableau des visiteurs avec les données récupérées
        foreach ($visiteursParMois as $data) {
            $visitors[$data->mois - 1] = $data->total; // Les mois sont basés sur 1, donc on soustrait 1
        }

        // Calcul des visiteurs journaliers (visiteurs aujourd'hui)
        $visiteursJournalier = Visiteur::whereDate('created_at', Carbon::today())->count();

        // Calcul des visiteurs annuels (visiteurs de l'année en cours)
        $visiteursAnnuel = Visiteur::whereYear('created_at', Carbon::now()->year)->count();

        // Calcul des visiteurs mensuels du mois en cours
        $visiteursMensuels = Visiteur::whereMonth('created_at', Carbon::now()->month) // Mois actuel
            ->whereYear('created_at', Carbon::now()->year) // Année actuelle
            ->count();

        // Retourner la vue avec toutes les données nécessaires
        return view('dashboard', compact(
            'actualites', 'documents', 'events', 'filieres', 'mediatheques', 'jobs', 'months', 'visitors',
            'visiteursJournalier', 'visiteursAnnuel', 'visiteursMensuels'
        ));
    }
}
