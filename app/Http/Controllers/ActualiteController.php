<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function index()
    {
        $actualites = Actualite::all();
        return view('actualites.index', compact('actualites'));
    }

    public function create()
    {
        return view('actualites.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'titre' => 'required|string|max:255',
            'detail' => 'required|string',
            'foruser' => 'required|string',
            'date_ajoute' => 'required|date',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Actualite::create([
            'image' => $imagePath,
            'titre' => $request->titre,
            'detail' => $request->detail,
            'date_ajoute' => $request->date_ajoute,
            'foruser' => $request->foruser,
        ]);

        return redirect()->route('actualites.index')->with('success', 'Actualité ajoutée avec succès.');
    }

    public function edit(Actualite $actualite)
    {
        return view('actualites.edit', compact('actualite'));
    }

    public function update(Request $request, Actualite $actualite)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
            'titre' => 'required|string|max:255',
            'detail' => 'required|string',
            'date_ajoute' => 'required|date',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $actualite->image = $imagePath;
        }

        $actualite->update([
            'titre' => $request->titre,
            'detail' => $request->detail,
            'date_ajoute' => $request->date_ajoute,
        ]);

        return redirect()->route('actualites.index')->with('success', 'Actualité mise à jour avec succès.');
    }

    public function destroy(Actualite $actualite)
    {
        $actualite->delete();
        return redirect()->route('actualites.index')->with('success', 'Actualité supprimée avec succès.');
    }
}
