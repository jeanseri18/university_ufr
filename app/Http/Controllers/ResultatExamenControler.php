<?php

namespace App\Http\Controllers;

use App\Models\ResultatExamens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResultatExamenControler extends Controller
{
    //
    public function resultatExamenIndex()
    {
        // Récupérer tous les résultats d'examen depuis la base de données
        $resultats = ResultatExamens::orderBy('created_at', 'desc')->get();

        // Retourner la vue avec les résultats
        return view('resultat_examen.index', compact('resultats'));
    }

    public function resultatExamenCreate()
    {
        // Retourner la vue pour créer un nouveau résultat d'examen
        return view('resultat_examen.create');
    }

    public function resultatExamenStore(Request $request)
    {
        // dd($request->all());
        // dd($request->fichier_pdf);
        // Valider les données du formulaire
        $request->validate([
            'titre' => 'required|string|max:255',
            'sessions' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'fichier_pdf' => 'required|file|mimes:pdf|max:100048', // Assurez-vous que le fichier est un PDF et ne dépasse pas 100 Mo
            // 'fichier_pdf' => 'required|file|mimes:pdf|max:2048',
            'niveau_etude' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Enregistrer le fichier PDF
        $pdfPath = $request->file('fichier_pdf')->store('resultats_examens', 'public');

        // Créer un nouveau résultat d'examen
        ResultatExamens::create([
            'titre' => $request->titre,
            'sessions' => $request->sessions,
            'type' => $request->type,
            'pdf' => $pdfPath,
            'niveau_etude' => $request->niveau_etude,
            'description' => $request->description,
        ]);

        // Rediriger vers la liste des résultats avec un message de succès
        return redirect()->route('resultat-examen.index')->with('success', 'Résultat d\'examen créé avec succès.');
    }

    // public function resultatExamenShow($id)
    // {
    //     // Récupérer le résultat d'examen par son ID
    //     $resultat = ResultatExamens::findOrFail($id);

    //     // Retourner la vue pour afficher le résultat
    //     return view('resultat_examen.show', compact('resultat'));
    // }
    public function resultatExamenEdit($id)
    {
        // Récupérer le résultat d'examen par son ID
        $resultat = ResultatExamens::findOrFail($id);

        // Retourner la vue pour éditer le résultat
        return view('resultat_examen.edit', compact('resultat'));
    }

    public function resultatExamenUpdate(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'titre' => 'required|string|max:255',
            'sessions' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'fichier_pdf' => 'nullable|file|mimes:pdf|max:100048',
            'niveau_etude' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Récupérer le résultat d'examen par son ID
        $resultat = ResultatExamens::findOrFail($id);

        // Mettre à jour les champs du résultat d'examen
        $resultat->titre = $request->titre;
        $resultat->sessions = $request->sessions;
        $resultat->type = $request->type;
        if ($request->hasFile('fichier_pdf')) {
            // Enregistrer le nouveau fichier PDF
            $pdfPath = $request->file('fichier_pdf')->store('resultats_examens', 'public');
            $resultat->pdf = $pdfPath;
        }
        $resultat->niveau_etude = $request->niveau_etude;
        $resultat->description = $request->description;

        // Enregistrer les modifications
        $resultat->save();

        // Rediriger vers la liste des résultats avec un message de succès
        return redirect()->route('resultat-examen.index')->with('success', 'Résultat d\'examen mis à jour avec succès.');
    }

    public function resultatExamenDestroy($id)
    {
        // Récupérer le résultat d'examen par son ID
        $resultat = ResultatExamens::findOrFail($id);

        // Supprimer le fichier PDF du stockage
        if ($resultat->pdf) {
            Storage::disk('public')->delete($resultat->pdf);
        }

        // Supprimer le résultat d'examen de la base de données
        $resultat->delete();

        // Rediriger vers la liste des résultats avec un message de succès
        return redirect()->route('resultat-examen.index')->with('success', 'Résultat d\'examen supprimé avec succès.');
    }

    public function resultatExamenDownloadPdf($id)
    {
        // Récupérer le résultat d'examen par son ID
        $resultat = ResultatExamens::findOrFail($id);

        // Vérifier si le fichier PDF existe
        if (Storage::disk('public')->exists($resultat->pdf)) {
            // Retourner le fichier PDF en téléchargement
            return response()->download(storage_path('app/public/' . $resultat->pdf));
        }

        // Si le fichier n'existe pas, rediriger avec un message d'erreur
        return redirect()->route('resultat-examen.index')->with('error', 'Le fichier PDF n\'existe pas.');
    }
}
