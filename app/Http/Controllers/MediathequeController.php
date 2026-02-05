<?php

namespace App\Http\Controllers;

use App\Models\Mediatheque;
use Illuminate\Http\Request;

class MediathequeController extends Controller
{
    // Lister les éléments
    public function index()
    {
        $mediatheques = Mediatheque::all();
        return view('mediatheque.index', compact('mediatheques'));
    }

    // Afficher le formulaire d'ajout
    public function create()
    {
        return view('mediatheque.create');
    }

    // Ajouter un nouvel élément
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'titre' => 'required|string|max:255',
            'type' => 'required|in:image,video,audio',
            'fichier' => 'nullable|file|max:10240', // Max 10 MB
            'type_page' => 'required|in:a-propos,etudiant,enseignant,personnel-administratif',
            'description' => 'nullable|string',
        ]);

        $path = $request->file('fichier') ? $request->file('fichier')->store('uploads', 'public') : null;

        // dd($request->all(), $path);

        Mediatheque::create([
            'titre' => $request->titre,
            'type' => $request->type,
            'page_type' => $request->type_page,
            'fichier' => $path,
            'date_ajoute' => now(),
            'description' => $request->description,
        ]);

        return redirect()->route('mediatheque.index')->with('success', 'Média ajouté avec succès.');
    }

    // Supprimer un élément
    public function destroy($id)
    {
        $mediatheque = Mediatheque::findOrFail($id);

        // Supprimer le fichier associé si présent
        if ($mediatheque->fichier) {
            \Storage::disk('public')->delete($mediatheque->fichier);
        }

        $mediatheque->delete();

        return redirect()->route('mediatheque.index')->with('success', 'Média supprimé avec succès.');
    }
}

