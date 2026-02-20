<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function index()
    {
        $annonces = Annonce::orderBy('created_at', 'desc')->get();
        return view('dashboard.annonce.index', compact('annonces'));
    }

    public function create() {
        return view('dashboard.annonce.create');
    }

    public function store(Request $request) {
        // Validation des données
        $request->validate([
            'titre' => 'required|string|max:255',
            'page_cible' => 'required|string|max:255',
            'fichier_pdf' => 'required|file|mimes:pdf|max:4096', // Limite de 4MB pour le fichier PDF
            'description' => 'nullable|string',
        ]);

        // Traitement du fichier PDF
        // $path = $request->file('fichier_pdf') ? $request->file('fichier_pdf')->store('/storage', 'public') : null;
        // $path = $request->file('fichier_pdf') ? $request->file('fichier_pdf')->store('uploads', 'public') : null;
        if ($request->hasFile('fichier_pdf')) {
            $file = $request->file('fichier_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('/storage', $filename);
        }

        // Enregistrement de l'annonce dans la base de données
        Annonce::create([
            'titre' => $request->input('titre'),
            'page_cible' => $request->input('page_cible'),
            'fichier_path' => $filePath ?? null,
            'description' => $request->input('description'),
        ]);

        return redirect()->route('annonce.index')->with('success', 'Annonce ajoutée avec succès.');
    }

    public function edit($id) {
        $annonce = Annonce::findOrFail($id);
        return view('dashboard.annonce.edit', compact('annonce'));
    }

    public function update(Request $request) {
        // dd($request->all());
        // Validation des données
        $request->validate([
            'titre' => 'required|string|max:255',
            'page_cible' => 'string|max:255',
            'fichier_pdf' => 'nullable|file|mimes:pdf|max:4096', // Limite de 4MB pour le fichier PDF
            'description' => 'nullable|string',
        ]);

        $annonce = Annonce::findOrFail($request->annonce_id);
        dd($annonce);

        // Traitement du fichier PDF si un nouveau fichier est téléchargé
        if ($request->hasFile('fichier_pdf')) {
            $path = $request->file('fichier_pdf')->store('uploads', 'public');
            $annonce->fichier_path = $path;
        }

        // Mise à jour des autres champs
        $annonce->titre = $request->input('titre');
        $annonce->page_cible = $request->input('page_cible');
        $annonce->description = $request->input('description');
        $annonce->save();

        return redirect()->route('annonce.index')->with('success', 'Annonce mise à jour avec succès.');
    }

    public function destroy($id) {
        $annonce = Annonce::findOrFail($id);
        $annonce->delete();
        return redirect()->route('annonce.index')->with('success', 'Annonce supprimée avec succès.');
    }

    public function download(Annonce $annonce, $id) {
        $annonce = Annonce::findOrFail($id);
        if ($annonce->fichier_path && file_exists(storage_path('app/public/' . $annonce->fichier_path))) {
            return response()->download(storage_path('app/public/' . $annonce->fichier_path));
        } else {
            return redirect()->route('annonce.index')->with('error', 'Fichier non trouvé.');
        }
    }
}
