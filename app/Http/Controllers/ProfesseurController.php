<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    // Lister les professeurs
    public function index()
    {
        $professeurs = Professeur::all();
        return view('professeurs.index', compact('professeurs'));
    }

    // Afficher le formulaire d'ajout
    public function create()
    {
        return view('professeurs.create');
    }

    // Ajouter un nouveau professeur
    public function store(Request $request)
    {
        // Debug pour vérifier si le fichier est bien transmis
      /*  if ($request->hasFile('image')) {
            $file = $request->file('image');
            dd($file->getClientOriginalName(), $file->getSize(), $file->getMimeType());
        } else {
            dd('Fichier non transmis.');
        }*/
    
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'nullable|string|max:255',
            'image' => 'nullable|file|image|max:7048', // Limitation à 2 MB
            'detail' => 'nullable|string',
        ]);
    
        $imagePath = $request->file('image') ? $request->file('image')->store('professeurs', 'public') : null;
    
        Professeur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'image' => $imagePath,
            'detail' => $request->detail,
        ]);
    
        return redirect()->route('professeurs.index')->with('success', 'Professeur ajouté avec succès.');
    }
    

    // Supprimer un professeur
    public function destroy($id)
    {
        $professeur = Professeur::findOrFail($id);

    
        if ($professeur->image) {
            \Storage::disk('public')->delete($professeur->image);
        }

        $professeur->delete();

        return redirect()->route('professeurs.index')->with('success', 'Professeur supprimé avec succès.');
    }
}
