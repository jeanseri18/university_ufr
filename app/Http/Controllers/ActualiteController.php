<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        // dd($actualite);
        return view('actualites.edit', compact('actualite'));
    }

    public function update(Request $request, Actualite $actualite)
    {
        // dd($actualite);
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'titre' => 'required|string|max:255',
            'detail' => 'required|string',
            'date_ajoute' => 'required|date',
            'foruser' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('actualites.edit', ['actualite' => $actualite->id])
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        $actualite->update($validated);

        return redirect()->route('actualites.index')->with('success', 'Actualité mise à jour avec succès.');
    }

    public function destroy(Actualite $actualite)
    {
        $actualite->delete();
        return redirect()->route('actualites.index')->with('success', 'Actualité supprimée avec succès.');
    }
}
